<?php
/*
Template Name: Template crew page
*/
get_header();?>
<main>
    <?php
    get_template_part('components/globals/hero/hero');
    get_template_part('components/crew/crewContainer/crewContainer');
    get_template_part('components/globals/backToTopButton/backToTopButton');
    ?>
</main>
<?php 
get_footer();
?>