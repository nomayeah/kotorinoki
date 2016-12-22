
$('#qtranslate-chooser li').on('click',function(){
  $('#qtranslate-chooser li').css('display', 'block');
});

$(function() {
  var isOpen = false;
  var $menu = $('#js-mobile-menu');
  var $button = $('#js-mobile-menu-button');
  function setMenu(status) {
    if (status) {
      $menu.addClass('is-open');
      $('html, body').addClass('open-mobile-menu');
    } else {
      $menu.removeClass('is-open');
      $('html, body').removeClass('open-mobile-menu');
    }
  }

  $button.on('click', function() {
    isOpen = !isOpen;
    setMenu(isOpen);
  });
  $(window).on('resize', function() {
    isOpen = false;
    setMenu(isOpen);
  });
});


var swiper = new Swiper('.swiper-container', {
    autoplay: 2500,
    speed: 1500,
    autoplayDisableOnInteraction: false,
    effect: 'fade',
    fade: {
      crossFade: true
    }
});

$('.tub-content li').addClass('dn');
$('.tub-content li:first-child').removeClass('dn');

$('.tub-sub li:nth-of-type(1)').on('click',function(){
  $('.tub-content li').addClass('dn');
  $('.tub-content li:nth-of-type(1)').removeClass('dn');
});
$('.tub-sub li:nth-of-type(2)').on('click',function(){
  $('.tub-content li').addClass('dn');
  $('.tub-content li:nth-of-type(2)').removeClass('dn');
});
$('.tub-sub li:nth-of-type(3)').on('click',function(){
  $('.tub-content li').addClass('dn');
  $('.tub-content li:nth-of-type(3)').removeClass('dn');
});


var date = new Date(),
    today = (date.getMonth() + 1) + "." + date.getDate();

if (today === '4.1') {
  console.log(4/1);
} else if (today === '10.01'){
  console.log(10/1);
} else {
  console.log('なし');
}
