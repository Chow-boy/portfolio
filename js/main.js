"use strict";

function barreNav()
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
}

$(function (){
  $('#navigation').localscroll({
    target: 'body',
    duration: 1000,
    axis: 'y'
  });
});
