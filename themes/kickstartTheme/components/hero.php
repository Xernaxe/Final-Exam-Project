<?php 

  $pageHeader = get_the_title();

  if($pageHeader == 'Crew'){
    $pageHeader = 'This is the Crew';
  } elseif ($pageHeader == "Mentors") {
    $pageHeader = 'Want to Connect?';
  } else {
    $pageHeader = 'Welcome & Enjoy';
  }

?>

<div class="hero">
  <div class="heroWrapper">

    <div class="heroOverlay"></div>
    <img class="heroIMG" src="<?php echo get_theme_file_uri('/images/heroimg.png')?>" alt="Hero Img">
  
    <h1 class="heroH"><?php echo $pageHeader ?></h1>

  </div>
</div>