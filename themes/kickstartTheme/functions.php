<?php

function theme_files() {
  wp_enqueue_style('kickstart_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap');
}

add_action('wp_enqueue_scripts', 'theme_files');