let current, next; //divs
const progressbar = $('.basic-progressbar .inner');
const section = 100 / 5;
const animationTime = 'fast';
let counter = 1;

// ANIMATION OPTIONS
const fastAndEase = {
  duration: animationTime,
  easing: 'ease'
};

// ----------------

function enableButtons(boolean) {
  return new Promise((resolve, reject) => {
    let buttons = $('.add-listing-footer button');
    if(boolean) {
      buttons.each(function(button) {
        buttons[ button ].disabled = false;
      });
    } else {
      buttons.each(function(button) {
        buttons[ button ].disabled = true;
      });
    }
    resolve(true);
  });
}

// MAIN FUNCTION
async function goToNext(direction) {
  if(!direction && counter === 1) return;
  // else if(direction && counter === 6) sendData();
  else if(direction) ++counter;
  else --counter;
  let turnOff = await enableButtons(false);
  
  if(turnOff) {
    current = $('.active-block');
    next = direction ? current.next('.add-listing-content') : current.prev(
      '.add-listing-content');
    
    // change nav
    let currentNav = $('.pagination-active');
    let nextNav = direction ? currentNav.next('li') : currentNav.prev('li');
    
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
  }
}


// NEXT BUTTON
$('.add-listing-footer .next-sq').click(function(e) {
  if($('.prev-btn').css('visibility') === 'hidden') {
    $('.prev-btn').velocity({
      opacity: 1
    }, {
      visibility: 'visible',
      duration: animationTime,
      easing: 'ease'
    });
  }
  e.stopImmediatePropagation();
  let unfilled = validate();
  if(unfilled === true) goToNext(true);
  else displayWarning(unfilled, true);
});

// PREV BUTTON
$('.add-listing-footer .prev-btn').click(function() {
  if($('.prev-btn').css('visibility') === 'visible' && counter === 2) {
    $('.prev-btn').velocity({
      opacity: 0
    }, {
      visibility: 'hidden',
      duration: animationTime,
      easing: 'ease'
    });
  }
  if($('.button-submit').css('display') !== 'none') {
    $('.button-submit').velocity({
      opacity: 0
    }, {
      display: 'none',
      duration: animationTime,
      easing: 'ease'
    });
    $('.next-sq').velocity({
      opacity: 1
    }, {
      delay: animationTime,
      duration: animationTime,
      easing: 'ease',
      display: 'flex'
    });
  }
  goToNext(false);
});

// SUBMIT BUTTON
$('.add-listing-footer .button-submit').click(function(e) {
  e.stopImmediatePropagation();
  let unfilled = validate();
  if(unfilled === true) /*goToNext(true);*/ {
    let prices = $('input').filter('[data-mask="#.##0,00"]');
    prices.each(function(i, el) {
      let price = $(el).val();
      if(price.length < 3) $(el).val(`${price},00`);
    });
    sendData();
  }
  else displayWarning([ $('.active-block').find('.error') ], false);
});