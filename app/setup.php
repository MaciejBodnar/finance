<?php

/**
 * Theme setup.
 */

namespace App;

use Illuminate\Support\Facades\Vite;

add_filter('wpcf7_load_css', '__return_false');
add_filter('wpcf7_autop', '__return_false', 999);
add_filter('wpcf7_form_class_attr', fn($c) => $c . ' cf7-custom-form');


/**
 * Inject styles into the block editor.
 *
 * @return array
 */
add_filter('block_editor_settings_all', function ($settings) {
    $style = Vite::asset('resources/css/editor.css');

    $settings['styles'][] = [
        'css' => "@import url('{$style}')",
    ];

    return $settings;
});

/**
 * Inject scripts into the block editor.
 *
 * @return void
 */
add_filter('admin_head', function () {
    if (! get_current_screen()?->is_block_editor()) {
        return;
    }

    $dependencies = json_decode(Vite::content('editor.deps.json'));

    foreach ($dependencies as $dependency) {
        if (! wp_script_is($dependency)) {
            wp_enqueue_script($dependency);
        }
    }

    echo Vite::withEntryPoints([
        'resources/js/editor.js',
    ])->toHtml();
});

/**
 * Use the generated theme.json file.
 *
 * @return string
 */
add_filter('theme_file_path', function ($path, $file) {
    return $file === 'theme.json'
        ? public_path('build/assets/theme.json')
        : $path;
}, 10, 2);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});

/**
 * Add custom routes for the theme
 */
add_action('init', function () {
    // Add rewrite rule for pages
    add_rewrite_rule('^contact/?$', 'index.php?custom_page=contact', 'top');
    add_rewrite_rule('^accountancy/?$', 'index.php?custom_page=accountancy', 'top');
    // Księgowość subpages should render using the accountancy template
    add_rewrite_rule('^firmy-ltd/?$', 'index.php?custom_page=accountancy&accountancy_sub=firmy-ltd', 'top');
    add_rewrite_rule('^wlasna-dzialalnosc/?$', 'index.php?custom_page=accountancy&accountancy_sub=wlasna-dzialalnosc', 'top');
    add_rewrite_rule('^spolki-cywilne/?$', 'index.php?custom_page=accountancy&accountancy_sub=spolki-cywilne', 'top');
    add_rewrite_rule('^dodatkowe-uslugi/?$', 'index.php?custom_page=accountancy&accountancy_sub=dodatkowe-uslugi', 'top');
    add_rewrite_rule('^wirtualne-biuro/?$', 'index.php?custom_page=accountancy&accountancy_sub=wirtualne-biuro', 'top');
    add_rewrite_rule('^about/?$', 'index.php?custom_page=about', 'top');
    add_rewrite_rule('^partners/?$', 'index.php?custom_page=partners', 'top');
    add_rewrite_rule('^blog/?$', 'index.php?custom_page=blog', 'top');
    // Handle paged blog URLs like /blog/page/2/
    add_rewrite_rule('^blog/page/([0-9]{1,})/?$', 'index.php?custom_page=blog&paged=$matches[1]', 'top');

    // Flush rewrite rules on theme activation (only once).
    // Bump the sentinel value when adding new custom routes so the flush runs one time.
    // Bump sentinel to force a one-time rewrite flush when new rules are added.
    if (get_option('sage_custom_routes_flushed') !== 'routes_v5') {
        flush_rewrite_rules();
        update_option('sage_custom_routes_flushed', 'routes_v5');
    }
});

/**
 * Add custom query vars
 */
add_filter('query_vars', function ($vars) {
    $vars[] = 'custom_page';
    $vars[] = 'post_slug';
    $vars[] = 'accountancy_sub';
    return $vars;
});

/**
 * Handle custom route templates
 */
add_action('template_redirect', function () {
    $custom_page = get_query_var('custom_page');

    if (is_singular('post')) {
        // Render single post Blade view for posts (no root single.php required).
        global $wp_query, $post;

        if (! $post) {
            $post = get_post();
        }

        setup_postdata($post);

        echo view('single-blog-post')->render();
        exit;
    }

    if ($custom_page) {
        switch ($custom_page) {
            case 'contact':
                // Set up proper WordPress context for Contact page
                global $wp_query, $post;

                $contact_page = get_page_by_path('contact');
                if ($contact_page) {
                    $wp_query->queried_object = $contact_page;
                    $wp_query->queried_object_id = $contact_page->ID;
                    $post = $contact_page;
                    setup_postdata($post);
                }

                echo view('template-contact')->render();
                exit;
            case 'about':
                global $wp_query, $post;

                $about_page = get_page_by_path('about');
                if ($about_page) {
                    $wp_query->queried_object = $about_page;
                    $wp_query->queried_object_id = $about_page->ID;
                    $post = $about_page;
                    setup_postdata($post);
                }

                echo view('template-about')->render();
                exit;
            case 'partners':
                global $wp_query, $post;

                $partners_page = get_page_by_path('partners');
                if ($partners_page) {
                    $wp_query->queried_object = $partners_page;
                    $wp_query->queried_object_id = $partners_page->ID;
                    $post = $partners_page;
                    setup_postdata($post);
                }

                echo view('template-partners')->render();
                exit;
            case 'blog':
                // Set up proper WordPress context for Blog page
                global $wp_query, $post;

                $blog_page = get_page_by_path('blog');
                if ($blog_page) {
                    $wp_query->queried_object = $blog_page;
                    $wp_query->queried_object_id = $blog_page->ID;
                    $post = $blog_page;
                    setup_postdata($post);
                }

                echo view('template-blog')->render();
                exit;
            case 'accountancy':
                // Set up proper WordPress context for Accountancy page
                global $wp_query, $post;

                // If a subpage slug was provided (e.g. /firmy-ltd), try to resolve and render it
                $accountancy_sub = get_query_var('accountancy_sub');

                if (! empty($accountancy_sub)) {
                    $sub_page = get_page_by_path($accountancy_sub);
                    if ($sub_page) {
                        $wp_query->queried_object = $sub_page;
                        $wp_query->queried_object_id = $sub_page->ID;
                        $post = $sub_page;
                        setup_postdata($post);

                        // Pass the sub slug into the view so the template can adapt
                        echo view('template-accountancy', ['accountancy_sub' => $accountancy_sub])->render();
                        exit;
                    }
                }

                // Fallback: render the generic accountancy page if present
                $accountancy_page = get_page_by_path('accountancy');
                if ($accountancy_page) {
                    $wp_query->queried_object = $accountancy_page;
                    $wp_query->queried_object_id = $accountancy_page->ID;
                    $post = $accountancy_page;
                    setup_postdata($post);
                }

                echo view('template-accountancy', ['accountancy_sub' => null])->render();
                exit;
        }
    }
});

add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);
});
