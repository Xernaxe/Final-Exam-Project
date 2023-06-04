<?php
// category-blog.php
get_header();
get_template_part('components/globals/hero/hero');

while (have_posts()) {
    the_post();
    ?>
    <article>
        <div class="post-content">
            <?php the_content(); ?>
            <p class="blogP blogP1"><?php echo get_field('post_content'); ?></p>

                <?php
                    $image_array = get_field('post_image');
                    $post_content2 = wpautop(get_field('post_content2'));
                    $post_content3 = wpautop(get_field('post_content3'));
                    $custom_class = 'blogP blogP3';
                    if($post_content2 || $post_content3){
                        
                        ?><div class="blogWhiteCard"><?php
                        $post_content2 = str_replace('<p', '<p class="' . $custom_class . '"', $post_content2);
                        $post_content3 = str_replace('<p', '<p class="' . $custom_class . '"', $post_content3);
                        
                        echo $post_content2;
                        
                        if ($image_array) {
                            $image_url = $image_array['url'];
                            $image_alt = $image_array['alt'];
                            echo '<img class="blogIMG" src="' . $image_url . '" alt="' . $image_alt . '">';
                        } else {
                            return;
                        }
                        echo $post_content3;
                        ?></div>
                        <?php
                    }
                ?>

                <?php
                if(get_field('post_content4')){
                    ?>
                    <h3 class="blogH">Take Away</h3>
                    <p class="blogP blogP4"><?php echo get_field('post_content4'); ?></p>
                    <?php
                }
                ?>
        </div>
    </article>
    <?php
}

get_footer();
?>
