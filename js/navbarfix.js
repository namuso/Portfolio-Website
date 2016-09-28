$(window).scroll(function() {
  var $header = $("header");
  var window_offset = 75 - $(window).scrollTop();
  var my_id = 'mynavbar';

  if (window_offset < 0 && document.getElementById(my_id).className.match(/(?:^|\s)not--fixed(?!\S)/)){
      console.log('is--fixed');
      document.getElementById(my_id).className = "is--fixed";
  }
  else if (window_offset >= 0 && document.getElementById(my_id).className.match(/(?:^|\s)is--fixed(?!\S)/)) {
      console.log('not--fixed');
      document.getElementById(my_id).className = "not--fixed";
  }
});