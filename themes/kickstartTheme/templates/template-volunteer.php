<?php
/*
Template Name: Template volunteer page
*/
get_header(); ?>

<main>

<?php 
get_template_part('components/hero');
get_template_part('components/volunteerSubheader');
get_template_part('components/volunteerPerks');
get_template_part('components/volunteerDepartments');
get_template_part('components/volunteerReviews');
get_template_part('components/volunteerBecome');
?>
</main>
<?php
get_footer();
?>