<?php 
$posts = get_posts(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'category_name' => 'blog'
));
?>

<div class="blogSliderDesktopWrapper">
    <img class="reviewCardArrow blogSliderDesktopArrow reviewCardDesktopArrow_back hide" style="transform: translateY(-50%) rotate(180deg);" src="<?php echo get_theme_file_uri("/images/reviewArrow.svg") ?>" alt="Back">
    <img class="reviewCardArrow blogSliderDesktopArrow reviewCardDesktopArrow_next" style="transform: translateY(-50%);" src="<?php echo get_theme_file_uri("/images/reviewArrow.svg") ?>" alt="Next">
    
    <?php
    if($posts){
        $postsCount = count($posts);
    ?>
    <div class="blogSliderDesktop" data-posts_count="<?php echo $postsCount ?>">
    <?php
    foreach($posts as $post) {
        setup_postdata($post);
    ?>
    <a class="blogSliderDesktopCard" href="<?php the_permalink() ?>">
        <?php
            $image_array = get_field('post_image');
            if ($image_array) {
                $image_url = $image_array['url'];
                $image_alt = $image_array['alt'];
                echo '<img class="blogSliderDesktopCardIMG" src="' . $image_url . '" alt="' . $image_alt . '">';
            } else {
                echo '<img class="blogSliderDesktopCardIMG" src="' . get_theme_file_uri('/images/blogBG.png') . '" alt="">';
            }                    
        ?>
        <div class="blogSliderDesktopCardOverlay"></div>
        <div class="blogSliderDesktopContent">
            <h3 class="blogSliderDesktopTitle"><?php the_title(); ?></h3>
            <p class="blogSliderDesktopDetails"><?php echo get_field('post_author'); ?></p>
            <p class="blogSliderDesktopDetails"><?php echo get_field('post_date'); ?></p>
            <p class="blogSliderDesktopDescription"><?php echo wp_trim_words(get_field('post_content'), 20); ?></p>
            <button class="blogSliderDesktopButton">Read More <img src="<?php echo get_theme_file_uri('/images/rightArrow_O.svg') ?>" alt=""></button>
        </div>
    </a>
    <?php
    }
    wp_reset_postdata();
}
?>
    </div>
</div>