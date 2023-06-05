<?php
/*
Template Name: Template podcast page
*/
get_header();?>

<main>

<?php
    get_template_part('components/globals/hero/hero');
    get_template_part('components/podcast/podcastCard/podcastCard');
?>

</main>

<?php
get_footer();
?>