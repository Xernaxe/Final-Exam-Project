
<?php
// category-event.php
get_header();
?>
<main>
<?php
get_template_part('components/globals/hero/hero');
while (have_posts()) {
    the_post();
    ?>
<article>
    <div class="eventArticle" data-location="<?php echo get_field('event_location') ?>" data-date="<?php echo get_field('event_date')?>">
        <?php the_content(); ?>
        <a class="buyTicketBtn" href="<?php echo get_field('stripe_link') ?>"> buy a ticket <img src="<?php echo get_theme_file_uri('/images/rightArrow_W.svg') ?>"
                alt="NEXT"></a>
        <p class="eventP eventP1"><?php echo get_field('event_content') ?></p>
        <p class="eventP eventP2"><?php echo get_field('event_content2') ?></p>

        <div class="eventPerksWrapper" style="margin: 40px 0">
            <div class="perksCarousel">
                <div class="perksCardsWrapper">
                    <div class="perksCard">
                        <img class="perksIMG" src="<?php echo get_theme_file_uri('/images/perkFriendly_B.svg') ?>" alt="Friendly">
                        <p class="perksP">Friendly people</p>
                    </div>
                    <div class="perksCard">
                        <img class="perksIMG" src="<?php echo get_theme_file_uri('/images/perkCoffee_B.svg') ?>" alt="Coffee">
                        <p class="perksP">Coffe meetings</p>
                    </div>
                    <div class="perksCard">
                        <img class="perksIMG" src="<?php echo get_theme_file_uri('/images/perkHearth_B.svg') ?>" alt="Hearth">
                        <p class="perksP">Self-develoment</p>
                    </div>
                    <div class="perksCard">
                        <img class="perksIMG perksIMG_network" src="<?php echo get_theme_file_uri('/images/perkNetwork_B.svg') ?>" alt="Network">
                        <p class="perksP">Networking</p>
                    </div>
                    <div class="perksCard">
                        <img class="perksIMG perksIMG_link" src="<?php echo get_theme_file_uri('/images/perkLink_B.svg') ?>" alt="Link">
                        <p class="perksP">Experience</p>
                    </div>
                </div>
            </div>

        </div>

        <p class="eventP eventP3"><?php echo get_field('event_content3') ?></p>

        <div class="eventScheduleCard">
            <h2 class="eventScheduleH">Program</h2>
            <div class="eventScheduleWrapper">
            <?php
                $image_array = get_field('event_image');
                if ($image_array) {
                    $image_url = $image_array['url'];
                    $image_alt = $image_array['alt'];
                    echo '<img class="eventScheduleIMG" src="' . $image_url . '" alt="' . $image_alt . '">';
                } else {
                    echo '<img class="eventScheduleIMG" src="' . get_theme_file_uri('images/eventImg.png') . '" alt="Image">';
                }                    
            ?>
                <?php $schedule = get_field('event_schedule');
                if ($schedule){?>
            <ul>
                <?php $time_brackets = explode(";", $schedule);
                    foreach ($time_brackets as $time_bracket) {
                        $parts = explode('=', $time_bracket, 2);
                        $start_time = $parts[0];
                        $presentation = $parts[1];?>
                <li class="eventScheduleLI">
                    <p class="eventScheduleTime">
                        <?php echo $start_time; ?>
                    </p>
                    <p class="eventScheduleActivity">
                        <?php echo $presentation; ?>
                    </p>
                </li>
                <?php
                }?>
            </ul>
            <?php } ?>
        </div>

        </div>

        <p class="eventP eventP4"><?php echo get_field('event_content4') ?></p>

        <div class="eventSpeakersWrapper">
            <h2 class="eventScheduleH">Speakers</h2>

            <div class="eventSpeakersCardsWrapper">

                <div class="mentorsCard">
                    <div class="mentorsCardWrapper">
                        <div class="mentorsCardLeft">
                            <?php
                $image_array = get_field('event_speaker1_image');
                if ($image_array) {
                    $image_url = $image_array['url'];
                    $image_alt = $image_array['alt'];
                    echo '<img class="mentorCardImageEvent" src="' . $image_url . '" alt="' . $image_alt . '">';
                } else {
                    echo '<img class="mentorCardImageEvent" src="' . get_theme_file_uri('images/mentorPhoto.png') . '" alt="Image">';
                }                    
            ?>

                        </div>
                        
                        <div class="mentorsCardRight">
                            <h3 class="mentorsCardCompany"><?php echo get_field("event_speaker1_name") ?></h3>
                            <p style="color: #001438" class="mentorsCardName"><?php echo get_field("event_speaker1_company") ?></p>
                            <p style="color: #001438; font-weight: 300; line-height: 13px" class="mentorsCardTitle"><?php echo get_field("event_speaker1_position") ?></p>
                            <div class="mentorsCardSocials">
                                <a class="mentorsCardA" target="_blank" href="<?php echo get_field("event_speaker1_linkedIn") ?>"><?php echo get_field("event_speaker1_name") ?><img src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt="LinkedIn"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mentorsCard">
                    <div class="mentorsCardWrapper">
                        <div class="mentorsCardLeft">
                            <?php
                $image_array = get_field('event_speaker2_image');
                if ($image_array) {
                    $image_url = $image_array['url'];
                    $image_alt = $image_array['alt'];
                    echo '<img class="mentorCardImageEvent" src="' . $image_url . '" alt="' . $image_alt . '">';
                } else {
                    echo '<img class="mentorCardImageEvent" src="' . get_theme_file_uri('images/mentorPhoto.png') . '" alt="Image">';
                }                    
            ?>

                        </div>
                        
                        <div class="mentorsCardRight">
                            <h3 class="mentorsCardCompany"><?php echo get_field("event_speaker2_name") ?></h3>
                            <p style="color: #001438" class="mentorsCardName"><?php echo get_field("event_speaker2_company") ?></p>
                            <p style="color: #001438; font-weight: 300; line-height: 13px" class="mentorsCardTitle"><?php echo get_field("event_speaker2_position") ?></p>
                            <div class="mentorsCardSocials">
                                <a class="mentorsCardA" target="_blank" href="<?php echo get_field("event_speaker2_linkedIn") ?>"><?php echo get_field("event_speaker2_name") ?><img src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt="LinkedIn"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mentorsCard">
                    <div class="mentorsCardWrapper">
                        <div class="mentorsCardLeft">
                            <?php
                $image_array = get_field('event_speaker3_image');
                if ($image_array) {
                    $image_url = $image_array['url'];
                    $image_alt = $image_array['alt'];
                    echo '<img class="mentorCardImageEvent" src="' . $image_url . '" alt="' . $image_alt . '">';
                } else {
                    echo '<img class="mentorCardImageEvent" src="' . get_theme_file_uri('images/mentorPhoto.png') . '" alt="Image">';
                }                    
            ?>

                        </div>
                        
                        <div class="mentorsCardRight">
                            <h3 class="mentorsCardCompany"><?php echo get_field("event_speaker3_name") ?></h3>
                            <p style="color: #001438" class="mentorsCardName"><?php echo get_field("event_speaker3_company") ?></p>
                            <p style="color: #001438; font-weight: 300; line-height: 13px" class="mentorsCardTitle"><?php echo get_field("event_speaker3_position") ?></p>
                            <div class="mentorsCardSocials">
                                <a class="mentorsCardA" target="_blank" href="<?php echo get_field("event_speaker3_linkedIn") ?>"><?php echo get_field("event_speaker3_name") ?><img src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt="LinkedIn"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mentorsCard">
                    <div class="mentorsCardWrapper">
                        <div class="mentorsCardLeft">
                            <?php
                $image_array = get_field('event_speaker4_image');
                if ($image_array) {
                    $image_url = $image_array['url'];
                    $image_alt = $image_array['alt'];
                    echo '<img class="mentorCardImageEvent" src="' . $image_url . '" alt="' . $image_alt . '">';
                } else {
                    echo '<img class="mentorCardImageEvent" src="' . get_theme_file_uri('images/mentorPhoto.png') . '" alt="Image">';
                }                    
            ?>

                        </div>
                        
                        <div class="mentorsCardRight">
                            <h3 class="mentorsCardCompany"><?php echo get_field("event_speaker4_name") ?></h3>
                            <p style="color: #001438" class="mentorsCardName"><?php echo get_field("event_speaker4_company") ?></p>
                            <p style="color: #001438; font-weight: 300; line-height: 13px" class="mentorsCardTitle"><?php echo get_field("event_speaker4_position") ?></p>
                            <div class="mentorsCardSocials">
                                <a class="mentorsCardA" target="_blank" href="<?php echo get_field("event_speaker4_linkedIn") ?>"><?php echo get_field("event_speaker4_name") ?><img src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt="LinkedIn"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</article>
<?php
}
get_template_part('components/globals/backToTopButton/backToTopButton');
?>

</main>
<?php
get_footer();
?>
