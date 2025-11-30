<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Partner extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-partners',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'partner' => $this->getPartnerData(),
        ];
    }

    /**
     * Build partner page data from ACF fields with fallbacks.
     *
     * @return array
     */
    private function getPartnerData()
    {
        return [
            'hero' => [
                'title_html' => $this->getAcfFieldSafe('hero_title_html', false, 'Partnerzy'),
                'intro_paragraph' => $this->getAcfFieldSafe('hero_intro_paragraph', false, 'Wspólpracujemy z wieloma firmami i dzieki temu spelniamy oczekiwania najbardziej wymagajacych klientów - dolacz do nich i rozwiaz z nami kazdy problem! Tworzymy grupe firm, które wzaiemnie ze soba wsnólpracuia i sobie pomagaia w róznych sytuaciachi'),
            ],
            'section' => [
                'title_html' => $this->getAcfFieldSafe('section_title_html', false, 'Partnerzy naszego<br class="hidden md:block">biura księgowego w UK'),
                'intro_paragraph' => $this->getAcfFieldSafe('section_intro_paragraph', false, 'fantherzy naszego biura kslegowego to nimy z ogromnym doswiadezeniem. Wsród nich znaiduie sie'),
                'bullets' => $this->getAcfFieldSafe('section_bullets', false, [
                    'APJ Claims – pomoc prawna i odzyskiwanie odszkodowań.',
                    'MJN Business Finance – specjalizacje w finansowaniu przedsiębiorstw.',
                    'Peace Of Mind Group – wsparcie w oddłużaniu i negocjacjach.',
                    'Prestige Financial Advisers – doradztwo i kredyty hipoteczne.',
                ]),
            ],
            'right_image' => $this->getAcfImageSafe('right_image', false, get_template_directory_uri() . '/resources/images/look-up.png'),
            'closing_paragraph' => $this->getAcfFieldSafe('closing_paragraph', false, 'Dzięki szerokim kontaktom z najlepszymi specjalistami w różnych branżach możemy skutecznie pomagać Polakom w Wielkiej Brytanii. Jeśli prowadzisz własną działalność lub chcesz ją założyć, a nie wiesz jak to zrobić – skontaktuj się z nami.'),
            // Repeater of partner blocks (logo + description + alt)
            'partners' => $this->getPartnersRepeater(),
            'contact' => $this->getContactData(),
        ];
    }

    private function getPartnersRepeater()
    {
        // Expecting ACF repeater 'partners' returning array of rows with 'logo' and 'description' and optional 'alt'
        if (function_exists('have_rows') && have_rows('partners')) {
            $rows = [];
            while (have_rows('partners')) {
                the_row();
                $logo = get_sub_field('logo');
                $rows[] = [
                    'logo' => is_array($logo) && isset($logo['url']) ? $logo['url'] : (is_string($logo) ? $logo : ''),
                    'alt' => get_sub_field('logo_alt') ?: '',
                    'description' => get_sub_field('description') ?: '',
                ];
            }
            // reset rows
            if (function_exists('reset_rows')) {
                reset_rows();
            }
            return $rows;
        }

        // Fallback: return 4 copies of default partner card using existing asset
        $fallbackDesc = 'Prestige Financial Advisers specjalizuje się w doradztwie z zakresu kredytów hipotecznych. Weryfikuje cały rynek i dobiera najkorzystniejsze rozwiązania – także oferty niedostępne w standardowej ofercie banków. Obsługujemy klientów z całego UK – Anglia, Szkocja, Walia i Irlandia Północna.';
        $img = get_template_directory_uri() . '/resources/images/Partner.png';
        return array_fill(0, 4, ['logo' => $img, 'alt' => 'Partner', 'description' => $fallbackDesc]);
    }

    private function getContactData()
    {
        return [
            'background_image' => $this->getAcfImageSafe('contact_background_image', false, get_template_directory_uri() . '/resources/images/businessman-working.png'),
            'heading' => $this->getAcfFieldSafe('contact_heading', false, 'Postaw na pewność i spokój, powierz księgowość ekspertom'),
        ];
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
     * Get an image field and return a usable URL, with fallback.
     * Accepts ACF image array, attachment ID, or URL.
     *
     * @param string $field_name
     * @param mixed $post_id
     * @param string $fallback
     * @return string
     */
    private function getAcfImageSafe($field_name, $post_id = false, $fallback = '')
    {
        if (function_exists('get_field')) {
            $img = \get_field($field_name, $post_id);
            if (empty($img)) {
                return $fallback;
            }
            if (is_array($img) && isset($img['url'])) {
                return $img['url'];
            }
            if (is_string($img) && preg_match('#^https?://#', $img)) {
                return $img;
            }
            if (is_int($img) || ctype_digit((string) $img)) {
                if (function_exists('wp_get_attachment_image_url')) {
                    $url = \wp_get_attachment_image_url($img, 'full');
                    return $url ?: $fallback;
                }
            }
            return $fallback;
        }
        return $fallback;
    }
}
