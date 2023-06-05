<?php

function theme_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap');
  wp_enqueue_style('custom-google-fonts2', '//fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700&display=swap');
  wp_enqueue_style('styles', get_theme_file_uri('/style.css'));
  wp_enqueue_style('kickstart_main_styles', get_theme_file_uri('/components/globals/globalStyles.css'));
  wp_enqueue_style('kickstart_navbar_styles', get_theme_file_uri('/components/globals/navbar/navbar.css'));
  wp_enqueue_style('kickstart_footer_styles', get_theme_file_uri('/components/globals/footer/footer.css'));
  wp_enqueue_style('kickstart_hero_styles', get_theme_file_uri('/components/globals/hero/hero.css'));
  wp_enqueue_style('kickstart_visionAndMission_styles', get_theme_file_uri('/components/home/homeVisionAndMission/homeVisionAndMission.css'));
  wp_enqueue_style('kickstart_stackedCards_styles', get_theme_file_uri('/components/home/homeStackedCards/homeStackedCards.css'));
  wp_enqueue_style('kickstart_homePodcast_styles', get_theme_file_uri('/components/home/homePodcast/homePodcast.css'));
  wp_enqueue_style('kickstart_homeNetwork_styles', get_theme_file_uri('/components/home/homeNetwork/homeNetwork.css'));
  wp_enqueue_style('kickstart_signupNewsletter_styles', get_theme_file_uri('/components/globals/signupNewsletter/signupNewsletter.css'));
  wp_enqueue_style('kickstart_crewCard_styles', get_theme_file_uri('/components/crew/crewCard/crewCard.css'));
  wp_enqueue_style('kickstart_crewContainer_styles', get_theme_file_uri('/components/crew/crewContainer/crewContainer.css'));
  wp_enqueue_style('kickstart_mentorsContainer_styles', get_theme_file_uri('/components/mentors/mentorsContainer/mentorsContainer.css'));
  wp_enqueue_style('kickstart_mentorsCard_styles', get_theme_file_uri('/components/mentors/mentorsCard/mentorsCard.css'));
  wp_enqueue_style('kickstart_volunteerSubheader_styles', get_theme_file_uri('/components/volunteer/volunteerSubheader/volunteerSubheader.css'));
  wp_enqueue_style('kickstart_volunteerPerks_styles', get_theme_file_uri('/components/volunteer/volunteerPerks/volunteerPerks.css'));
  wp_enqueue_style('kickstart_volunteerDepartments_styles', get_theme_file_uri('/components/volunteer/volunteerDepartments/volunteerDepartments.css'));
  wp_enqueue_style('kickstart_volunteerReviews_styles', get_theme_file_uri('/components/volunteer/volunteerReviews/volunteerReviews.css'));
  wp_enqueue_style('kickstart_volunteerBecome_styles', get_theme_file_uri('/components/volunteer/volunteerBecome/volunteerBecome.css'));
  wp_enqueue_style('kickstart_blogCard_styles', get_theme_file_uri('/components/blog/blogContainer/blogCard.css'));
  wp_enqueue_style('kickstart_eventsCard_styles', get_theme_file_uri('/components/events/eventsCard/eventsCard.css'));
  wp_enqueue_style('kickstart_podcastCard_styles', get_theme_file_uri('/components/podcast/podcastCard/podcastCard.css'));
  wp_enqueue_style('kickstart_innerEvent_styles', get_theme_file_uri('/css/innerEvent.css'));
  wp_enqueue_style('kickstart_innerBlog_styles', get_theme_file_uri('/css/innerBlog.css'));
  wp_enqueue_style('kickstart_blogPostsSlider_styles', get_theme_file_uri('/components/blog/blogPostsSlider/blogPostsSlider.css'));
  wp_enqueue_style('kickstart_departments_styles', get_theme_file_uri('/components/globals/departments/departments.css'));
  wp_enqueue_style('kickstart_contactUsButton_styles', get_theme_file_uri('/components/globals/contactUsButton/contactUsButton.css'));
  wp_enqueue_style('kickstart_blogSlider_styles', get_theme_file_uri('/components/globals/blogSlider/blogSlider.css'));
  wp_enqueue_script('navbarjs', get_template_directory_uri() . '/js/navbar.js', array(), '1.0', true);
  wp_enqueue_script('volunteerReviewsJs', get_template_directory_uri() . '/components/volunteer/volunteerReviews/volunteerReviews.js', array(), '1.0', true);
  wp_enqueue_script('volunteerPerksJs', get_template_directory_uri() . '/components/volunteer/volunteerPerks/volunteerPerks.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_files');

function theme_post_setup(){
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_post_setup');