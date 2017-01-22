// Button Clicks
$('#about-link').click(function(){
  console.log('about-link');

  if ($('#about-full').hasClass('is--hidden')) {
    $('#about-link').text('[minimize enriching about me section]');
    $('#about-full').removeClass('is--hidden');
  }
  else {
    $('#about-link').text('[insert enriching about me section]');
    $('#about-full').addClass('is--hidden');
  }
})
$('#skills-link').click(function(){
  if ($('#skills-full').hasClass('is--hidden')) {
    $('#skills-link').text('[minimize skills]');
    $('#skills-full').removeClass('is--hidden');
  }
  else {
    $('#skills-link').text('[insert skills here]');
    $('#skills-full').addClass('is--hidden');
  }
})

// Smooth Scroll
$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top - 75
      }, 1000);

      updateNavbar();

      return false;
    }
  }
});