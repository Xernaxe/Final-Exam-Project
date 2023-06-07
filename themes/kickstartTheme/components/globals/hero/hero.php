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
    <img class="heroIMGMobile" src="<?php echo get_theme_file_uri('/images/heroIMG.png') ?>" alt="Hero Img">
    <img class="heroIMGDesktop" src="<?php echo get_theme_file_uri('/images/heroIMG.png') ?>" alt="Hero Img">

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

        <a class="podcastCardSpotifyBtn">
            Listen to on Spotify
        </a>
      </div>
      <?php
    } elseif (has_category('events', get_the_ID())){
      ?>
      <div class="eventHeroDetails">
        <h1 class="eventHeroH"><?php echo $pageHeader ?></h1>
        <p class="eventDate">17th of May</p>
        <p class="eventLocation">Aalborg University</p>
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

function changeHeroContent(cardH, cardP, cardDate, audioSrc, playAudioSignal) {
  let heroPodcastH2 = document.querySelector('.heroPodcastH2');
  let heroPodcastP = document.querySelector('.heroPodcastP');
  let heroPodcastH3 = document.querySelector('.heroPodcastH3');
  

  heroPodcastH2.textContent = cardH;
  heroPodcastP.textContent = cardP;
  heroPodcastH3.textContent = cardDate;

  manageAudioPlayer(audioSrc, playAudioSignal)
  
}

document.addEventListener('DOMContentLoaded', function() {
  let podcastCards = document.querySelectorAll('.podcastCard');
  let firstCardH = podcastCards[0].querySelector('.podcastCardH').textContent;
  let firstCardP = podcastCards[0].querySelector('.podcastCardP').dataset.podcast_description;
  let firstCardDate = podcastCards[0].querySelector('.podcastCardDate').textContent;
  let firstCardAudio = podcastCards[0].querySelector('.podcastCardAudio').src;
  podcastCards[0].classList.add('podcastCurrentlyPlaying')
  let audioIsPlaying = false;

  changeHeroContent(firstCardH, firstCardP, firstCardDate, firstCardAudio);

  podcastCards.forEach(function(card) {
    let playButton = card.querySelector('.podcastCardPlay');
    let playButtonDesktop = card.querySelector('.podcastCardPlayDesktop')
    let title = card.querySelector('.podcastCardH').textContent;
    let desc = card.querySelector('.podcastCardP').dataset.podcast_description;
    let date = card.querySelector('.podcastCardDate').textContent;
    let audioSrc = card.querySelector('.podcastCardAudio').src;

    card.addEventListener('click', () => {
      podcastCards.forEach(card2 => {
        card2.classList.remove('podcastCurrentlyPlaying')
      })
      card.classList.add('podcastCurrentlyPlaying')

      changeHeroContent(title, desc, date, audioSrc, false);

      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    })
    
    playButton.addEventListener('click', function(e) {
      e.stopPropagation();

      podcastCards.forEach(card2 => {
        card2.classList.remove('podcastCurrentlyPlaying');
      });
      card.classList.add('podcastCurrentlyPlaying');

      let isCurrentlyPlaying = card.classList.contains('podcastCurrentlyPlaying');

      podcastCards.forEach(card2 => {
        let playButton = card2.querySelector('.podcastCardPlayDesktop');
        let audioSrc = card2.querySelector('.podcastCardAudio').src;

        if (card2 !== card) {
          playButton.classList.remove('podcastPlaying');
          manageAudioPlayer(audioSrc, false);
        }
      });

      if (isCurrentlyPlaying) {
        playButtonDesktop.classList.add('podcastPlaying');
        changeHeroContent(title, desc, date, audioSrc, true);
      } else {
        playButtonDesktop.classList.remove('podcastPlaying');
        changeHeroContent(title, desc, date, audioSrc, false);
      }

  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});


    playButtonDesktop.addEventListener('click', function(e) {
      e.stopPropagation();

      podcastCards.forEach(card2 => {
        card2.classList.remove('podcastCurrentlyPlaying');
      });
      card.classList.add('podcastCurrentlyPlaying');

      let isCurrentlyPlaying = card.classList.contains('podcastCurrentlyPlaying');

      podcastCards.forEach(card2 => {
        let playButton = card2.querySelector('.podcastCardPlayDesktop');
        let audioSrc = card2.querySelector('.podcastCardAudio').src;

        if (card2 !== card) {
          playButton.classList.remove('podcastPlaying');
          manageAudioPlayer(audioSrc, false);
        }
      });

      if (isCurrentlyPlaying) {
        playButtonDesktop.classList.add('podcastPlaying');
        changeHeroContent(title, desc, date, audioSrc, true);
      } else {
        playButtonDesktop.classList.remove('podcastPlaying');
        changeHeroContent(title, desc, date, audioSrc, false);
      }

      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  });
});





</script>