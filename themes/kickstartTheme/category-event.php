
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
    <div class="articleContent">
        <?php the_content(); ?>
        <a class="buyTicketBtn"> buy a ticket <img src="<?php echo get_theme_file_uri('/images/rightArrow_W.svg') ?>"
                alt=""></a>
        <p class="eventP eventP1"><?php echo get_field('event_content') ?></p>
        <p class="eventP eventP2"><?php echo get_field('event_content2') ?></p>

        <div class="eventPerksWrapper" style="margin: 40px 0">
            <div class="perksCarousel">
                <div class="perksCardsWrapper">
                    <div class="perksCard">
                        <img class="perksIMG" src="<?php echo get_theme_file_uri('/images/perkFriendly_B.svg') ?>" alt="">
                        <p class="perksP">Friendly people</p>
                    </div>
                    <div class="perksCard">
                        <img class="perksIMG" src="<?php echo get_theme_file_uri('/images/perkCoffee_B.svg') ?>" alt="">
                        <p class="perksP">Coffe meetings</p>
                    </div>
                    <div class="perksCard">
                        <img class="perksIMG" src="<?php echo get_theme_file_uri('/images/perkHearth_B.svg') ?>" alt="">
                        <p class="perksP">Self-develoment</p>
                    </div>
                    <div class="perksCard">
                        <img class="perksIMG perksIMG_network" src="<?php echo get_theme_file_uri('/images/perkNetwork_B.svg') ?>" alt="">
                        <p class="perksP">Networking</p>
                    </div>
                    <div class="perksCard">
                        <img class="perksIMG perksIMG_link" src="<?php echo get_theme_file_uri('/images/perkLink_B.svg') ?>" alt="">
                        <p class="perksP">Experience</p>
                    </div>
                </div>
            </div>

        </div>

        <p class="eventP eventP3"><?php echo get_field('event_content3') ?></p>

        <div class="eventScheduleCard">
            <h2 class="eventScheduleH">Program</h2>
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

        <p class="eventP eventP4"><?php echo get_field('event_content4') ?></p>

        <div class="eventSpeakersWrapper">
            <h2 class="eventScheduleH">Speakers</h2>

            <div class="eventSpeakersCardsWrapper">

                <div class="mentorsCard">
                    <div class="mentorsCardWrapper">
                        <div class="mentorsCardLeft">
                            <img style="width: 70px;" src="<?php echo get_theme_file_uri('/images/mentorPhoto.png') ?>" alt="">

                        </div>
                        
                        <div class="mentorsCardRight">
                            <h3 class="mentorsCardCompany">Lorelain Gilmore</h3>
                            <p style="color: #001438" class="mentorsCardName">DragonFly</p>
                            <p style="color: #001438; font-weight: 300; line-height: 13px" class="mentorsCardTitle">CEO</p>
                            <div class="mentorsCardSocials">
                                <a class="mentorsCardA" href="">Lorelain Gilmore<img src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mentorsCard">
                    <div class="mentorsCardWrapper">
                        <div class="mentorsCardLeft">
                            <img style="width: 70px;" src="<?php echo get_theme_file_uri('/images/mentorPhoto.png') ?>" alt="">

                        </div>
                        
                        <div class="mentorsCardRight">
                            <h3 class="mentorsCardCompany">Lorelain Gilmore</h3>
                            <p style="color: #001438" class="mentorsCardName">DragonFly</p>
                            <p style="color: #001438; font-weight: 300; line-height: 13px" class="mentorsCardTitle">CEO</p>
                            <div class="mentorsCardSocials">
                                <a class="mentorsCardA" href="">Lorelain Gilmore<img src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mentorsCard">
                    <div class="mentorsCardWrapper">
                        <div class="mentorsCardLeft">
                            <img style="width: 70px;" src="<?php echo get_theme_file_uri('/images/mentorPhoto.png') ?>" alt="">

                        </div>
                        
                        <div class="mentorsCardRight">
                            <h3 class="mentorsCardCompany">Lorelain Gilmore</h3>
                            <p style="color: #001438" class="mentorsCardName">DragonFly</p>
                            <p style="color: #001438; font-weight: 300; line-height: 13px" class="mentorsCardTitle">CEO</p>
                            <div class="mentorsCardSocials">
                                <a class="mentorsCardA" href="">Lorelain Gilmore<img src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mentorsCard">
                    <div class="mentorsCardWrapper">
                        <div class="mentorsCardLeft">
                            <img style="width: 70px;" src="<?php echo get_theme_file_uri('/images/mentorPhoto.png') ?>" alt="">

                        </div>
                        
                        <div class="mentorsCardRight">
                            <h3 class="mentorsCardCompany">Lorelain Gilmore</h3>
                            <p style="color: #001438" class="mentorsCardName">DragonFly</p>
                            <p style="color: #001438; font-weight: 300; line-height: 13px" class="mentorsCardTitle">CEO</p>
                            <div class="mentorsCardSocials">
                                <a class="mentorsCardA" href="">Lorelain Gilmore<img src="<?php echo get_theme_file_uri('/images/linkedin_B.svg') ?>" alt=""></a>
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
