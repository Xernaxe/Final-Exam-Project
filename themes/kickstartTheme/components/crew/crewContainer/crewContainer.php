<section class="crewContainer">
<?php
    $posts = get_posts(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'category_name' => 'crew'
    ));

    if ($posts) {
        foreach ($posts as $post) {
            setup_postdata($post);
            ?>
            <div class="crewCard">

                <div class="crewDetails">
                    <h3 class="crewName"><?php echo get_field('crew_name') ?></h3>
                </div>

                <div class="crewBox">

                    <div class="crewInfo">
                        <?php
                            $image_array = get_field('crew_image');
                            if ($image_array) {
                                $image_url = $image_array['url'];
                                $image_alt = $image_array['alt'];
                                echo '<img class="crewInfoIMG" src="' . $image_url . '" alt="' . $image_alt . '">';
                            } else {
                                echo '<img class="crewInfoIMG" src="' . get_theme_file_uri('/images/blogBG.png') . '" alt="Generic Blog Image">';
                            }                    
                        ?>
                        </div>

                            <h4 class="crewTitle"><?php echo get_field('crew_position') ?></h4>
                            <a class="crewSocial" target="_blank" href="<?php echo get_field('crew_linkedinlink')?>">
                                <img class="crewSocialIMG" src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt="LinkedIn   ">
                                <?php echo get_field('crew_name') ?>
                            </a>
                            
                            <p class="crewP"><?php echo get_field('crew_description') ?></p>

                    </div>
                </div>
            <?php
        }
        wp_reset_postdata();
    }
    ?>



</section>
