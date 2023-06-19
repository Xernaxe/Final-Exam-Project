const perksCardsWrapper = document.querySelector('.perksCardsWrapper');

if(perksCardsWrapper){
    perksCardsWrapper.scrollLeft = (perksCardsWrapper.scrollWidth - perksCardsWrapper.offsetWidth) / 2;
}
