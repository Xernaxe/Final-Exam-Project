const backToTopButton = document.querySelector('.backToTopButton');

backToTopButton.addEventListener('click', function() {
	window.scrollTo({
		top: 0,
		behavior: 'smooth',
	});
});
