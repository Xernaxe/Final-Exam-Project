function manageAudioPlayer(audioSrc, playAudioSignal) {
	let audioPlayer = document.querySelector('.heroAudio');
	let source = document.querySelector('.heroSource');

	audioPlayer.oncanplaythrough = () => {
		if (playAudioSignal && audioPlayer.paused) {
			audioPlayer.play();
		} else if (!playAudioSignal && !audioPlayer.paused) {
			audioPlayer.pause();
		}
	};

	if (audioPlayer.src !== audioSrc) {
		source.src = audioSrc;
		audioPlayer.load();
	}

	audioPlayer.volume = 0.1;
}

function changeHeroContent(
	cardH,
	cardP,
	cardDate,
	cardLink,
	heroIMG,
	audioSrc,
	playAudioSignal
) {
	let heroPodcastH2 = document.querySelector('.heroPodcastH2');
	let heroPodcastP = document.querySelector('.heroPodcastP');
	let heroPodcastH3 = document.querySelector('.heroPodcastH3');
	let heroPodcastIMGDesktop = document.querySelector('.heroIMGDesktop');
	let heroPodcastIMGMobile = document.querySelector('.heroIMGMobile');
	let heroSpotifyBtn = document.querySelector('.heroSpotifyBtn');

	heroPodcastH2.textContent = cardH;
	heroPodcastP.textContent = cardP;
	heroPodcastH3.textContent = cardDate;
	heroPodcastIMGDesktop.src = heroIMG;
	heroPodcastIMGMobile.src = heroIMG;
	heroSpotifyBtn.href = cardLink;

	manageAudioPlayer(audioSrc, playAudioSignal);
}


	let podcastCards = document.querySelectorAll('.podcastCard');
	let firstCardH = podcastCards[0].querySelector('.podcastCardH').textContent;
	let firstCardP =
		podcastCards[0].querySelector('.podcastCardP').dataset.podcast_description;
	let firstCardDate =
		podcastCards[0].querySelector('.podcastCardDate').textContent;
	let firstCardAudio = podcastCards[0].querySelector('.podcastCardAudio').src;
	let firstCardIMG = podcastCards[0].querySelector('.podcastCardIMG').src;
	let firstCardLink = podcastCards[0].querySelector('.podcastCardSpotifyBtn').href
	podcastCards[0].classList.add('podcastCurrentlyPlaying');
	let audioIsPlaying = false;

	changeHeroContent(
		firstCardH,
		firstCardP,
		firstCardDate,
		firstCardLink,
		firstCardIMG,
		firstCardAudio
	);

	podcastCards.forEach(function (card) {
		let playButton = card.querySelector('.podcastCardPlay');
		let playButtonDesktop = card.querySelector('.podcastCardPlayDesktop');
		let title = card.querySelector('.podcastCardH').textContent;
		let desc = card.querySelector('.podcastCardP').dataset.podcast_description;
		let date = card.querySelector('.podcastCardDate').textContent;
		let link = card.querySelector('.podcastCardSpotifyBtn').href;
		let cardIMG = card.querySelector('.podcastCardIMG').src;
		let audioSrc = card.querySelector('.podcastCardAudio').src;

		card.addEventListener('click', () => {
			podcastCards.forEach((card2) => {
				card2.classList.remove('podcastCurrentlyPlaying');
			});
			card.classList.add('podcastCurrentlyPlaying');

			changeHeroContent(title, desc, date, link, cardIMG, audioSrc, false);

			window.scrollTo({
				top: 0,
				behavior: 'smooth',
			});
		});

		playButton.addEventListener('click', function (e) {
			e.stopPropagation();

			podcastCards.forEach((card2) => {
				card2.classList.remove('podcastCurrentlyPlaying');
			});
			card.classList.add('podcastCurrentlyPlaying');

			let isCurrentlyPlaying = card.classList.contains(
				'podcastCurrentlyPlaying'
			);

			podcastCards.forEach((card2) => {
				let playButton = card2.querySelector('.podcastCardPlayDesktop');
				let audioSrc = card2.querySelector('.podcastCardAudio').src;

				if (card2 !== card) {
					playButton.classList.remove('podcastPlaying');
					manageAudioPlayer(audioSrc, false);
				}
			});

			if (isCurrentlyPlaying) {
				playButtonDesktop.classList.add('podcastPlaying');
				changeHeroContent(title, desc, date, link, cardIMG, audioSrc, true);
			} else {
				playButtonDesktop.classList.remove('podcastPlaying');
				changeHeroContent(title, desc, date, link, cardIMG, audioSrc, false);
			}

			window.scrollTo({
				top: 0,
				behavior: 'smooth',
			});
		});

		playButtonDesktop.addEventListener('click', function (e) {
			e.stopPropagation();

			podcastCards.forEach((card2) => {
				card2.classList.remove('podcastCurrentlyPlaying');
			});
			card.classList.add('podcastCurrentlyPlaying');

			let isCurrentlyPlaying = card.classList.contains(
				'podcastCurrentlyPlaying'
			);

			podcastCards.forEach((card2) => {
				let playButton = card2.querySelector('.podcastCardPlayDesktop');
				let audioSrc = card2.querySelector('.podcastCardAudio').src;

				if (card2 !== card) {
					playButton.classList.remove('podcastPlaying');
					manageAudioPlayer(audioSrc, false);
				}
			});

			if (isCurrentlyPlaying) {
				playButtonDesktop.classList.add('podcastPlaying');
				changeHeroContent(title, desc, date, link, cardIMG, audioSrc, true);
			} else {
				playButtonDesktop.classList.remove('podcastPlaying');
				changeHeroContent(title, desc, date, link, cardIMG, audioSrc, false);
			}

			window.scrollTo({
				top: 0,
				behavior: 'smooth',
			});
		});
	});
