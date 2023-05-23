const burgerMenu = document.querySelector('.burgerMenu');

burgerMenu.addEventListener('click', function() {
  const navMobileWrapper = document.querySelector('.navMobileWrapper');
  navMobileWrapper.classList.toggle('hide');
});