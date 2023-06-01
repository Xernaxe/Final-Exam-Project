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
  wp_enqueue_style('kickstart_signupNewsletter_styles', get_theme_file_uri('/css/signupNewsletter.css'));
  wp_enqueue_style('kickstart_crewCard_styles', get_theme_file_uri('/css/crewCard.css'));
  wp_enqueue_style('kickstart_crewContainer_styles', get_theme_file_uri('/css/crewContainer.css'));
  wp_enqueue_style('kickstart_mentorsContainer_styles', get_theme_file_uri('/css/mentorsContainer.css'));
  wp_enqueue_style('kickstart_mentorsCard_styles', get_theme_file_uri('/css/mentorsCard.css'));
  wp_enqueue_style('kickstart_volunteerSubheader_styles', get_theme_file_uri('/css/volunteerSubheader.css'));
  wp_enqueue_style('kickstart_volunteerPerks_styles', get_theme_file_uri('/css/volunteerPerks.css'));
  wp_enqueue_style('kickstart_volunteerDepartments_styles', get_theme_file_uri('/css/volunteerDepartments.css'));
  wp_enqueue_style('kickstart_volunteerReviews_styles', get_theme_file_uri('/css/volunteerReviews.css'));
  wp_enqueue_style('kickstart_volunteerBecome_styles', get_theme_file_uri('/css/volunteerBecome.css'));
  wp_enqueue_style('kickstart_blogCard_styles', get_theme_file_uri('/css/blogCard.css'));
  wp_enqueue_script('navbarjs', get_template_directory_uri() . '/js/navbar.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_files');

function theme_post_setup(){
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_post_setup');