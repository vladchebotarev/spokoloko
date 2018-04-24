var current, next; //divs
const progressbar = $('.basic-progressbar .inner');
const section = 100 / 5;
const animationTime = 'fast';
let counter = 1;

// ANIMATION OPTIONS
var fastAndEase = {
	duration: animationTime,
	easing: 'ease'
};
// ----------------

function enableButtons(boolean) {
	return new Promise((resolve, reject) => {
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
		resolve(true);
	});
}

// MAIN FUNCTION
async function goToNext(direction) {
	if ((direction && counter === 6) || (!direction && counter === 1)) return;
	if (direction) ++counter;
	else --counter;
	let turnOff = await enableButtons(false);

	if (turnOff) {
		current = $('.active-block');
		next = direction ? current.next('.add-listing-content') : current.prev(
			'.add-listing-content');
			// console.log(current, next);

			if (next.length) {
				// change nav
				let currentNav = $('.pagination-active');
				let nextNav = direction ? currentNav.next('li') : currentNav.prev('li');

				// currentNav.velocity({
				// 	color: '#aaa'
				// }, fastAndEase);
				currentNav.removeClass('pagination-active');
				nextNav.velocity({
					backgroundColor: direction ? '#F57C00' : '#aaa'
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
						}, {
							duration: animationTime,
							easing: 'ease',
							complete: function() {
								enableButtons(true);
							}
						});
						next.addClass('active-block');
					}
				});
			} else console.log('lol, a walidacja to gdzie?');
		}
	}


	// NEXT BUTTON
	$('.add-listing-footer .next-sq').click(function() {
		let unfilled = validate();
		console.log(unfilled);
		goToNext(true);
		// if (unfilled === true) goToNext(true);
		// else displayWarning(unfilled);
	});

	// PREV BUTTON
	$('.add-listing-footer .link-sq').click(function() {
		goToNext(false);
	});
