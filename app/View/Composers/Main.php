<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Main extends Composer
{
    /**
     * Views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'main' => $this->getMainData(),
        ];
    }

    private function getMainData()
    {
        return [
            'hero' => $this->getHeroData(),
            'services' => $this->getServicesData(),
            'blog' => $this->getBlogData(),
            'testimonials' => $this->getTestimonialsData(),
            'cta_section' => $this->getCtaData(),
            'contact_section' => $this->getContactSectionData(),
        ];
    }

    private function getHeroData()
    {
        return [
            'title' => $this->getAcfFieldSafe('hero_title', false, 'Twój partner w Księgowości i Podatkach'),
            'description' => $this->getAcfFieldSafe('hero_description', false, 'Profesjonalną obsługą naszych klientów, niezależnie od wielkości i złożoności usług księgowej, zajmują się certyfikowani księgowi z kilkuletnim doświadczeniem.'),
            'hero_image' => $this->getAcfImageSafe('hero_image', false, 'large', get_template_directory_uri() . '/resources/images/test.png'),
            'button_text' => $this->getAcfFieldSafe('hero_button_text', false, 'Umów się'),
            'button_url' => $this->getAcfUrlSafe('hero_button_url', false, '#'),
        ];
    }

    private function getServicesData()
    {
        $items = $this->getAcfFieldSafe('services', false, []);

        if (empty($items) || !is_array($items)) {
            $items = [
                ['label' => 'Firmy<br/>LTD', 'href' => '#ltd', 'icon' => '<svg class="w-18 h-18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="4" y="3" width="12" height="16" rx="1.5" />
                        <path d="M8 7h4M8 10h4M8 13h4" />
                        <path d="M18 9v12M15 21h6" />
                      </svg>'],
                ['label' => 'Własna<br/>działalność', 'href' => '#self', 'icon' => '<svg class="w-18 h-18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="12" width="18" height="5" rx="1"/>
                        <path d="M7 7h10v5H7zM7 17v4M17 17v4" />
                      </svg>'],
                ['label' => 'Spółki<br/>cywilne', 'href' => '#civil', 'icon' => '<svg class="w-18 h-18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="7" r="3"/>
                        <circle cx="6" cy="17" r="3"/>
                        <circle cx="18" cy="17" r="3"/>
                        <path d="M10 9l-3 6M14 9l3 6" />
                      </svg>'],
                ['label' => 'Dodatkowe<br/>usługi', 'href' => '#extra', 'icon' => '<svg class="w-18 h-18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M7 3h7l4 4v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/>
                        <path d="M14 3v4h4M8 11h8M8 15h8" />
                      </svg>'],
                ['label' => 'Wirtualne<br/>biuro', 'href' => '#virtual', 'icon' => '<svg class="w-18 h-18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M4 20V6a2 2 0 0 1 2-2h6v16H4z"/>
                        <path d="M12 6h6a2 2 0 0 1 2 2v12h-8"/>
                        <path d="M7 9h3M7 12h3M7 15h3M15 10h3M15 13h3M15 16h3" />
                      </svg>'],
            ];
        } else {
            $normalized = [];
            foreach ($items as $it) {
                $normalized[] = [
                    'label' => $it['label'] ?? ($it['title'] ?? ''),
                    'href' => $it['href'] ?? ($it['link'] ?? '#'),
                    'icon' => $it['icon'] ?? 'docs',
                    'icon_svg' => $this->iconSvg($it['icon'] ?? 'docs'),
                ];
            }
            $items = $normalized;
        }

        return [
            'title' => $this->getAcfFieldSafe('services_title', false, 'W czym możemy Ci pomóc?'),
            'description' => $this->getAcfFieldSafe('services_description', false, 'Wspieramy klientów prywatnych, a także przedsiębiorstwa oraz instytucje. Z naszych usług
                                księgowych w Ealing mogą skorzystać zarówno małe firmy (Self–Employed i Partnership), jak i
                                średnie oraz duże spółki (Limited Companies). Dzięki zatrudnianiu wykwalifikowanych i
                                doświadczonych pracowników o różnych specjalizacjach możemy pomagać kompleksowo — również w
                                kwestiach związanych z podatkami, sprawami formalnymi, kredytami czy też zakładaniem lub
                                zamykaniem działalności.

                                Świadczymy usługi księgowe w całej Wielkiej Brytanii, zapewniając indywidualne podejście
                                oraz
                                profesjonalizm. Nasze biuro księgowe realizując zlecenia dla naszych klientów, działa z
                                pełnym
                                zaangażowaniem i sumiennie wykonujemy wszelkie zadania — tak, abyś osiągał swoje cele i mógł
                                skupić
                                się na rozwoju własnej działalności.
                                Sprawdź, czym zajmuje się nasze biuro księgowe i skorzystaj z usług, świadczonych na
                                najwyższym
                                poziomie!'),
            'show_more_text' => $this->getAcfFieldSafe('services_show_more_text', false, 'Rozwiń'),
            'items' => $items,
        ];
    }

    private function getTestimonialsData()
    {
        $testimonials = $this->getAcfFieldSafe('testimonials', false, []);

        if (empty($testimonials)) {
            $default_testimonials = [
                ['text' => 'Bardzo polecam! Profesjonalnie i miło.', 'name' => 'Ewa Foryszewska–Jarzyńska'],
                ['text' => 'Highly Recommended — I been using Optimum Tax for many years.', 'name' => 'Tomasz Ostapiuk'],
                ['text' => 'Kompetentna i miła obsługa, indywidualne podejście do klienta.', 'name' => 'Jagoda Katarzyna'],
                ['text' => 'Usługi na wysokim poziomie – rzetelnie, terminowo i profesjonalnie.', 'name' => 'Aleksandra Prokop'],
            ];
        } else {
            $default_testimonials = [];
            foreach ($testimonials as $testimonial) {
                $default_testimonials[] = [
                    'text' => $testimonial['text'] ?? $testimonial['testimonial_text'] ?? '',
                    'name' => $testimonial['name'] ?? $testimonial['client_name'] ?? 'Anonymous',
                ];
            }
        }

        return [
            'title' => $this->getAcfFieldSafe('testimonials_title', false, 'Nie musisz nam wierzyć na słowo – zobacz, co mówią inni.'),
            'image' => $this->getAcfImageSafe('testimonials_image', false, 'full', get_template_directory_uri() . '/resources/images/image-testimonials.png'),
            'testimonials' => $default_testimonials,
            'subtitle' => $this->getAcfFieldSafe('testimonials_subtitle', false, 'Zobacz pełne recenzje na naszym Facebooku.'),
            'cta_text' => $this->getAcfFieldSafe('testimonials_cta_text', false, $this->getAcfFieldSafe('testimonials_cta_view_more', false, 'ZOBACZ')),
            'cta_url' => $this->getAcfUrlSafe('testimonials_cta_url', false, $this->getAcfUrlSafe('testimonials_cta_view_more_url', false, '/gallery')),
        ];
    }


    private function getCtaData()
    {
        return [
            'title' => $this->getAcfFieldSafe('cta_title', false, 'Umów się na spotkanie'),
            'image' => $this->getAcfImageSafe('image', false, 'large', get_template_directory_uri() . '/resources/images/telefon.png'),
            'description' => $this->getAcfFieldSafe('cta_description', false, 'Nasi księgowi w Hanwell są cały czas do Twojej dyspozycji – zadzwoń albo napisz, by umówić się na spotkanie. Zajmiemy się Twoją sprawą w sposób rzetelny i kompleksowy!'),
            'view_more_text' => $this->getAcfFieldSafe('cta_view_more_text', false, 'VIEW more'),
            'view_more_url' => $this->getAcfUrlSafe('cta_view_more_url', false, '/reviews'),
            'book_now_text' => $this->getAcfFieldSafe('cta_book_now_text', false, 'Umów się'),
            'book_now_url' => $this->getAcfUrlSafe('cta_book_now_url', false, '#'),
            'background' => $this->getAcfImageSafe('cta_background', false, 'full', get_template_directory_uri() . '/resources/images/image-backgroundv3.png'),
        ];
    }

    private function getContactSectionData()
    {
        return [
            'heading' => $this->getAcfFieldSafe('contact_heading', false, 'Postaw na pewność i spokój,'),
            'subheading' => $this->getAcfFieldSafe('contact_subheading', false, 'powierz księgowość ekspertom'),
            'privacy_text' => $this->getAcfFieldSafe('contact_privacy_text', false, "Niniejszym oświadczam, że zapoznałem się z polityką prywatności i wyrażam zgodę na przetwarzanie przez Optimum Tax LTD z siedzibą przy 86 Boston Road, London W7 3TR moich danych osobowych w zakresie niezbędnym do realizacji świadczonych usług na moją rzecz. Jednocześnie potwierdzam, że mam ukończone 16 lat i jestem świadomy, że przysługuje mi prawo do wglądu w moje dane osobowe oraz prawo do udzielenia zgody i żądania usunięcia moich danych osobowych."),
            'submit_text' => $this->getAcfFieldSafe('contact_submit_text', false, 'KONTAKT'),
            'background_image' => $this->getAcfImageSafe('contact_background_image', false, 'full', get_template_directory_uri() . '/resources/images/businessman-working.png'),
        ];
    }

    private function getBlogData()
    {
        return [
            'title' => $this->getAcfFieldSafe('blog_title', false, 'Blog'),
            'url' => $this->getAcfUrlSafe('blog_url', false, '/blog'),
            'read_more_text' => $this->getAcfFieldSafe('blog_read_more_text', false, 'CZYTAJ WIĘCEJ'),
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

    private function getAcfUrlSafe($field_name, $post_id = false, $fallback = '')
    {
        $url = $this->getAcfFieldSafe($field_name, $post_id, $fallback);
        if (!empty($url) && strpos($url, '/') === 0) {
            return home_url($url);
        }
        return $url;
    }
}
