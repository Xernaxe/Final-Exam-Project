  function setupBlogHeroDetails() {
    let eventHeroH = document.querySelector('.eventHeroH');
    let eventDate = document.querySelector('.eventDate');
    let eventLocation = document.querySelector('.eventLocation');

    const article = document.querySelector('.blogArticle');

    eventLocation.textContent = article.dataset.author;
    eventDate.textContent = article.dataset.date;
  }
  setupBlogHeroDetails()