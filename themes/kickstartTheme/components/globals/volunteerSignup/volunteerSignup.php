<section class="signupPopupWrapper hide">

    
    <div class="signupPopup">
        <div class="signupImgWrapper">
            <img class="signupClose" src="<?php echo get_theme_file_uri('/images/closeBtn_B.svg') ?>" alt="Close">
        </div>
        <h2 class="signupH">Let's Volunteer</h2>
        <h3 class="signupSubH">Choose a department</h3>
        
        <form class="signupForm">
            <div class="signupFormWrapper">
                <img class="signupIMG" src="<?php echo get_theme_file_uri('/images/signupImg.svg') ?>" alt="Ilustration">
                <div class="signupDepartmentsWrapper">
                    
                    <div class="signupDepartmentWrapper">
                    <input type="checkbox" name="termsCheckbox" id="termsCheckbox">
                    <div class="signupDepartment">
                        <img src="<?php echo get_theme_file_uri('/images/marketing_B.svg') ?>" alt="Marketing">
                        <p class="signupDepartmentName">Marketing Department</p>
                    </div>
                </div>
                
                <div class="signupDepartmentWrapper">
                    <input type="checkbox" name="termsCheckbox" id="termsCheckbox">
                    <div class="signupDepartment">
                        <img src="<?php echo get_theme_file_uri('/images/pc_B.svg') ?>" alt="Project Coordinator">
                        <p class="signupDepartmentName">Project Coordinator</p>
                    </div>
                </div>
                
                <div class="signupDepartmentWrapper">
                    <input type="checkbox" name="termsCheckbox" id="termsCheckbox">
                    <div class="signupDepartment">
                        <img src="<?php echo get_theme_file_uri('/images/hr_B.svg') ?>" alt="Human Resources">
                        <p class="signupDepartmentName">Human Resources</p>
                    </div>
                </div>
                
                <div class="signupDepartmentWrapper">
                    <input type="checkbox" name="termsCheckbox" id="termsCheckbox">
                    <div class="signupDepartment">
                        <img src="<?php echo get_theme_file_uri('/images/it_b.svg') ?>" alt="IT Development">
                        <p class="signupDepartmentName">IT Development</p>
                    </div>
                </div>
                
                <div class="signupDepartmentWrapper">
                <input type="checkbox" name="termsCheckbox" id="termsCheckbox">
                <div class="signupDepartment">
                    <img src="<?php echo get_theme_file_uri('/images/cd_B.svg') ?>" alt="Creative">
                    <p class="signupDepartmentName">Creative Department</p>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="signupEmailWrapper">
        <input autocomplete="off"  type="email" name="emailInput" id="emailInput" class="signupEmailInput" placeholder="Enter your e-mail address" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required/>
    </div>
    <button class="signupButton">Send</button>
</form>


</div>

<div class="modalOverlaySignup">
    
    </div>
</section>