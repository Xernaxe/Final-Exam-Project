const newsletterPopupWrapper = document.querySelector(
	'.newsletterPopupWrapper'
);
const navNewsletterMobile = document.querySelector('.navNewsletterMobile');
const newsletterDesktop = document.querySelector('.newsletterDesktop');
const newsletterPopupClose = document.querySelector('.newsletterPopupClose');
const modalOverlayNewsletter = document.querySelector(
	'.modalOverlayNewsletter'
);
const newsletterEmailInput = document.querySelector('.newsletterEmailInput');
const newsletterPopupButton = document.querySelector('.newsletterPopupButton');

newsletterPopupButton.addEventListener('click', (e) => {
    e.preventDefault()
    newsletterEmailInput.value = ''
})

const toggleAction = () => {
	newsletterPopupWrapper.classList.toggle('hide');
	body.classList.toggle('overflow');
};

[newsletterDesktop, modalOverlayNewsletter, navNewsletterMobile, newsletterPopupClose].forEach(
	(elm) => {
		elm.addEventListener('click', toggleAction);
	}
);
