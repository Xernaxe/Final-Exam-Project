<?php
// category-blog.php
get_header();
get_template_part('components/hero');

while (have_posts()) {
    the_post();
    ?>
    <article>
        <div class="post-content">
            <?php the_content(); ?>
            <p class="blogP blogP1"><?php echo get_field('post_content'); ?></p>
            <div class="blogWhiteCard">
                <p class="blogP blogP2"><?php echo get_field('post_content2'); ?></p>
                <p class="blogP blogP3"><?php echo get_field('post_content3'); ?></p>
            </div>
            <p class="blogP blogP4"><?php echo get_field('post_content4'); ?></p>
        </div>
    </article>
    <?php
}

get_footer();
?>
