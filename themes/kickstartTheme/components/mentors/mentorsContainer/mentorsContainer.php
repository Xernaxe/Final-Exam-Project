


<section class="mentorsContainer">



  <p class="mentorsContainerP">
  Here you can find mentors and their business cards if you would want to reach out for business suggestions, business project, or widen your network. Maybe you have already met them at some of our events you just forgot to ask for their LinkedIn, and that’s why we’ve created this page. Here you can connect, share and exchange ideas advices and create a more knowledgeable community.
  </p>

  <div class="mentorsCards">
  <?php
    $posts = get_posts(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'category_name' => 'mentors'
    ));

    if ($posts) {
        foreach ($posts as $post) {
            setup_postdata($post);
            ?>
            <div class="mentorsCard">
              <div class="mentorsCardWrapper">
                
                <div class="mentorsCardLeft">
                <?php
                  $image_array = get_field('mentors_image');
                  if ($image_array) {
                      $image_url = $image_array['url'];
                      $image_alt = $image_array['alt'];
                      echo '<img class="mentorsCardIMG" src="' . $image_url . '" alt="' . $image_alt . '">';
                  } else {
                      echo '<img class="mentorsCardIMG" src="' . get_theme_file_uri('/images/blogBG.png') . '" alt="">';
                  }                    
                ?>
                </div>
                
                <div class="mentorsCardRight">
                  <h3 class="mentorsCardCompany"><?php echo get_field('mentors_name')?></h3>
                  <p class="mentorsCardName" style="color: #001438;"><?php echo get_field('mentors_company')?></p>
                  <p class="mentorsCardTitle" style="color: #001438;"><?php echo get_field('mentors_position')?></p>

                  <div class="mentorsCardSocials">
                    <a class="mentorsCardA" href="<?php echo get_field('mentors_linkedInLink')?>"><?php echo get_field('mentors_name')?><img style="width:24px" src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt=""></a>
                  </div>
                </div>
              
              </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    }
    ?>


  

    
  </div>
</section>