<?php

$pageHeader = get_the_title();

switch ($pageHeader) {
    case 'Crew':
        $pageHeader = 'Meet our crew';
        break;
    case 'Mentors':
        $pageHeader = 'WANT TO CONNECT with mentors?';
        break;
    case 'Volunteer':
        $pageHeader = "Let's Volunteer";
        break;
    case 'Podcast':
        $pageHeader = '';
        break;
    case 'Events':
        $pageHeader = 'Entrepreneur Events';
        break;
    case 'Blog':
        $pageHeader = 'Our Blogs';
        break;
    default:
        if(is_page_template('templates/template-home.php')) {
            $pageHeader = 'Welcome to Kickstart Aalborg & enjoy';
        }
        elseif (is_singular()) {
            $pageHeader = get_the_title();
        } else {
            $pageHeader = 'Welcome to Kickstart Aalborg & enjoy';
        }
        break;
}
?>

<section class="hero">
  <div class="heroWrapper">

    <div class="heroOverlay"></div>
    <img class="heroIMGMobile" src="<?php echo get_theme_file_uri('/images/heroIMG.avif') ?>" alt="Hero Img">
    <img class="heroIMGDesktop" src="<?php echo get_theme_file_uri('/images/heroIMG.avif') ?>" alt="Hero Img">

    <?php
    if (get_the_title() == "Podcast") {
      ?>
      <div class="heroPodcastWrapper">
        <h3 class="heroPodcastH3"></h3>
        <h1 class="heroPodcastH1">Listen to learn</h1>
        <h2 class="heroPodcastH2"></h2>

        <div class="heroPodcastPlayer">
          <audio class="heroAudio" controls>
            <source class="heroSource" type="audio/mpeg">
          </audio>
        </div>

        <p class="heroPodcastP"></p>

        <a class="podcastCardSpotifyBtn heroSpotifyBtn">
            Listen to on Spotify
        </a>
      </div>
      <?php
    } elseif (has_category('events', get_the_ID()) || has_category('blog', get_the_ID())){
      ?>
      <div class="eventHeroDetails">
        <h1 class="eventHeroH"><?php echo $pageHeader ?></h1>
        <p class="eventDate">17th of May</p>
        <p class="eventLocation">Aalborg University</p>
      </div>
      <?php
    } elseif (get_the_title() == "Volunteer") {
      ?>
        <div class="volunteerHeroWrapper">
          <h1 class="heroH"><?php echo $pageHeader ?></h1>
          <button class="volunteerHeroButton">Become a volunteer <img src="<?php echo get_theme_file_uri('images/buttonArrow_W.svg') ?>" alt="Next"></button>
        </div>
      <?php
    } else {
      ?>
        <h1 class="heroH"><?php echo $pageHeader ?></h1>

      <?php
    }
    ?>


  </div>
</section>
