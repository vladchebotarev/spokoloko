var current, next; //divs
const progressbar = $('.basic-progressbar .inner');
const section = 100 / 5;
const animationTime = 'fast';

// ANIMATION OPTIONS
var fastAndEase = {
	duration: animationTime,
	easing: 'ease'
};
// ----------------

function enableButtons(boolean) {
	let buttons = $('.add-listing-footer button');
	if (boolean) {
		buttons.each(function(button) {
			buttons[button].disabled = false;
		});
	} else {
		buttons.each(function(button) {
			buttons[button].disabled = true;
		});
	}
}

// MAIN FUNCTION
function goToNext(direction) {
	enableButtons(false);

	current = $('.active-block');
	next = direction ? current.next('.add-listing-content') : current.prev(
		'.add-listing-content');
	// console.log(current, next);

	if (next.length) {
		// change nav
		let currentNav = $('.pagination-active');
		let nextNav = direction ? currentNav.next('li') : currentNav.prev('li');

		currentNav.velocity({
			fontWeight: 400,
			color: '#aaa'
		}, fastAndEase);
		currentNav.removeClass('pagination-active');
		nextNav.velocity({
			fontWeight: 700,
			color: '#F57C00'
		}, fastAndEase);
		nextNav.addClass('pagination-active');


		// hide the current div
		current.velocity({
			opacity: 0
		}, {
			duration: animationTime,
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
}


// NEXT BUTTON
$('.add-listing-footer .next-sq').click(function() {
	goToNext(true);
});

// PREV BUTTON
$('.add-listing-footer .link-sq').click(function() {
	goToNext(false);
});