<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SinglePost extends Composer
{
    /**
     * Views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'single-blog-post',
    ];

    /**
     * Provide data to the view as plain variables (arrays) so templates
     * can access them with $post['title'] etc instead of invoking methods.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'post' => $this->post(),
            'previous' => $this->previous(),
            'next' => $this->next(),
        ];
    }

    /**
     * Provide the current post data for the single post template.
     *
     * @return array
     */
    public function post(): array
    {
        $post = get_post();

        if (! $post) {
            return [];
        }

        // Use safe ACF helpers similar to other composers.
        $hero_image = $this->getAcfFieldSafe('hero_image', $post->ID, null);
        $thumbnail_image = $this->getAcfFieldSafe('thumbnail_image', $post->ID, null);
        $custom_title = $this->getAcfFieldSafe('custom_title_html', $post->ID, null);
        $custom_title_2 = $this->getAcfFieldSafe('custom_title_2', $post->ID, "<span>Hello</span>");
        $custom_content = $this->getAcfFieldSafe('custom_content_html', $post->ID, null);

        return [
            'title' => $custom_title ?: get_the_title($post),
            'title_2' => $custom_title_2,
            'content' => $custom_content ?: apply_filters('the_content', $post->post_content),
            'date' => get_the_date('', $post),
            'thumbnail' => $thumbnail_image ?: get_the_post_thumbnail_url($post, 'large'),
            'permalink' => get_permalink($post),
            'image' => $this->getImageFromField($hero_image, get_the_post_thumbnail_url($post, 'large')),
            'previous_post' => $this->getAcfFieldSafe('previous_post', false, 'Previous Post'),

        ];
    }

    /**
     * Provide previous post link data.
     *
     * @return array|null
     */
    public function previous(): ?array
    {
        $prev = get_previous_post();

        if (! $prev) {
            return null;
        }

        $hero = $this->getAcfFieldSafe('hero_image', $prev->ID, null);

        return [
            'title' => get_the_title($prev),
            'excerpt' => get_the_excerpt($prev),
            'date' => get_the_date('', $prev),
            'link' => get_permalink($prev),
            'thumbnail' => $this->getImageFromField($hero, get_the_post_thumbnail_url($prev, 'medium'), 'medium'),
        ];
    }

    /**
     * Provide next post link data.
     *
     * @return array|null
     */
    public function next(): ?array
    {
        $next = get_next_post();

        if (! $next) {
            return null;
        }

        $hero = $this->getAcfFieldSafe('hero_image', $next->ID, null);

        return [
            'title' => get_the_title($next),
            'link' => get_permalink($next),
            'thumbnail' => $this->getImageFromField($hero, get_the_post_thumbnail_url($next, 'medium'), 'medium'),
        ];
    }

    /**
     * Safe ACF field retrieval with fallback (matches pattern in other composers)
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

    /**
     * Helper to extract image URL from various ACF formats
     *
     * @param mixed $image_field
     * @param string $fallback
     * @param string $size
     * @return string
     */
    private function getImageFromField($image_field, $fallback = '', $size = 'full')
    {
        if (empty($image_field)) {
            return $fallback;
        }

        if (is_array($image_field) && isset($image_field['url'])) {
            return $image_field['url'];
        } elseif (is_string($image_field) && is_numeric($image_field)) {
            return wp_get_attachment_image_url((int) $image_field, $size) ?: $fallback;
        } elseif (is_string($image_field)) {
            // Could be a URL
            return $image_field;
        } elseif (is_numeric($image_field)) {
            return wp_get_attachment_image_url((int) $image_field, $size) ?: $fallback;
        }

        return $fallback;
    }
}
