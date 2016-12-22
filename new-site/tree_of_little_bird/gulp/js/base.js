
$('#qtranslate-chooser li').on('click',function(){
  $('#qtranslate-chooser li').css('display', 'block');
});

$('#main-submit').on('click',function(){
  $('#action-area').toggleClass('dn');
});

var swiper = new Swiper('.swiper-container', {
    autoplay: 2500,
    autoplayDisableOnInteraction: false
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
    month = date.getMonth() + 1;
if (month <= 4 ) {
  $('.price-notice .summer').removeClass('active');
  $('.price-notice .winter').addClass('active');
  $('.price .summer').removeClass('active');
  $('.price .winter').addClass('active');
  console.log('1 - 4');
} else if (month < 5 || month < 12 ) {
  $('.price-notice .summer').addClass('active');
  $('.price-notice .winter').removeClass('active');
  $('.price .summer').addClass('active');
  $('.price .winter').removeClass('active');
  console.log('4 - 11');
} else {
  $('.price-notice .summer').removeClass('active');
  $('.price-notice .winter').addClass('active');
  $('.price .summer').removeClass('active');
  $('.price .winter').addClass('active');
  console.log('12');
}


$('#menu-btn').click(function () {
  var cls = $('#menu-btn').attr('class');
  if ( cls === 'active' ){
    $('header .sp-view').fadeOut('slow');
    $(this).addClass('none');
    $(this).removeClass('active');
    $('header h1').removeClass('fixed');
  } else {
    $('header .sp-view').fadeIn('slow');
    $(this).addClass('active');
    $(this).removeClass('none');
    $('header h1').addClass('fixed');
  }

});
