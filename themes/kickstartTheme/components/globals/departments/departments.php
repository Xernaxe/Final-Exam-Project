<div class="departmentsCardsWrapper">
        <div class="departmentsCardWrapper">

            <div class="departmentsCard">
                <img class="departmentsIMG" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <p class="departmentsP">Marketing department</p>
                <img class="departmentsArrow" src="<?php echo get_theme_file_uri('/images/downArrow_O.svg') ?>" alt="">
            </div>

            <div class="departmentsPopup hide">
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">Marketing department</h4>
                <p class="departmentsPopupP">In marketing you are able to develop yourself in social media, data oriented from previous events, partially business plans, etc.</p>
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
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/pc_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">Project manager</h4>
                <p class="departmentsPopupP">As a project coordinator you are able to get skill in how to rent venues for events, get experienced in event planning, fund raising, and get better in communicating about business.</p>
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
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/hr_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">Human rescources</h4>
                <p class="departmentsPopupP">In our HR department you will be in charge of arranging everything for the internal meetings for example schedule, food, agenda, and making notes from the meetings.</p>
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
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/it_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">It department</h4>
                <p class="departmentsPopupP">If you join our IT department you can work on developing new tools, ideas which fit to the agenda - make it more fun and interactive. You can also work on the technical and website maintenance.</p>
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
                <img class="departmentsPopupIMG" src="<?php echo get_theme_file_uri('/images/cd_O.svg') ?>" alt="">
                <h4 class="departmentsPopupH">Creative department</h4>
                <p class="departmentsPopupP">In the creative department we're open to new ideas from anyone who wants work on creative idea, or initiative. You simply need write what you are good at and with what you can help us out.</p>
                <?php get_template_part('components/globals/contactUsButton/contactUsButton') ?>
            </div>
            
        </div>
            
        </div>
        <div class="departmentsPopup departmentsPopupDesktop hide">
                <img class="departmentsPopupIMGDesktop" src="<?php echo get_theme_file_uri('/images/marketing_O.svg') ?>" alt="">
                <div class="departmentsPopupWrapper">
                    <h4 class="departmentsPopupH departmentsPopupHDesktop">Marketing department</h4>
                    <h5 class="departmentsPopupSubH ">Open Position</h5>
                    <p class="departmentsPopupP departmentsPopupPDesktop">In marketing you are able to develop yourself in social media, data
                        oriented from previous events, partially business plans, etc.
                        If you would have other volunteer proposals within the marketing field do not hesitate to contact
                        us.</p>
                        <a class="departmentsPopupBtnDesktop" href="">Become a Volunteer <img src="<?php echo get_theme_file_uri('images/buttonArrow_W.svg') ?>" alt=""></a>
                    </div>
            </div>
            <script>
    const departmentCardsWrappers = document.querySelectorAll(".departmentsCardWrapper");
    const departmentsPopupHDesktop = document.querySelector('.departmentsPopupHDesktop');
    const departmentsPopupPDesktop = document.querySelector('.departmentsPopupPDesktop');
    const departmentsPopupDesktop = document.querySelector('.departmentsPopupDesktop');
    const departmentsPopupIMGDesktop = document.querySelector('.departmentsPopupIMGDesktop');
    let activeCard;

    departmentCardsWrappers.forEach(cardWrapper => {
        const departmentCard = cardWrapper.querySelector(".departmentsCard");
        const departmentPopup = cardWrapper.querySelector(".departmentsPopup");
        const departmentArrow = cardWrapper.querySelector('.departmentsArrow');
        const departmentIMG =cardWrapper.querySelector('.departmentsIMG')

        departmentCard.addEventListener("click", () => {
            if (departmentPopup.classList.contains('hide') || departmentsPopupDesktop.classList.contains('hide')) {
                if (activeCard) {
                    activeCard.querySelector(".departmentsPopup").classList.add('hide');
                    activeCard.querySelector('.departmentsArrow').classList.remove('rotate');
                    activeCard.querySelector('.departmentsCard').classList.remove('departmentsActiveCard')
                }
                
                departmentPopup.classList.remove('hide');
                departmentArrow.classList.add('rotate');
                departmentsPopupHDesktop.textContent = cardWrapper.querySelector(".departmentsPopupH").textContent;
                departmentsPopupPDesktop.textContent = cardWrapper.querySelector(".departmentsPopupP").textContent;
                departmentsPopupIMGDesktop.src = departmentIMG.src;
                departmentsPopupDesktop.classList.remove('hide');
                departmentCard.classList.add('departmentsActiveCard')
                
                activeCard = cardWrapper;
            } else {
                departmentPopup.classList.add('hide');
                departmentArrow.classList.remove('rotate');
                departmentCard.classList.remove('departmentsActiveCard')
                departmentsPopupDesktop.classList.add('hide');

                activeCard = null;
            }
        });
    });
</script>
