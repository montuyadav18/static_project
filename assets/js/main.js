var TIMEOUT = 6000;

var $radios; var $activeRadio; var currentIndex;
var radiosLength;

var interval = setInterval(handleNext, TIMEOUT);

function handleNext() {
  $radios = $('input[class*="slide-radio"]');
  $activeRadio = $('input[class*="slide-radio"]:checked');

  currentIndex = $activeRadio.index();
  radiosLength = $radios.length;

  $radios
    .attr('checked', false);


  if (currentIndex >= radiosLength - 1) {

    $radios
      .first()
      .click();

  } else {

    $activeRadio
      .next('input[class*="slide-radio"]')
      .click();

  }

}

function myStopFunction() {
  clearInterval(interval);
}

$('.slider').hover(function () {
  debugger;
  myStopFunction()
});

$('.slider').mouseleave(function () {
  interval = setInterval(handleNext, TIMEOUT);
});

// header js 

document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
});


