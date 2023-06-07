document.addEventListener('DOMContentLoaded', function () {
	const slider = document.querySelector('.blogSliderDesktop');
	const cards = Array.from(document.querySelectorAll('.blogSliderDesktopCard'));
	const prevArrow = document.querySelector('.reviewCardDesktopArrow_back');
	const nextArrow = document.querySelector('.reviewCardDesktopArrow_next');

	const cardWidth = cards[0].offsetWidth;
	const totalWidth = cards.length * cardWidth;
	slider.style.width = totalWidth + 'px';

	let currentSlide = 0;
	const maxSlide = cards.length - 1;

	function slideTo(index) {
		const offset = index * cardWidth * -1;
		slider.style.transform = `translateX(${offset}px)`;
		slider.style.transition = 'transform 0.3s ease';
	}

	function prevSlide() {
		if (currentSlide > 0) {
			currentSlide--;
			slideTo(currentSlide);
			if (currentSlide === 0) {
				prevArrow.classList.add('hide');
			}
		}
		if (nextArrow.classList.contains('hide'))
			nextArrow.classList.remove('hide');
	}

	function nextSlide() {
		if (currentSlide < maxSlide) {
			currentSlide++;
			slideTo(currentSlide);
			if (currentSlide === maxSlide - 1) {
				nextArrow.classList.add('hide');
			}

			if (prevArrow.classList.contains('hide'))
				prevArrow.classList.remove('hide');
		}
	}

	prevArrow.addEventListener('click', prevSlide);
	nextArrow.addEventListener('click', nextSlide);
});
