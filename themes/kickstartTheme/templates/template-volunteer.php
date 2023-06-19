<?php
/*
Template Name: Template volunteer page
*/
get_header(); ?>

<main>

<?php 
get_template_part('components/globals/hero/hero');
get_template_part('components/volunteer/volunteerSubheader/volunteerSubheader');
get_template_part('components/volunteer/volunteerPerks/volunteerPerks');
get_template_part('components/volunteer/volunteerDepartments/volunteerDepartments');
get_template_part('components/volunteer/volunteerReviews/volunteerReviews');
get_template_part('components/volunteer/volunteerBecome/volunteerBecome');
get_template_part('components/globals/backToTopButton/backToTopButton');
get_template_part('/components/globals/newsletterDesktop/newsletterDesktop');
get_template_part('/components/globals/newsletterPopup/newsletterPopup');
get_template_part('/components/globals/volunteerSignup/volunteerSignup');
?>
</main>
<?php
get_footer();
?>