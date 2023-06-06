<?php
/*
Template Name: Template blog page
*/
get_header(); ?>

<main>

<?php 
get_template_part('components/globals/hero/hero');
get_template_part('components/blog/blogContainer/blogContainer');
get_template_part('components/globals/backToTopButton/backToTopButton');

?>
</main>
<?php
get_footer();
?>