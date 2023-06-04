const arrowBack = document.querySelector('.reviewCardArrow_back');
const arrowNext = document.querySelector('.reviewCardArrow_next');
const reviewSlider = document.querySelector('.reviewSlider');
const postsCount = reviewSlider.dataset.posts_count;
const reviewSliderWidth = reviewSlider.offsetWidth;

let sliderPos = 1;

arrowBack.addEventListener('click', scrollReviewSliderBack);
arrowNext.addEventListener('click', scrollReviewSliderNext);
reviewSlider.addEventListener('scroll', updateSliderPos);


function scrollReviewSliderBack() {
	sliderPos--;
	arrowBack.classList.toggle('hide', sliderPos <= 1); //adds  
	arrowNext.classList.remove('hide');
	reviewSlider.scrollBy({
		left: -reviewSliderWidth,
		behavior: 'smooth',
	});
}

function scrollReviewSliderNext() {
	sliderPos++;
	arrowNext.classList.toggle('hide', sliderPos >= postsCount);
	arrowBack.classList.remove('hide');
	reviewSlider.scrollBy({
		left: reviewSliderWidth,
		behavior: 'smooth',
	});
}

function updateSliderPos() {
	const scrollPosition = reviewSlider.scrollLeft;
	sliderPos = Math.round(scrollPosition / reviewSliderWidth) + 1; //sliderPos = scrollPosition(scrollLet value) divided by the container's width (+1 because we are not 0 based here)
	arrowBack.classList.toggle('hide', sliderPos <= 1);
	arrowNext.classList.toggle('hide', sliderPos >= postsCount);
}
