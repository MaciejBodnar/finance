<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'header' => $this->getHeaderData(),
        ];
    }

    /**
     * Get header data including language switcher
     *
     * @return array
     */
    private function getHeaderData()
    {
        $services = $this->getServicesData();
        $menu = $this->getMenuData();

        // Check if any service link is active to highlight the parent dropdown
        if ($this->isAnyServiceActive($services)) {
            foreach ($menu as &$item) {
                if (!empty($item['has_dropdown'])) {
                    $item['active'] = true;
                }
            }
        }

        return [
            'logo' => $this->getLogoData(),
            'languages' => $this->getLanguages(),
            'menu' => $menu,
            'services' => $services,
        ];
    }

    /**
     * Check if any service link is active
     *
     * @param array $services
     * @return bool
     */
    private function isAnyServiceActive($services)
    {
        if (!$services) return false;

        foreach ($services as $column) {
            if (!empty($column['links'])) {
                foreach ($column['links'] as $link) {
                    if (isset($link['url']) && $this->isUrlActive($link['url'])) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * Get languages from Polylang
     *
     * @return array
     */
    private function getLanguages()
    {
        if (function_exists('pll_the_languages')) {
            $languages = pll_the_languages(['raw' => 1]);

            // Fix for custom routes where Polylang might not detect the current page
            $current_obj_id = get_queried_object_id();

            if ($current_obj_id && function_exists('pll_get_post_translations')) {
                $translations = \pll_get_post_translations($current_obj_id);

                foreach ($languages as &$lang) {
                    if (!$lang['current_lang'] && isset($translations[$lang['slug']])) {
                        $lang['url'] = get_permalink($translations[$lang['slug']]);
                    }
                }
            }

            // Map languages to match the design (flags)
            return array_map(function ($lang) {
                // Use external flag service if Polylang doesn't provide one or to match design
                // Mapping 'en' to 'gb' for the flag service
                $flag_code = $lang['slug'] === 'en' ? 'gb' : $lang['slug'];
                $lang['flag_url'] = "https://kapowaz.github.io/circle-flags/flags/{$flag_code}.svg";
                return $lang;
            }, $languages);
        }

        return [];
    }

    /**
     * Get logo configuration data
     *
     * @return array
     */
    private function getLogoData()
    {
        $current_lang = function_exists('pll_current_language') ? \pll_current_language() : 'pl';
        $phone_us_default = $current_lang === 'en' ? 'Call us:' : 'Zadzwoń do nas:';

        return [
            'image' => $this->getLogoImage(),
            'url' => $this->getAcfFieldSafe('header_logo_url', 'option', home_url('/')),
            'title' => $this->getAcfFieldSafe('header_logo_title', 'option', 'Optimum Tax'),
            'phone_us' => $this->getAcfFieldSafe('header_logo_phone_us', 'option', $phone_us_default),
            'phone_no' => $this->getAcfFieldSafe('header_logo_phone_no', 'option', '+0208 840 0422'),
        ];
    }

    /**
     * Get logo image URL from ACF or fallback
     *
     * @return string
     */
    private function getLogoImage()
    {
        if (function_exists('get_field')) {
            $logo_field = \get_field('header_logo_image', 'option');

            if (!empty($logo_field)) {
                // Handle different ACF image field return types
                if (is_array($logo_field) && isset($logo_field['url'])) {
                    return $logo_field['url'];
                } elseif (is_numeric($logo_field)) {
                    $image_url = wp_get_attachment_image_url($logo_field, 'full');
                    if ($image_url) {
                        return $image_url;
                    }
                } elseif (is_string($logo_field)) {
                    return $logo_field;
                }
            }
        }

        // Fallback to default logo
        return get_theme_file_uri('/resources/images/logo-desktop.png');
    }

    /**
     * Safe ACF field retrieval with fallback
     *
     * @param string $field_name
     * @param mixed $post_id
     * @param mixed $fallback
     * @return mixed
     */
    private function getAcfFieldSafe($field_name, $post_id = false, $fallback = null)
    {
        if (function_exists('get_field')) {
            $value = \get_field($field_name, $post_id);
            return !empty($value) ? $value : $fallback;
        }
        return $fallback;
    }

    /**
     * Helper to get localized URL
     *
     * @param string $path
     * @return string
     */
    private function getLocalizedUrl($path)
    {
        // Special handling for home path
        if ($path === '/' || $path === '') {
            if (function_exists('pll_home_url')) {
                return \pll_home_url();
            }
            return home_url('/');
        }

        // 1. Try to resolve real page first
        $slug = trim($path, '/');
        $page = get_page_by_path($slug);

        if ($page && function_exists('pll_get_post') && function_exists('pll_current_language')) {
            $current_lang = \pll_current_language();
            $translated_id = \pll_get_post($page->ID, $current_lang);
            if ($translated_id) {
                return get_permalink($translated_id);
            }
        }

        // 2. Fallback using pll_home_url
        if (function_exists('pll_home_url')) {
            $home_url = \pll_home_url();

            // Fix for when home url includes the page slug (e.g. /en/home/)
            // We want the root of the language (e.g. /en/)
            $home_url = rtrim($home_url, '/');
            if (substr($home_url, -5) === '/home') {
                $home_url = substr($home_url, 0, -5);
            }

            return rtrim($home_url, '/') . '/' . ltrim($path, '/');
        }

        return home_url($path);
    }

    /**
     * Check if URL is active
     *
     * @param string $url
     * @return bool
     */
    private function isUrlActive($url)
    {
        if ($url === '#') return false;

        global $wp;
        $current_url = home_url(add_query_arg([], $wp->request));

        // Normalize URLs for comparison
        $url = rtrim($url, '/') . '/';
        $current_url = rtrim($current_url, '/') . '/';

        return $url === $current_url;
    }

    /**
     * Get menu items
     *
     * @return array
     */
    private function getMenuData()
    {
        // 1. ACF Override (Optional)
        $menu = $this->getAcfFieldSafe('header_menu', 'option');
        if ($menu) {
            foreach ($menu as &$item) {
                $item['active'] = $this->isUrlActive($item['url']);
            }
            return $menu;
        }

        // 2. WordPress Native Menu (Primary Navigation)
        $locations = get_nav_menu_locations();
        if (isset($locations['primary_navigation'])) {
            $menu_obj = wp_get_nav_menu_object($locations['primary_navigation']);

            if ($menu_obj) {
                $menu_items = wp_get_nav_menu_items($menu_obj->term_id);

                // Add active classes
                _wp_menu_item_classes_by_context($menu_items);

                if ($menu_items) {
                    $formatted_menu = [];

                    foreach ($menu_items as $item) {
                        // We only support top-level items in this specific header design
                        if ($item->menu_item_parent == 0) {
                            // Check for 'mega-menu-trigger' class to activate the dropdown
                            $is_mega_menu = in_array('mega-menu-trigger', $item->classes);
                            $is_active = in_array('current-menu-item', $item->classes) || in_array('current-menu-ancestor', $item->classes);

                            $formatted_menu[] = [
                                'title' => $item->title,
                                'url' => $is_mega_menu ? '#' : $item->url,
                                'has_dropdown' => $is_mega_menu,
                                'id' => $is_mega_menu ? 'ksiegowosc-link' : null,
                                'active' => $is_active,
                            ];
                        }
                    }

                    return $formatted_menu;
                }
            }
        }

        // 3. Fallback (Only used if no menu is assigned in WP Admin)
        $current_lang = function_exists('pll_current_language') ? \pll_current_language() : 'pl';

        $menu = [];

        if ($current_lang === 'en') {
            $menu = [
                ['title' => 'Home', 'url' => $this->getLocalizedUrl('/')],
                ['title' => 'About Us', 'url' => $this->getLocalizedUrl('/about/')],
                ['title' => 'Accountancy', 'url' => '#', 'has_dropdown' => true, 'id' => 'ksiegowosc-link'],
                ['title' => 'Partners', 'url' => $this->getLocalizedUrl('/partners/')],
                ['title' => 'Blog', 'url' => $this->getLocalizedUrl('/blog/')],
                ['title' => 'Contact', 'url' => $this->getLocalizedUrl('/contact/')],
            ];
        } else {
            $menu = [
                ['title' => 'Strona Główna', 'url' => home_url('/')],
                ['title' => 'O nas', 'url' => home_url('/o-nas/')],
                ['title' => 'Księgowość', 'url' => '#', 'has_dropdown' => true, 'id' => 'ksiegowosc-link'],
                ['title' => 'Partnerzy', 'url' => home_url('/partnerzy/')],
                ['title' => 'Blog', 'url' => home_url('/blog/')],
                ['title' => 'Kontakt', 'url' => home_url('/kontakt/')],
            ];
        }

        // Add active state to fallback menu
        foreach ($menu as &$item) {
            $item['active'] = $this->isUrlActive($item['url']);
        }

        return $menu;
    }

    /**
     * Get services dropdown data
     *
     * @return array
     */
    private function getServicesData()
    {
        // Try to get from ACF
        $services = $this->getAcfFieldSafe('header_services', 'option');

        if ($services) {
            return $services;
        }

        $current_lang = function_exists('pll_current_language') ? \pll_current_language() : 'pl';

        if ($current_lang === 'en') {
            return [
                'column_1' => [
                    'title' => 'Basic Services',
                    'links' => [
                        ['title' => 'LTD Companies', 'url' => $this->getLocalizedUrl('/limited-ltd/')],
                        ['title' => 'Self Employment', 'url' => $this->getLocalizedUrl('/self-employment/')],
                        ['title' => 'Civil Partnerships', 'url' => $this->getLocalizedUrl('/civil-partnerships/')],
                    ]
                ],
                'column_2' => [
                    'title' => 'Extensions',
                    'links' => [
                        ['title' => 'Additional Services', 'url' => $this->getLocalizedUrl('/additional-services/')],
                        ['title' => 'Virtual Office', 'url' => $this->getLocalizedUrl('/virtual-office/')],
                    ]
                ],
                'column_3' => [
                    'title' => 'Contact & Help',
                    'content' => 'Have questions? <a href="tel:+02088400422" class="font-semibold">Call us</a> or <a href="' . $this->getLocalizedUrl('/contact/') . '" class="font-semibold">write</a> — we are happy to help.'
                ]
            ];
        }

        // Fallback
        return [
            'column_1' => [
                'title' => 'Usługi podstawowe',
                'links' => [
                    ['title' => 'Firmy LTD', 'url' => home_url('/firmy-ltd/')],
                    ['title' => 'Własna działalność', 'url' => home_url('/wlasna-dzialalnosc/')],
                    ['title' => 'Spółki cywilne', 'url' => home_url('/spolki-cywilne/')],
                ]
            ],
            'column_2' => [
                'title' => 'Rozszerzenia',
                'links' => [
                    ['title' => 'Dodatkowe usługi', 'url' => home_url('/dodatkowe-uslugi/')],
                    ['title' => 'Wirtualne biuro', 'url' => home_url('/wirtualne-biuro/')],
                ]
            ],
            'column_3' => [
                'title' => 'Kontakt i pomoc',
                'content' => 'Masz pytania? <a href="tel:+02088400422" class="font-semibold">Zadzwoń do nas</a> lub <a href="#kontakt" class="font-semibold">napisz</a> — chętnie doradzimy.'
            ]
        ];
    }
}
