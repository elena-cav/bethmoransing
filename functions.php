<?php

function bethyoga_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('testimonialLandscape', 400, 260, true);
    add_image_size('bannerPortrait', 480, 650, true);
    // add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'bethyoga_features');


function bethyoga_files()
{
    wp_enqueue_script("main-bethmoran-js", get_theme_file_uri('/build/index.js'), array('jquery'), 1.0, true);
    wp_enqueue_style("custom-google-fonts", 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i|Montserrat:100,300,400,400i,700,700i');
    wp_enqueue_style("font-awesome", '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"');
    wp_enqueue_style("bethyoga_main_styles", get_theme_file_uri('/build/style.css'));
    wp_enqueue_style("bethyoga_extra_styles", get_theme_file_uri('/build/index.css'));

    // wp_localize_script("main-university-js", 'universityData', array(
    //     'root_url' => get_site_url()

    // ));
};
add_action('wp_enqueue_scripts', 'bethyoga_files');


function beth_moran_post_types()
{

    register_post_type('class', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'public' => true,
        'rewrite' => array('slug' => 'classes'),
        'has_archive' => true,
        'labels' => array(
            'name' => 'Classes',
            'add_new_item' => 'Add new Class',
            'edit_item' => 'Edit Class',
            'all_items' => 'All Classes',
            'singular_name' => 'Class'
        ),
        'menu_icon' => 'dashicons-universal-access
        '
    ));
}
add_action('init', 'beth_moran_post_types');
