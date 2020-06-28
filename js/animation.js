var animateHTML = function() {
  var elems,
      windowHeight

  var init = function() {
    elems = document.getElementsByClassName("hidden");
    windowHeight = window.innerHeight;
    _addEventHandlers();
  }

  var _addEventHandlers = function() {
      window.addEventListener("scroll", _checkPosition);
      window.addEventListener("resize", init)
  }
  var _checkPosition = function() {
    for ( var i = 0; i < elems.length; i++ ) {
      var posFromTop = elems[i].getBoundingClientRect().top;
      if ( posFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace( "hidden", "fade-in" );
      }
    }
  }

  return {
    init: init
  }
}

animateHTML().init();
