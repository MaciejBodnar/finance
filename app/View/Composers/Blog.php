<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Blog extends Composer
{
    /**
     * Views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-blog',
    ];

    /**
     * Views can access blog hero fields and pagination via $blog.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'blog' => $this->getBlogData(),
        ];
    }

    public function recent(): array
    {
        return \App\View\Blog::recentPosts(9);
    }

    private function getBlogData(): array
    {
        return [
            'title' => $this->getAcfFieldSafe('hero_title', false, 'Blog'),
            'subtitle' => $this->getAcfFieldSafe('hero_subtitle', false, ''),
            'posts_per_page' => (int) $this->getAcfFieldSafe('posts_per_page', false, 9),
        ];
    }

    private function getAcfFieldSafe(string $field_name, $post_id = false, $fallback = null)
    {
        if (function_exists('get_field')) {
            $value = \get_field($field_name, $post_id);
            return !empty($value) ? $value : $fallback;
        }
        return $fallback;
    }
}
