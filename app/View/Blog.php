<?php

namespace App\View;

/**
 * Simple Blog helper class.
 *
 * This file is intentionally minimal — it provides a small API to fetch
 * recent posts and other blog-related helpers that can be used by ACF
 * configuration or Blade templates later on.
 */
class Blog
{
    /**
     * Get recent posts.
     *
     * @param int $count
     * @return array
     */
    public static function recentPosts(int $count = 6): array
    {
        // Backward compatible: if $count is negative, force default.
        $count = $count > 0 ? $count : 6;

        // Determine current paged value from query var when not provided.
        $paged = max(1, get_query_var('paged') ?: get_query_var('page') ?: 1);

        $query = new \WP_Query([
            'posts_per_page' => $count,
            'post_status' => 'publish',
            'paged' => $paged,
        ]);

        $posts = $query->posts ?: [];

        $mapped = array_map(function ($p) {
            $thumb = get_the_post_thumbnail_url($p, 'medium');
            if (empty($thumb)) {
                $thumb = get_template_directory_uri() . '/resources/images/businesswoman-working.png';
            }

            // Check for custom HTML title
            $custom_title = function_exists('get_field') ? \get_field('custom_title_html', $p->ID) : null;
            $custom_title_2 = function_exists('get_field') ? \get_field('custom_title_2', $p->ID) : null;
            $title = !empty($custom_title) ? $custom_title : get_the_title($p);
            $title_2 = $custom_title_2;

            return [
                'title' => $title,
                'title_2' => $title_2,
                'link' => get_permalink($p),
                'excerpt' => get_the_excerpt($p),
                'date' => get_the_date('', $p),
                'thumbnail' => $thumb,
            ];
        }, $posts);

        // Return posts plus pagination metadata.
        return [
            'posts' => $mapped,
            'total' => (int) $query->max_num_pages,
            'paged' => (int) $paged,
        ];
    }
}
