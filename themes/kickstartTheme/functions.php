<?php

function theme_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap');
  wp_enqueue_style('kickstart_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('kickstart_navbarDesktop_styles', get_theme_file_uri('/css/navbarDesktop.css'));
  wp_enqueue_style('kickstart_navbarMobile_styles', get_theme_file_uri('/css/navbarMobile.css'));
  wp_enqueue_style('kickstart_footerMobile_styles', get_theme_file_uri('/css/footerMobile.css'));
  wp_enqueue_script('navbarjs', get_template_directory_uri() . '/js/navbar.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_files');