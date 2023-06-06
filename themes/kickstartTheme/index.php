<?php get_header();
?>
  <main>
  <?php
  get_template_part('components/globals/hero/hero');
  get_template_part('components/home/homeVisionAndMission/homeVisionAndMission');
  get_template_part('components/home/homeStackedCards/homeStackedCards');
  get_template_part('components/home/homeNetwork/homeNetwork');
  get_template_part('components/home/homeDepartments/homeDepartments');
  get_template_part('components/home/homePodcast/homePodcast');
  get_template_part('components/home/homeBlogSlider/homeBlogSlider');
  get_template_part('components/globals/backToTopButton/backToTopButton');
  


?>
  </main>
<?php
  get_footer();

?>