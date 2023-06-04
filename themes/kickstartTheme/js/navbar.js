const burgerMenu = document.querySelector('.burgerMenu');
const body = document.querySelector('body');

burgerMenu.addEventListener('click', function() {
  const navMobileWrapper = document.querySelector('.navMobileWrapper');
  navMobileWrapper.classList.toggle('hide');
  body.classList.toggle('overflow');
});
