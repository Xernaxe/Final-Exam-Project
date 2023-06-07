<div class="departmentsCardsWrapper">
        <div class="departmentsCardWrapper">

            <div class="departmentsCard">
                <img class="departmentsIMG" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <p class="departmentsP">Marketing department</p>
                <img class="departmentsArrow rotate" src="<?php echo get_theme_file_uri('/images/downArrow_O.svg') ?>" alt="">
            </div>

            <div class="departmentsPopup">
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">Marketing department</h4>
                <p class="departmentsPopupP">In marketing you are able to develop yourself in social media, data
                    oriented from previous events, partially business plans, etc.
                    If you would have other volunteer proposals within the marketing field do not hesitate to contact
                    us.</p>
                <?php get_template_part('components/globals/contactUsButton/contactUsButton') ?>
            </div>

        </div>

        <div class="departmentsCardWrapper">
            <div class="departmentsCard">
                <img class="departmentsIMG" src="<?php echo get_theme_file_uri('/images/pc_O.svg') ?>" alt="">
                <p class="departmentsP">Project manager</p>
                <img class="departmentsArrow" src="<?php echo get_theme_file_uri('/images/downArrow_O.svg') ?>" alt="">
            </div>
            
            <div class="departmentsPopup hide">
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">Marketing</h4>
                <p class="departmentsPopupP">In marketing you are able to develop yourself in social media, data
                    oriented from previous events, partially business plans, etc.
                    If you would have other volunteer proposals within the marketing field do not hesitate to contact
                    us.</p>
                <?php get_template_part('components/globals/contactUsButton/contactUsButton') ?>
            </div>
            
        </div>
        
        
        <div class="departmentsCardWrapper">
            <div class="departmentsCard">
                <img class="departmentsIMG" src="<?php echo get_theme_file_uri('/images/hr_O.svg') ?>" alt="">
                <p class="departmentsP">Human rescources</p>
                <img class="departmentsArrow" src="<?php echo get_theme_file_uri('/images/downArrow_O.svg') ?>" alt="">
            </div>
            
            <div class="departmentsPopup hide">
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">Marketing</h4>
                <p class="departmentsPopupP">In marketing you are able to develop yourself in social media, data
                    oriented from previous events, partially business plans, etc.
                    If you would have other volunteer proposals within the marketing field do not hesitate to contact
                    us.</p>
                <?php get_template_part('components/globals/contactUsButton/contactUsButton') ?>
            </div>
            
        </div>
        
        <div class="departmentsCardWrapper">
            <div class="departmentsCard">
                <img class="departmentsIMG departmentsIMG_network"
                src="<?php echo get_theme_file_uri('/images/it_O.svg') ?>" alt="">
                <p class="departmentsP">It department</p>
                <img class="departmentsArrow" src="<?php echo get_theme_file_uri('/images/downArrow_O.svg') ?>" alt="">
            </div>
            
            <div class="departmentsPopup hide">
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">Marketing</h4>
                <p class="departmentsPopupP">In marketing you are able to develop yourself in social media, data
                    oriented from previous events, partially business plans, etc.
                    If you would have other volunteer proposals within the marketing field do not hesitate to contact
                    us.</p>
                <?php get_template_part('components/globals/contactUsButton/contactUsButton') ?>
            </div>
            
        </div>
        
        <div class="departmentsCardWrapper">
            <div class="departmentsCard">
                <img class="departmentsIMG departmentsIMG_link" src="<?php echo get_theme_file_uri('/images/cd_O.svg') ?>"
                alt="">
                <p class="departmentsP">Creative department</p>
                <img class="departmentsArrow" src="<?php echo get_theme_file_uri('/images/downArrow_O.svg') ?>" alt="">
            </div>
            
            <div class="departmentsPopup hide">
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">Marketing</h4>
                <p class="departmentsPopupP">In marketing you are able to develop yourself in social media, data
                    oriented from previous events, partially business plans, etc.
                    If you would have other volunteer proposals within the marketing field do not hesitate to contact
                    us.</p>
                <?php get_template_part('components/globals/contactUsButton/contactUsButton') ?>
            </div>
            
        </div>
            
        </div>
        <div class="departmentsPopup departmentsPopupDesktop">
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <div class="departmentsPopupWrapper">
                    <h4 class="departmentsPopupH">Marketing department</h4>
                    <h5 class="departmentsPopupSubH">Open Position</h5>
                    <p class="departmentsPopupP">In marketing you are able to develop yourself in social media, data
                        oriented from previous events, partially business plans, etc.
                        If you would have other volunteer proposals within the marketing field do not hesitate to contact
                        us.</p>
                        <a class="departmentsPopupBtnDesktop" href="">Become a Volunteer <img src="<?php echo get_theme_file_uri('images/buttonArrow_W.svg') ?>" alt=""></a>
                    </div>
            </div>
        <script>

const departmentCardsWrappers = document.querySelectorAll(".departmentsCardWrapper");

departmentCardsWrappers.forEach(cardWrapper => {
    const departmentCard = cardWrapper.querySelector(".departmentsCard");
    const departmentPopup = cardWrapper.querySelector(".departmentsPopup");
    const departmentArrow = cardWrapper.querySelector('.departmentsArrow')

    departmentCard.addEventListener("click", () => {
        departmentPopup.classList.toggle('hide')
        departmentArrow.classList.toggle('rotate')
    });

});


</script>