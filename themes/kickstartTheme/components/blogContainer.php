<section class="blogContainer">
    <?php
    // Retrieve all posts
    $posts = get_posts(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ));

    if ($posts) {
        foreach ($posts as $post) {
            setup_postdata($post);
            ?>
            <a class="blogCard" href="<?php the_permalink() ?>">
            <?php
                $image_array = get_field('post_image');
                if ($image_array) {
                    $image_url = $image_array['url'];
                    $image_alt = $image_array['alt'];
                    echo '<img class="blogCardIMG" src="' . $image_url . '" alt="' . $image_alt . '">';
                } else {
                    echo '<img class="blogCardIMG" src="' . get_theme_file_uri('/images/blogBG.png') . '" alt="">';
                }                    
            ?>

            <div class="blogCardOverlay"></div>
            <div class="blogContent">
                <h3 class="blogCardTitle"><?php the_title(); ?></h3>
                <p class="blogCardDetails"><?php echo get_field('post_author'); ?></p>
                <p class="blogCardDetails"><?php echo get_field('post_date'); ?></p>
                <p class="blogCardDescription"><?php echo wp_trim_words(get_field('post_content'), 20); ?></p>
                
            </div>
            </a>
            <?php
        }
        wp_reset_postdata(); // Reset the global $post variable
    }
    ?>
</section>