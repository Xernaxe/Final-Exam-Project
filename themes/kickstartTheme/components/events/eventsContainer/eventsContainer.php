<section class="eventsContainer">
  <?php 
  $eventPosts = get_posts(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category_name' => 'events'
  ));

  if ($eventPosts) {

    foreach ($eventPosts as $post) {
      setup_postdata($post);
      ?>
        
      <div class="eventsCard">
        
        <h3 class="eventsCardName"><?php echo get_field('event_name'); ?></h3>
        <p class="eventsCardDesc"><?php echo wp_trim_words(get_field('event_content'), 20); ?></p>
        
        <div class="eventsDetails">
          <img class="eventsDetailsIMG" src="<?php echo get_theme_file_uri('/images/dateIcon_O.svg') ?>" alt="">
          <p class="eventsCardDetailsP"><?php echo get_field('event_date'); ?></p>
        </div>
        
        <div class="eventsDetails">
          <img class="eventsDetailsIMG" src="<?php echo get_theme_file_uri('/images/locationIcon_O.svg') ?>" alt="">
          <p class="eventsCardDetailsP"><?php echo get_field('event_location'); ?></p>
        </div>
        
        <div class="eventsButtons">
          <a class="eventsReadMoreBtn" href="<?php the_permalink() ?>">READ MORE <img src="<?php echo get_theme_file_uri('/images/rightArrow_W.svg') ?>" alt=""></a>
          <a class="eventsBuyBtn" href="<?php echo get_field('event_stripe') ?>" >BUY A TICKET <img src="<?php echo get_theme_file_uri('/images/rightArrow_W.svg') ?>" alt=""></a>
        </div>
      
      </div>
    <?php
    }
    wp_reset_postdata();
  }
  ?>
</section>
