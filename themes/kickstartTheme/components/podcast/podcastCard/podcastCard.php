<section class="podcastsWrapper">

<?php
    $posts = get_posts(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'category_name' => 'podcast'
    ));

    if ($posts) {
        foreach ($posts as $post) {
            setup_postdata($post);
            $description = get_field('podcast_description')
            ?>
              <div class="podcastCard ">
                
                <div class="podcastCardIMGWrapper">
                  <?php
                $image_array = get_field('podcast_image');
                if ($image_array) {
                    $image_url = $image_array['url'];
                    $image_alt = $image_array['alt'];
                    echo '<img class="podcastCardIMG" src="' . $image_url . '" alt="' . $image_alt . '">';
                } else {
                    echo '<img class="podcastCardIMG" src="' . get_theme_file_uri('images/podcastImg.png') . '" alt="Image">';
                }                    
            ?>
                  <img src="<?php echo get_theme_file_uri('images/playIcon_O.svg') ?>" alt="Play" class="podcastCardPlayDesktop">
                </div>
                <div class="podcastCardWrapper">

                  
                  <h2 class="podcastCardH"><?php echo get_field('podcast_name')?></h2>
                  <p class="podcastCardP" data-podcast_description="<?php echo $description ?>"><?php echo wp_trim_words(($description), 20)?></p>
                  
                  
                  <div class="podcastCardDetails">
                    <div class="podcastCardTimeWrapper">

                      <div class="podcastCardTime">
                        <img class="podcastCardTimeIcon" src="<?php echo get_theme_file_uri('images/timeIcon_O.svg') ?>" alt="Length">
                        <p class="podcastCardTimeP"><?php echo get_field('podcast_duration') ?></p>
                      </div>
                      <div class="podcastCardTime">
                        <img class="podcastCardTimeIcon" src="<?php echo get_theme_file_uri('images/dateIcon_O.svg') ?>" alt="Length">
                        <p class="podcastCardTimeP podcastCardDate"><?php echo get_field('podcast_date') ?></p>
                      </div>
                    </div>
                    <audio class="podcastCardAudio" src="<?php echo get_field('podcast_audio')?>"></audio>
                    <img class="podcastCardPlay" src="<?php echo get_theme_file_uri('images/playIcon_O.svg') ?>" alt="Play">
                  </div>

                  <a class="podcastCardSpotifyBtn" target="_blank" href="<?php echo get_field('podcast_link')?>">
                    Listen to on Spotify
                  </a>

                </div>

                </div>
            <?php
        }
        wp_reset_postdata();
    }
    ?>

  

  

</section>
