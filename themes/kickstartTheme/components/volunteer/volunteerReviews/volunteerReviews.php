<section class="volunteerReviews">
  <h2 class="sectionH">Still not sure?<br> Look for volunteer's<br> experiences</h2>

  <?php 
  $postsReviews = get_posts(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category_name' => 'review'
));
?>

<div class="reviewWrapper">
  <img class="reviewCardArrow reviewCardArrow_back hide" src="<?php echo get_theme_file_uri("/images/reviewArrow.svg") ?>" alt="Back">
  <img class="reviewCardArrow reviewCardArrow_next" src="<?php echo get_theme_file_uri("/images/reviewArrow.svg") ?>" alt="Next">
  
  <?php
  if($postsReviews){
    $postsCount = count($postsReviews);
    ?>
    <div class="reviewSlider" style="padding-top:32%" data-posts_count="<?php echo $postsCount ?>">
    <?php
    foreach($postsReviews as $post) {
      setup_postdata($post);
      ?>
      <div class="reviewCard">
        <?php
                $image_array = get_field('review_image');
                if ($image_array) {
                  $image_url = $image_array['url'];
                  $image_alt = $image_array['alt'];
                  echo '<img class="reviewPersonIMG" src="' . $image_url . '" alt="' . $image_alt . 'MUIE">';
                } else {
                  echo '<img class="reviewPersonIMG" src="' . get_theme_file_uri('/images/reviewPerson.png') . '" alt="">';
                }                    
                ?>
        <img class="reviewIMG" src="<?php echo get_theme_file_uri("/images/reviewCircle.svg") ?>" alt="">
        <h4 class="reviewCardName"><?php echo get_field('review_name') ?></h4>
        <p class="reviewCardPosition"><?php echo get_field('review_position') ?></p>
        <p class="reviewCardReview">“<?php echo get_field('review_content') ?>”</p>
      </div>
      <?php
  }
  wp_reset_postdata();
}
?>
  </div>
</div>

</section>