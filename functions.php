<?php
/**
 * Funcoes do tema.
 *
 * @package ai-theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function ai_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Menu Principal', 'ai-theme'),
    ]);
}
add_action('after_setup_theme', 'ai_theme_setup');

function ai_theme_enqueue_assets(): void
{
    wp_enqueue_style('ai-theme-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'ai_theme_enqueue_assets');

function ai_theme_widgets_init(): void
{
    register_sidebar([
        'name'          => __('Barra Lateral', 'ai-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Adicione widgets aqui.', 'ai-theme'),
        'before_widget' => '<section id="%1$s" class="widget card %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'ai_theme_widgets_init');
