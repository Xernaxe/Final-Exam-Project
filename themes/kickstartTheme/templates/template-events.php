<?php
/*
Template Name: Template events page
*/
get_header();
?>

<main>
<?php
    get_template_part('components/globals/hero/hero');
    get_template_part('components/events/eventsContainer/eventsContainer');
    get_template_part('components/globals/backToTopButton/backToTopButton');
    get_template_part('/components/globals/newsletterDesktop/newsletterDesktop');
    get_template_part('/components/globals/newsletterPopup/newsletterPopup');
?>
</main>

<?php
get_footer();
?>