<?php

function theme_files() {
  wp_enqueue_style('kickstart_main_styles', get_theme_file_uri('/build/style-index.css'));
}

add_action('wp_enqueue_scripts', 'theme_files');