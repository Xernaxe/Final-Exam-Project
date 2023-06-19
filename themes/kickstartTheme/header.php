<!DOCTYPE html>
<html lang="en">
  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <?php
  if(is_page('Home')) {?>
    <meta name="description" content="This is my Home Page">
    <?php
  } elseif (is_page('Blog')){?>
  <meta name="description" content="This is my Blog Page">
  <?php
  }elseif (is_page('Events')){?>
  <meta name="description" content="This is my Events Page">
  <?php
  }elseif (is_page('Podcast')){?>
  <meta name="description" content="This is my Podcast Page">
  <?php
  }elseif (is_page('Mentors')){?>
  <meta name="description" content="This is my Mentors Page">
  <?php
  }elseif (is_page('Volunteering')){?>
  <meta name="description" content="This is my Volunteering Page">
  <?php
  }elseif (is_page('Crew')){?>
  <meta name="description" content="This is my Crew Page">
  <?php
  }
  ?>
  </head>
  <body>
    <header>
			<?php get_template_part('components/globals/navbar/navbar'); ?>

    </header>
