var sections = [];

function getSections() {
  sections = [];

  if ($('#about').length) {sections.push('#about');}
  if ($('#experience').length) {sections.push('#experience');}
  if ($('#portfolio').length) {sections.push('#portfolio');}
  if ($('#contact').length) {sections.push('#contact');}
}

$(window).scroll(function() {
  var window_offset = 75 - $(window).scrollTop();
  var nav_id = '#mynavbar';
  var head_id = '#placeholder';

  if (window_offset < 0 && $(nav_id).hasClass('not--fixed')){
      console.log('is--fixed');

      $(nav_id).removeClass('not--fixed');
      $(nav_id).addClass('is--fixed');
      $(head_id).removeClass('not--fixed');
      $(head_id).addClass('is--fixed');
  }
  else if (window_offset >= 0 && $(nav_id).hasClass('is--fixed')) {
      console.log('not--fixed');

      $(nav_id).removeClass('is--fixed');
      $(nav_id).addClass('not--fixed');
      $(head_id).removeClass('is--fixed');
      $(head_id).addClass('not--fixed');
  }

  updateNavbar();
});

function updateNavbar() {
  getSections();

  // Highlight sections appropriately
  for (var j = 0; j < sections.length; j++) {
    if ($(window).scrollTop() >= $(sections[j]).offset().top - 250 && (j == sections.length - 1 || $(window).scrollTop() < $(sections[j+1]).offset().top - 250)) {
      $(sections[j]+'-nav').addClass("current-section");
    } 
    else {
      $(sections[j]+'-nav').removeClass("current-section");
    }
  }

}
