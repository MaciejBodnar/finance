<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.footer',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'footer' => $this->getFooterData(),
        ];
    }

    /**
     * Get footer data
     *
     * @return array
     */
    private function getFooterData()
    {
        return [
            'logo' => $this->getLogoData(),
            'contact' => $this->getContactData(),
            'hours' => $this->getHoursData(),
            'services' => $this->getServicesData(),
            'bottom' => $this->getBottomData(),
        ];
    }

    /**
     * Get logo data
     *
     * @return array
     */
    private function getLogoData()
    {
        $logo_field = $this->getAcfFieldSafe('footer_logo', 'option');
        $image_url = get_theme_file_uri('/resources/images/logo-footerv2.png');

        if (!empty($logo_field)) {
            if (is_array($logo_field) && isset($logo_field['url'])) {
                $image_url = $logo_field['url'];
            } elseif (is_numeric($logo_field)) {
                $url = wp_get_attachment_image_url($logo_field, 'full');
                if ($url) $image_url = $url;
            } elseif (is_string($logo_field)) {
                $image_url = $logo_field;
            }
        }

        return [
            'url' => $image_url,
            'alt' => 'Optimum Tax',
        ];
    }

    /**
     * Get contact section data
     *
     * @return array
     */
    private function getContactData()
    {
        $is_en = $this->isEnglish();

        return [
            'title' => $this->getAcfFieldSafe('footer_contact_title', 'option', $is_en ? 'Contact Details' : 'Dane kontaktowe'),
            'address' => $this->getAcfFieldSafe('footer_address', 'option', '56 Boston Road<br>London W7 3TR'),
            'phone' => $this->getAcfFieldSafe('footer_phone', 'option', '+0208 840 0422'),
            'phone_url' => $this->getAcfFieldSafe('footer_phone_url', 'option', '+442088400422'),
            'email' => $this->getAcfFieldSafe('footer_email', 'option', 'info@optimumtaxfinance.co.uk'),
        ];
    }

    /**
     * Get opening hours data
     *
     * @return array
     */
    private function getHoursData()
    {
        $is_en = $this->isEnglish();
        $default_hours = $is_en
            ? 'Mon–Fri: 9.00 – 17.00<br>Sat: 9.00 – 13.00'
            : 'Pon–Pt: 9.00 – 17.00<br>Sob: 9.00 – 13.00';

        return [
            'title' => $this->getAcfFieldSafe('footer_hours_title', 'option', $is_en ? 'Opening Hours' : 'Godziny Otwarcia'),
            'content' => $this->getAcfFieldSafe('footer_hours_content', 'option', $default_hours),
        ];
    }

    /**
     * Get services links
     *
     * @return array
     */
    private function getServicesData()
    {
        $is_en = $this->isEnglish();

        $title = $this->getAcfFieldSafe('footer_services_title', 'option', $is_en ? 'Services' : 'Usługi');

        // Try to get repeater field
        $links = $this->getAcfFieldSafe('footer_services_links', 'option');

        if (!$links) {
            // Fallback links
            if ($is_en) {
                $links = [
                    ['title' => 'LTD Companies', 'url' => $this->getLocalizedUrl('/limited-ltd/')],
                    ['title' => 'Self Employment', 'url' => $this->getLocalizedUrl('/self-employment/')],
                    ['title' => 'Civil Partnerships', 'url' => $this->getLocalizedUrl('/civil-partnerships/')],
                    ['title' => 'Additional Services', 'url' => $this->getLocalizedUrl('/additional-services/')],
                    ['title' => 'Virtual Office', 'url' => $this->getLocalizedUrl('/virtual-office/')],
                ];
            } else {
                $links = [
                    ['title' => 'Firmy LTD', 'url' => home_url('/firmy-ltd/')],
                    ['title' => 'Własna działalność', 'url' => home_url('/wlasna-dzialalnosc/')],
                    ['title' => 'Spółki cywilne', 'url' => home_url('/spolki-cywilne/')],
                    ['title' => 'Dodatkowe usługi', 'url' => home_url('/dodatkowe-uslugi/')],
                    ['title' => 'Wirtualne biuro', 'url' => home_url('/wirtualne-biuro/')],
                ];
            }
        }

        return [
            'title' => $title,
            'links' => $links,
        ];
    }

    /**
     * Get bottom bar data
     *
     * @return array
     */
    private function getBottomData()
    {
        $is_en = $this->isEnglish();

        return [
            'copyright' => $this->getAcfFieldSafe('footer_copyright', 'option', '©2025 <span class="font-semibold text-[#2d7e3b]">Optimum Tax</span> – D&C with <span class="text-[#2d7e3b]">💚</span> SLT Media'),
            'privacy_label' => $this->getAcfFieldSafe('footer_privacy_label', 'option', 'Privacy Policy'),
            'privacy_url' => $this->getAcfFieldSafe('footer_privacy_url', 'option', '#'),
            'licensed_logo' => get_theme_file_uri('/resources/images/logo-footer.png'),
            'licensed_text' => $this->getAcfFieldSafe('footer_licensed_text', 'option', 'Licensed <br> Accountant'),
        ];
    }

    /**
     * Check if current language is English
     *
     * @return bool
     */
    private function isEnglish()
    {
        $current_lang = function_exists('pll_current_language') ? \pll_current_language() : 'pl';
        return $current_lang === 'en';
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
}
