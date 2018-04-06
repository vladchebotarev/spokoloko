(function() {
	for (let i = 1; i <= 8; ++i) {
		$(`#day${i}`).click(function() {
			$(this)[0].disabled = true;
			let boolean = $(this).attr('checked');
			$(this).attr('checked', !boolean);
			if (boolean) {
				$(this).css('background-color', '#df0841').hover(function(e) {
					$(this).css('background-color', e.type === 'mouseenter' ? '#df0841' : '#FF5722'); //orange
				});
				$(`#day${i} ~ .hours-available`).velocity({
					opacity: 1,
				}, {
					easing: 'ease-in-out',
					visibility: 'visible',
					complete: function() {
						$(`#day${i}`)[0].disabled = false;
					}
				});
			} else {
				$(this).css('background-color', '#252525').hover(function(e) {
					$(this).css('background-color', e.type === 'mouseenter' ? '#252525' : '#AAAAAA'); //grey
				});
				$(`#day${i} ~ .hours-available`).velocity({
					opacity: 0,
				}, {
					easing: 'ease-in-out',
					visibility: 'hidden',
					complete: function() {
						$(`#day${i}`)[0].disabled = false;
					}
				});
			}
		});
	}
})();