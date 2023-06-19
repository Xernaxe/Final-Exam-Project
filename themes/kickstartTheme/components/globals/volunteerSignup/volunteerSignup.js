const volunteerHeroButton = document.querySelector('.volunteerHeroButton');
const signupPopupWrapper = document.querySelector('.signupPopupWrapper');
const signupClose = document.querySelector('.signupClose');
const modalOverlaySignup = document.querySelector('.modalOverlaySignup');
const signupEmailInput = document.querySelector('.signupEmailInput');
const signupButton = document.querySelector('.signupButton');

const toggleActionSignup = () => {
	signupPopupWrapper.classList.toggle('hide');
	body.classList.toggle('overflow');
};

[volunteerHeroButton, signupClose, modalOverlaySignup].forEach((elm) => {
	elm.addEventListener('click', toggleActionSignup);
});

signupButton.addEventListener('click', (e) => {
    e.preventDefault()
    signupEmailInput.value = ''
})
