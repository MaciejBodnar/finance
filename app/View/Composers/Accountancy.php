<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Accountancy extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-accountancy',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'accountancy' => $this->getAccountancyData(),
        ];
    }

    /**
     * Build accountancy page data from ACF fields with fallbacks.
     *
     * @return array
     */
    private function getAccountancyData()
    {
        return [
            'hero' => $this->getHeroData(),
            'background' => $this->getBackgroundData(),
            // Maintain previous 'cta' for compatibility (maps to top CTA)
            'cta' => $this->getCtaTopData(),
            // New: separate CTA sections with enable flags
            'cta_top' => $this->getCtaTopData(),
            'cta_bottom' => $this->getCtaBottomData(),
            'cta_top_enabled' => (bool) $this->getAcfFieldSafe('cta_top_enabled', false, false),
            'cta_bottom_enabled' => (bool) $this->getAcfFieldSafe('cta_bottom_enabled', false, true),
            'section_two' => $this->getSectionTwoData(),
            'contact' => $this->getContactData(),
        ];
    }

    private function getHeroData()
    {
        return [
            'title' => $this->getAcfFieldSafe('hero_title', false, '<span class="font-bold">Wirtualne</span> biuro'),
            'intro_paragraph' => $this->getAcfFieldSafe('intro_paragraph', false, 'Oferujemy zakładanie spółek LTD, usługi księgowe, a także doradztwo dla właścicieli firm w Wielkiej Brytanii. Limited Company, czyli spółka z ograniczoną odpowiedzialnością, to najpopularniejsza forma prowadzenia działalności w Wielkiej Brytanii. Posiada ona własną osobowość prawną, w związku z czym jej udziałowcy odpowiadają za zobowiązania wyłącznie do wysokości wniesionego wkładu, chroniąc swój majątek osobisty. Zapewniamy doradztwo finansowe i księgowe, obsługujemy finanse i administrację, a także wspieramy właścicieli firm na każdym etapie współpracy. Co więcej – pomożemy Ci w założeniu spółki LTD, zapewniając fachowe konsultacje i zadbamy o wszelkie kwestie związane z rejestracją spółki. Dzięki temu zaoszczędzisz czas i będziesz mieć możliwość skupienia się na planowaniu strategii rozwoju firmy. Księgowość w UK to usługa nie tylko dla Polaków, ale dla wszystkich chętnych, którzy poszukują pomocy w załatwieniu konkretnych spraw. Nasi specjaliści zaopiekują się Tobą i Twoją firmą, a Ty będziesz mógł się skupić na jej funkcjonowaniu.'),
            'image' => $this->getAcfImageSafe('hero_image', false, get_template_directory_uri() . '/resources/images/asian-business-woman.png'),
        ];
    }

    private function getBackgroundData()
    {
        return [
            'desktop' => $this->getAcfImageSafe('background_desktop', false, get_template_directory_uri() . '/resources/images/Subtraction.png'),
            'mobile' => $this->getAcfImageSafe('background_mobile', false, get_template_directory_uri() . '/resources/images/Subtraction-6.png'),
            'phone_icon' => $this->getAcfImageSafe('phone_icon', false, get_template_directory_uri() . '/resources/images/telefon.png'),
        ];
    }

    /**
     * Top CTA (used in the background overlay blocks)
     *
     * @return array
     */
    private function getCtaTopData()
    {
        return [
            'heading' => $this->getAcfFieldSafe('cta_top_heading', false, 'Umów się na spotkanie'),
            'button_text' => $this->getAcfFieldSafe('cta_top_button_text', false, 'Umów się'),
            'button_url' => $this->getAcfFieldSafe('cta_top_button_url', false, '#'),
            'paragraph' => $this->getAcfFieldSafe('cta_top_paragraph', false, 'Nasi księgowi w Hanwell są cały czas do Twojej dyspozycji – zadzwoń albo napisz, by umówić się na spotkanie. Zajmiemy się Twoją sprawą w sposób rzetelny i kompleksowy!'),
        ];
    }

    /**
     * Bottom CTA (separate configurable CTA section)
     *
     * @return array
     */
    private function getCtaBottomData()
    {
        return [
            'heading' => $this->getAcfFieldSafe('cta_bottom_heading', false, 'Umów się na spotkanie'),
            'button_text' => $this->getAcfFieldSafe('cta_bottom_button_text', false, 'Umów się'),
            'button_url' => $this->getAcfFieldSafe('cta_bottom_button_url', false, '#'),
            'paragraph' => $this->getAcfFieldSafe('cta_bottom_paragraph', false, 'Nasi księgowi w Hanwell są cały czas do Twojej dyspozycji – zadzwoń albo napisz, by umówić się na spotkanie. Zajmiemy się Twoją sprawą w sposób rzetelny i kompleksowy!'),
        ];
    }

    private function getSectionTwoData()
    {
        $bullets_raw = $this->getAcfFieldSafe('section_bullets', false, []);
        $bullets = [];

        if (!empty($bullets_raw) && is_array($bullets_raw)) {
            foreach ($bullets_raw as $item) {
                if (is_string($item)) {
                    $bullets[] = $item;
                } elseif (is_array($item)) {
                    $val = reset($item);
                    if (is_string($val)) {
                        $bullets[] = $val;
                    }
                }
            }
        }

        if (empty($bullets)) {
            $bullets = [
                'APJ Claims – pomoc prawna i odzyskiwanie odszkodowań.',
                'MJN Business Finance – specjalizacje w finansowaniu przedsiębiorstw.',
                'Peace Of Mind Group – wsparcie w oddłużaniu i negocjacjach.',
                'Prestige Financial Advisers – doradztwo i kredyty hipoteczne.',
            ];
        }

        return [
            'title' => $this->getAcfFieldSafe('section_two_title', false, 'Wirtualne biuro i <br><span class="font-bold">księgowość w UK</span>'),
            'paragraph' => $this->getAcfFieldSafe('section_two_paragraph', false, 'Każda spółka z ograniczoną odpowiedzialnością (Firma Limited) musi posiadać oficjalną siedzibę (Registered Office Address), której adres podaje się zarówno do rejestru firm (Companies House), jak i urzędu skarbowego (HM Revenue & Customs). Oficjalna siedziba spółki służy przede wszystkim administracji publicznej, w tym fiskalnej, do korespondencji i kontaktów z przedsiębiorstwem. Tam również z reguły są przechowywane dokumenty spółki. AlphaTax Finance użycza spółkom LTD (Limited) swojego adresu na potrzeby oficjalnej siedziby firmy. W ramach tej usługi:'),
            'paragraph_2' => $this->getAcfFieldSafe('section_two_paragraph_2', false, 'Każda spółka z ograniczoną odpowiedzialnością (Firma Limited) musi posiadać oficjalną siedzibę (Registered Office Address), której adres podaje się zarówno do rejestru firm (Companies House), jak i urzędu skarbowego (HM Revenue & Customs). Oficjalna siedziba spółki służy przede wszystkim administracji publicznej, w tym fiskalnej, do korespondencji i kontaktów z przedsiębiorstwem. Tam również z reguły są przechowywane dokumenty spółki. AlphaTax Finance użycza spółkom LTD (Limited) swojego adresu na potrzeby oficjalnej siedziby firmy. W ramach tej usługi:'),
            'bullets' => $bullets,
            'image' => $this->getAcfImageSafe('section_two_image', false, get_template_directory_uri() . '/resources/images/modern.png'),
        ];
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
