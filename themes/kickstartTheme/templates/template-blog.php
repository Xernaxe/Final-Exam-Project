<?php
/*
Template Name: Template blog page
*/
get_header(); ?>

<main>

<?php 
get_template_part('components/globals/hero/hero');
get_template_part('components/blog/blogContainer/blogContainer');

?>
</main>
<?php
get_footer();
?>