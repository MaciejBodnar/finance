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
     * Provide recent posts to the blog template.
     *
     * @return array
     */
    public function recent(): array
    {
        return \App\View\Blog::recentPosts(9);
    }
}
