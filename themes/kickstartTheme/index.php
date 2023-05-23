<?php get_header();
?>
  <main>
  <?php
  get_template_part('components/hero');
  get_template_part('components/visionAndMission');
  get_template_part('components/stackedCards');
  

  while(have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
  <?php }
?>
  </main>
<?php
  get_footer();

?>