var current, next; //divs
var progressbar = $('.basic-progressbar .inner');
const section = 100 / 5;

function enableButtons(boolean) {
	let buttons = $('.add-listing-footer a');
	buttons.each(function(button) {
		button.disabled = boolean;
	});
}


// ANIMATION OPTIONS
var fastAndEase = {
	duration: 'fast',
	easing: 'ease'
};
// ----------------

// NEXT BUTTON
$('.add-listing-footer .next-sq').click(function() {
	enableButtons(false);

	current = $('.active-block');
	next = current.next('.add-listing-content');
	console.log(current, next);

	if (next.length) {
		// progressbar
		let progressbarValue = progressbar.attr(
			'data-percentage');
		progressbarValue = parseInt(progressbarValue.substr(0,
			progressbarValue.length - 1));
		let newprogressbarValue = Math.floor(progressbarValue + section);

		progressbar.attr('data-percentage',
			`${newprogressbarValue}%`);

		progressbar.velocity({
			width: `${newprogressbarValue}%`
		}, fastAndEase);


		// hide the current div
		current.velocity({
			opacity: 0
		}, {
			duration: 'fast',
			easing: 'ease',
			complete: function() {
				// display the next div
				current.removeClass('active-block');
				next.velocity({
					opacity: 1
				}, fastAndEase);
				next.addClass('active-block');
			}
		});
	} else console.log('lol, a walidacja to gdzie?');

	enableButtons(true);
});

// PREV BUTTON
$('.add-listing-footer .link-sq').click(function() {
	enableButtons(false);

	current = $('.active-block');
	next = current.prev('.add-listing-content');
	console.log(current, next);

	if (next.length) {
		// progressbar
		let progressbarValue = progressbar.attr(
			'data-percentage');
		progressbarValue = parseInt(progressbarValue.substr(0,
			progressbarValue.length - 1));
		let newprogressbarValue = Math.floor(progressbarValue - section);

		progressbar.attr('data-percentage',
			`${newprogressbarValue}%`);

		progressbar.velocity({
			width: `${newprogressbarValue}%`
		}, fastAndEase);

		// hide the current div
		current.velocity({
			opacity: 0
		}, {
			duration: 'fast',
			easing: 'ease',
			complete: function() {
				// display the next div
				current.removeClass('active-block');
				next.velocity({
					opacity: 1
				}, fastAndEase);
				next.addClass('active-block');
			}
		});
	} else console.log(
		`nie ma żadnego elementu, bo next.length = ${next.length}`
	);

	enableButtons(true);
});