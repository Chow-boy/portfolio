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

var div;
var button;


function onclickbutton()
{
  div.classList.toggle('projet');
}

div =  document.querySelector('.hide');
button = document.getElementById('bouton');


button.addEventListener('click', onclickbutton);
