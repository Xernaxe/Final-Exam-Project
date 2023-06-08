


<div class="eventsCard">
  
    <h3 class="eventsCardName"><?php echo get_field('event_name', $eventPost->ID); ?></h3>
    <p class="eventsCardDesc">In a constantly changing world, it's impossible for leaders to provide employees with the assurance they want, says Vimeo CEO Anjali Sud. ..</p>
    
    <div class="eventsDetails">
      <img class="eventsDetailsIMG" src="<?php echo get_theme_file_uri('/images/dateIcon_O.svg') ?>" alt="Date">
      <p class="eventsCardDetailsP">17th of May</p>
    </div>
    
    <div class="eventsDetails">
      <img class="eventsDetailsIMG" src="<?php echo get_theme_file_uri('/images/locationIcon_O.svg') ?>" alt="Location">
      <p class="eventsCardDetailsP">Aalborg University</p>
    </div>
    
    <div class="eventsButtons">
      <a class="eventsReadMoreBtn" href="<?php the_permalink() ?>">READ MORE <img src="<?php echo get_theme_file_uri('/images/rightArrow_W.svg') ?>" alt="NEXT"></a>
      <a class="eventsBuyBtn">BUY A TICKET <img src="<?php echo get_theme_file_uri('/images/rightArrow_W.svg') ?>" alt="NEXT"></a>
    </div>

</div>