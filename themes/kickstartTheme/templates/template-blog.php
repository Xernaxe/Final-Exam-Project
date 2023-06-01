<?php
/*
Template Name: Template blog page
*/
get_header(); ?>

<main>

<?php 
get_template_part('components/hero');
get_template_part('components/blogContainer');

?>
</main>
<?php
get_footer();
?>