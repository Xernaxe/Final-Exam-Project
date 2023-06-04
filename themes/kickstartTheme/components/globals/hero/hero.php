<?php

$pageHeader = get_the_title();

if ($pageHeader == 'Crew') {
  $pageHeader = 'This is the Crew';
} elseif ($pageHeader == "Mentors") {
  $pageHeader = 'Want to Connect?';
} elseif ($pageHeader == 'Volunteer') {
  $pageHeader = 'Become a volunteer';
} elseif ($pageHeader == 'Podcast'){
  $pageHeader = '';
} elseif (is_singular()) {
  $pageHeader = get_the_title();
} else {
  $pageHeader = 'Welcome & Enjoy';
}

?>

<div class="hero">
  <div class="heroWrapper">

    <div class="heroOverlay"></div>
    <img class="heroIMG" src="<?php echo get_theme_file_uri('/images/heroimg.png') ?>" alt="Hero Img">

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


      </div>
      <?php
    }
    ?>

    <h1 class="heroH"><?php echo $pageHeader ?></h1>

  </div>
</div>

<script>

function manageAudioPlayer(audioSrc, playAudioSignal){
  let audioPlayer = document.querySelector('.heroAudio');
  let source = document.querySelector('.heroSource');

  if(audioPlayer.readyState !== 4 || source.src !== audioSrc){
    source.src = audioSrc;
    audioPlayer.load();
  }
  if (playAudioSignal && audioPlayer.paused) {
    audioPlayer.play();
  } else if (playAudioSignal && !audioPlayer.paused) {
    audioPlayer.pause()
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
  let firstCardP = podcastCards[0].querySelector('.podcastCardP').textContent;
  let firstCardAudio = podcastCards[0].querySelector('.podcastCardAudio').src;

  changeHeroContent(firstCardH, firstCardP, firstCardAudio);

  podcastCards.forEach(function(card) {
    let playButton = card.querySelector('.podcastCardPlay');
    let title = card.querySelector('.podcastCardH').textContent;
    let desc = card.querySelector('.podcastCardP').textContent;
    let audioSrc = card.querySelector('.podcastCardAudio').src;

    playButton.addEventListener('click', function() {
      changeHeroContent(title, desc, audioSrc, true);
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  });
});





</script>