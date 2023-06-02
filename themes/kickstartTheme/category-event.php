<?php
// category-event.php
get_header();
get_template_part('components/hero');

while (have_posts()) {
    the_post();
    ?>
    <article>
        <div class="post-content">
            <?php the_content(); ?>
            <a class="buyTicketBtn"> buy a ticket <img src="" alt=""></a>
            <p class="eventP1">Fuckup Nights is a global movement with the mission to share publicly business failure stories.</p>
            <p class="eventP2"></p>
            <div class="eventPerksWrapper">

            </div>
            <p class="eventP3"></p>
            <div class="eventScheduleCard">

            </div>
            <p class="eventP4"></p>
            <div class="eventSpeakersWrapper">

            </div>
        </div>
    </article>
    <?php
}

get_footer();
?>
