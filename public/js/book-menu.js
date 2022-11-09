window.addEventListener('load', function () {
	// Make sure that book side menu is always open, provided one is present
	if (document.querySelector('.reading-header__toc.dropdown > .reading-header__toc__title')) {
		var intervalId = setInterval(function () {
			var button = document.querySelector('.reading-header__toc.dropdown > .reading-header__toc__title > button');
			if (button) {
				clearInterval(intervalId);
				button.dispatchEvent(new MouseEvent('click'));
			}
		}, 50);
	}
});
