<?php

function theme_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');
  wp_enqueue_style('custom-google-fonts2', '//fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700&display=swap');
  wp_enqueue_style('kickstart_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('kickstart_navbarDesktop_styles', get_theme_file_uri('/css/navbarDesktop.css'));
  wp_enqueue_style('kickstart_navbarMobile_styles', get_theme_file_uri('/css/navbarMobile.css'));
  wp_enqueue_style('kickstart_footerMobile_styles', get_theme_file_uri('/css/footerMobile.css'));
  wp_enqueue_style('kickstart_hero_styles', get_theme_file_uri('/css/hero.css'));
  wp_enqueue_style('kickstart_visionAndMission_styles', get_theme_file_uri('/css/visionAndMission.css'));
  wp_enqueue_style('kickstart_stackedCards_styles', get_theme_file_uri('/css/stackedCards.css'));
  wp_enqueue_style('kickstart_homePodcast_styles', get_theme_file_uri('/css/homePodcast.css'));
  wp_enqueue_script('navbarjs', get_template_directory_uri() . '/js/navbar.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_files');