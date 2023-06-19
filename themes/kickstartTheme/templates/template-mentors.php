<?php
/*
Template Name: Template mentors page
*/
get_header();?>

<main>

<?php
    get_template_part('components/globals/hero/hero');
    get_template_part('components/mentors/mentorsContainer/mentorsContainer');
    get_template_part('components/mentors/mentorsBlogSlider/mentorsBlogSlider');
    get_template_part('components/globals/backToTopButton/backToTopButton');
    get_template_part('/components/globals/newsletterDesktop/newsletterDesktop');
    get_template_part('/components/globals/newsletterPopup/newsletterPopup');
?>

</main>

<?php
get_footer();
?>