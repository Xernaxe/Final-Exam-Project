function setupEventHeroDetails() {
	let eventHeroH = document.querySelector('.eventHeroH');
	let eventDate = document.querySelector('.eventDate');
	let eventLocation = document.querySelector('.eventLocation');

	const article = document.querySelector('.eventArticle');

	eventLocation.textContent = article.dataset.location;
	eventDate.textContent = article.dataset.date;
}
setupEventHeroDetails();
