<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class About extends Composer
{
    /**
     * Views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-about',
    ];

    public function with(): array
    {
        return [
            'about' => $this->getAboutData(),
        ];
    }

    private function getAboutData(): array
    {
        $testimonials = $this->getAcfFieldSafe('about_testimonials', false, []);

        if (empty($testimonials) || !is_array($testimonials)) {
            $testimonials = [
                ['text' => 'Bardzo polecam! Profesjonalnie i miło.', 'name' => 'Ewa Foryszewska–Jarzyńska'],
                ['text' => 'Highly Recommended — I been using Optimum Tax for many years.', 'name' => 'Tomasz Ostapiuk'],
                ['text' => 'Kompetentna i miła obsługa, indywidualne podejście do klienta.', 'name' => 'Jagoda Katarzyna'],
                ['text' => 'Usługi na wysokim poziomie – rzetelnie, terminowo i profesjonalnie.', 'name' => 'Aleksandra Prokop'],
            ];
        }
        $our_work = $this->getAcfFieldSafe('about_our_work', false, []);

        if (empty($our_work) || !is_array($our_work)) {
            $our_work = [
                ['title' => 'Zapewniamy kompleksową księgowość', 'text' => 'Zajmiemy się wszystkim za Ciebie, dzięki czemu skupisz się na podstawowej działalności i będziesz mógł rozwijać swoją firmę.', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                <rect x="3" y="3" width="8" height="12" rx="1.5"></rect>
                                <rect x="13" y="3" width="8" height="6" rx="1.5"></rect>
                                <path d="M13 12h8M13 16h8M3 17h8M6 7h2M6 10h2"></path>
                            </svg>'],
                ['title' => 'Współpracujemy z najlepszymi specjalistami', 'text' => 'Oferujemy wsparcie w wielu dziedzinach – pomożemy Ci odzyskać odszkodowanie, zaciągnąć kredyt i rozwiążemy wiele problemów.', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                <rect x="3" y="3" width="8" height="12" rx="1.5"></rect>
                                <rect x="13" y="3" width="8" height="6" rx="1.5"></rect>
                                <path d="M13 12h8M13 16h8M3 17h8M6 7h2M6 10h2"></path>
                            </svg>'],
                ['title' => 'Wypracowaliśmy wysokie standardy', 'text' => 'Zajmiemy się wszystkim za Ciebie, dzięki czemu skupisz się na podstawowej działalności i będziesz mógł rozwijać swoją firmę.', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                <rect x="3" y="3" width="8" height="12" rx="1.5"></rect>
                                <rect x="13" y="3" width="8" height="6" rx="1.5"></rect>
                                <path d="M13 12h8M13 16h8M3 17h8M6 7h2M6 10h2"></path>
                            </svg>'],
            ];
        }

        return [
            // Hero
            'hero_title' => $this->getAcfFieldSafe('hero_title', false, 'Poznajmy się'),
            'intro_paragraph' => $this->getAcfFieldSafe('intro_paragraph', false, 'OptimumTax to polskie biuro księgowe w Londynie działające na terenie Wielkiej Brytanii. Świadczymy profesjonalne usługi doradcze, zarówno na rzecz osób prywatnych, jak i firm i instytucji. Zapewniamy doradczą i kompleksową obsługę księgową w Londynie oraz pomagamy podejmować najkorzystniejsze decyzje w kwestiach prawnych i finansowych. Nasze biuro księgowe mieści się w zachodnim Londynie, aczkolwiek świadczymy usługi na terenie całej Wielkiej Brytanii. Zapewniamy fachową pomoc także na odległość, a nasi klienci zaoszczędzony w ten sposób czas mogą poświęcić na rozwijanie działalności i pomnażanie zysków.'),
            'mission_title' => $this->getAcfFieldSafe('mission_title', false, 'Rzetelna <br>informacja księgowa'),
            'intro_paragraph_2' => $this->getAcfFieldSafe('intro_paragraph_2', false, 'Polski księgowy w zachodnim Londynie realizuje powierzone zlecenia, a przy tym dąży do podnoszenia bezpieczeństwa podatkowego klientów, z którymi buduje partnerskie relacje. W oparciu o wiedzę i doświadczenie zawodowe wskazujemy naszym klientom najlepsze rozwiązania, przygotowujemy ich do zmian oraz pomagamy w realizacji kolejnych planów i inwestycji. Zaufanie klientów jest dla nas największą nagrodą, dlatego robimy wszystko, aby nasze biuro księgowe było znane z wysokiej jakości usług.'),
            'about_image' => $this->getAcfImageSafe('about_image', false, 'full', get_template_directory_uri() . '/resources/images/businesswoman-working.png'),

            //Why us
            'why_heading' => $this->getAcfFieldSafe('why_heading', false, 'Dlaczego my?'),
            'our_work' => $our_work,

            // Testimonials block
            'testimonials_title' => $this->getAcfFieldSafe('testimonials_title', false, 'Nie musisz nam wierzyć na słowo - zobacz, co mówią inni.'),
            'testimonials_subtitle' => $this->getAcfFieldSafe('about_testimonials_subtitle', false, 'Zobacz pełne recenzje na naszym Facebooku.'),
            'testimonials' => $testimonials,
            'testimonials_facebook_url' => $this->getAcfFieldSafe('about_testimonials_facebook_url', false, 'https://www.facebook.com/OptimumTaxLTD/reviews'),
            'testimonials_facebook_text' => $this->getAcfFieldSafe('about_testimonials_facebook_text', false, 'Zobacz'),
            'testimonials_facebook_icon' => $this->getAcfFieldSafe(
                'testimonials_facebook_icon',
                false,
                'fa-solid fa-arrow-up-right-from-square'
            ),


            // Contact area (page-specific overrides)
            'contact_heading' => $this->getAcfFieldSafe('contact_heading', false, 'Postaw na <br>pewność i spokój, powierz księgowość ekspertom'),
            'contact_background_image' => $this->getAcfImageSafe('about_contact_background_image', false, 'full', get_template_directory_uri() . '/resources/images/businessman-working.png'),
        ];
    }

    private function getAcfFieldSafe($field_name, $post_id = false, $fallback = null)
    {
        if (function_exists('get_field')) {
            $value = \get_field($field_name, $post_id);
            return !empty($value) ? $value : $fallback;
        }
        return $fallback;
    }

    private function getAcfImageSafe($field_name, $post_id = false, $size = 'full', $fallback_url = '')
    {
        if (function_exists('get_field')) {
            $image = \get_field($field_name, $post_id);
            if ($image) {
                if (is_array($image) && isset($image['url'])) {
                    return $image['url'];
                } elseif (is_string($image) && ctype_digit($image)) {
                    return wp_get_attachment_image_url((int) $image, $size) ?: $fallback_url;
                } elseif (is_numeric($image)) {
                    return wp_get_attachment_image_url((int) $image, $size) ?: $fallback_url;
                } elseif (is_string($image)) {
                    return $image;
                }
            }
        }
        return $fallback_url;
    }
}
