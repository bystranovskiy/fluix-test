<?php

defined('THEME_URI') || define('THEME_URI', get_template_directory_uri());
defined('THEME_DIR') || define('THEME_DIR', get_template_directory());
const THEME_NAME = 'fluix';

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('theme_setup')) {

    function theme_setup()
    {
        load_theme_textdomain(THEME_NAME, get_template_directory() . '/languages');

        add_theme_support('post-thumbnails');
        add_theme_support('responsive-embeds');
        add_theme_support('editor-styles');
        add_theme_support('html5', array('style', 'script'));
        add_theme_support('automatic-feed-links');

        add_image_size( 'custom-size-1x', 400, 400 );
        add_image_size( 'custom-size-2x', 800, 800 );
    }
}

add_action('after_setup_theme', 'theme_setup');


function theme_scripts()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('main-styles', THEME_URI . '/assets/build/main.min.css', array(), _S_VERSION);

    wp_enqueue_script('main-scripts', THEME_URI . '/assets/build/main.min.js', array('jquery'), _S_VERSION);
}

add_action('wp_enqueue_scripts', 'theme_scripts');


function filter_block_categories_when_post_provided($block_categories, $editor_context)
{
    if (!empty($editor_context->post)) {
        $block_categories[] = array(
            'slug' => 'fluix-blocks',
            'title' => 'Fluix Blocks',
            'icon' => 'superhero',
        );
    }
    return $block_categories;
}

add_filter('block_categories_all', 'filter_block_categories_when_post_provided', 10, 2);


function admin_frontpage_styles()
{
    if (get_the_ID() == get_option('page_on_front')) {
        echo '<link rel="stylesheet" id="frontpage-style-css" href="'.THEME_URI.'/assets/build/main.min.css" type="text/css" media="all" />
        <style>
            @media (min-width: 782px) {
                .interface-complementary-area {
                    width: 650px;
                }
            }
        </style>
        ';
    }
}

add_action('admin_head', 'admin_frontpage_styles');