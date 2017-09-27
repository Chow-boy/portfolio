"use strict";

/*function barreNav()
{
var positionElementInPage = $('#navigation').offset().top;
$(window).scroll(
  function(){
  if($(window).scrollTop() &gt;= positionElementInPage){
    $('#navigation').addClass("floatable");
  }
  else
    {
      $('nav').removeclass("floatable");
    }
});
}*/


window.onload = fuction () {
  var position = 0;
  var rectangle = getElementById('divs');
  var t = setInterval(move, 10);

  function move(){
    if (position >= 150) {
      clearInterval(t);
    }
    else{
      postion += 1;
      rectangle.style.left = position+'px';
    }
  }
}
