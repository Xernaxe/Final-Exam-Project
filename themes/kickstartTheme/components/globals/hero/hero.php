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
        if (is_singular()) {
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
    <img class="heroIMGMobile" src="<?php echo get_theme_file_uri('/images/heroimg.png') ?>" alt="Hero Img">
    <img class="heroIMGDesktop" src="<?php echo get_theme_file_uri('/images/heroimg.png') ?>" alt="Hero Img">

    <?php
    if (get_the_title() == "Podcast") {
      ?>
      <div class="heroPodcastWrapper">

        <h1 class="heroPodcastH1">Listen to learn</h1>
        <h2 class="heroPodcastH2"></h2>

        <div class="heroPodcastPlayer">
          <audio class="heroAudio" controls>
            <source class="heroSource" type="audio/mpeg">
          </audio>
        </div>

        <p class="heroPodcastP"></p>

        <a class="podcastCardSpotifyBtn">
            Listen to on Spotify
        </a>
      </div>
      <?php
    }
    ?>

    <h1 class="heroH"><?php echo $pageHeader ?></h1>

  </div>
</section>

<script>

function manageAudioPlayer(audioSrc, playAudioSignal) {
  let audioPlayer = document.querySelector('.heroAudio');
  let source = document.querySelector('.heroSource');

  audioPlayer.oncanplaythrough = () => {
    if (playAudioSignal && audioPlayer.paused) {
      audioPlayer.play();
    } else if (!playAudioSignal && !audioPlayer.paused) {
      audioPlayer.pause();
    }
  };

  if (audioPlayer.src !== audioSrc) {
    source.src = audioSrc;
    audioPlayer.load();
  }

  audioPlayer.volume = 0.1;
}

function changeHeroContent(cardH, cardP, audioSrc, playAudioSignal) {
  let heroPodcastH2 = document.querySelector('.heroPodcastH2');
  let heroPodcastP = document.querySelector('.heroPodcastP');
  

  heroPodcastH2.textContent = cardH;
  heroPodcastP.textContent = cardP;

  manageAudioPlayer(audioSrc, playAudioSignal)
  
}

document.addEventListener('DOMContentLoaded', function() {
  let podcastCards = document.querySelectorAll('.podcastCard');
  let firstCardH = podcastCards[0].querySelector('.podcastCardH').textContent;
  let firstCardP = podcastCards[0].querySelector('.podcastCardP').dataset.podcast_description;
  let firstCardAudio = podcastCards[0].querySelector('.podcastCardAudio').src;
  podcastCards[0].classList.add('podcastCurrentlyPlaying')
  let audioIsPlaying = false;

  changeHeroContent(firstCardH, firstCardP, firstCardAudio);

  podcastCards.forEach(function(card) {
    let playButton = card.querySelector('.podcastCardPlay');
    let title = card.querySelector('.podcastCardH').textContent;
    let desc = card.querySelector('.podcastCardP').dataset.podcast_description;
    let audioSrc = card.querySelector('.podcastCardAudio').src;

    card.addEventListener('click', () => {
      podcastCards.forEach(card2 => {
        card2.classList.remove('podcastCurrentlyPlaying')
      })
      card.classList.add('podcastCurrentlyPlaying')

      changeHeroContent(title, desc, audioSrc, false);

      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    })
    
    playButton.addEventListener('click', function(e) {
      e.stopPropagation(); // TO not get triggered twice by the even propagation chain in DOM node

      podcastCards.forEach(card2 => {
        card2.classList.remove('podcastCurrentlyPlaying');
      });
      card.classList.add('podcastCurrentlyPlaying');

      if (audioIsPlaying) {
        changeHeroContent(title, desc, audioSrc, false);
        audioIsPlaying = false;
      } else {
        changeHeroContent(title, desc, audioSrc, true);
        audioIsPlaying = true;
      }

      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  });
});





</script>