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
     * Provide data to the accountancy view.
     *
     * @return array
     */
    public function with(): array
    {
        $page = get_post();

        return [
            'title' => $page ? get_the_title($page) : null,
            'content' => $page ? apply_filters('the_content', $page->post_content) : null,
            // ACF-safe example fields: hero image, subtitle — use getAcfFieldSafe to avoid errors when ACF missing
            'hero_image' => $this->getAcfFieldSafe('hero_image', $page->ID ?? null, null),
            'hero_subtitle' => $this->getAcfFieldSafe('hero_subtitle', $page->ID ?? null, null),
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
    private function getAcfFieldSafe(string $field_name, $post_id = false, $fallback = null)
    {
        if (function_exists('get_field')) {
            $value = \get_field($field_name, $post_id);
            return !empty($value) ? $value : $fallback;
        }

        return $fallback;
    }
}
