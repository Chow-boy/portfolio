"use strict";

$(function() {
  if (screen.width >= 768) {
    $('#work').mouseenter(function() {
        $("#box1").animate({marginLeft:'22%', marginTop:'200px'}, 1000);
        $("#box2").animate({marginLeft:'36%', marginTop:'200px'}, 2000);
        $("#box3").animate({marginLeft:'50%', marginTop:'200px'}, 3000);
        $("#box4").animate({marginLeft:'64%', marginTop:'200px'}, 4000);
        $("#box5").animate({marginLeft:'22%', marginTop:'500px'}, 1000);
        $("#box6").animate({marginLeft:'36%', marginTop:'500px'}, 2000);
        $("#box7").animate({marginLeft:'50%', marginTop:'500px'}, 3000);
        $("#box8").animate({marginLeft:'64%', marginTop:'500px'}, 4000);
    });
  }


   if (screen.width == 768) {
  $(function(){
    $('#spans').html("Cliquez ici!");
});
  $('span').click(function(){
    $('span').remove();
  });
}

  $('#box1').mouseover(function(){
    $('#box1').css("z-index", 1);
 });

$('#box1').mouseleave(function()
{
  $('#box1').css("z-index", 0)
});

$('#box2').mouseover(function()
{
  $('#box2').css("z-index", 2);
});

$('#box2').mouseleave(function(){
  $('#box2').css("z-index", 0)
});

$('#box3').mouseover(function(){
  $('#box3').css("z-index", 2);
});

$('#box3').mouseleave(function()
{
  $('#box3').css("z-index", 0)
});

$('#box5').mouseover(function()
{
  $('#box5').css("z-index", 2);
});

$('#box5').mouseleave(function()
{
  $('#box5').css("z-index", 0)
});

$('#box6').mouseover(function()
{
  $('#box6').css("z-index", 2);
});

$('#box6').mouseleave(function()
{
 $('#box6').css("z-index", 0)
});

$('#box7').mouseover(function(){
  $('#box7').css("z-index", 2);
  });

  $('#box7').mouseleave(function(){
    $('#box7').css("z-index", 0)
  });

  $('#box1').mouseover(function(){
    $('#box1').css("z-index", 2);
    });

$('#box1').mouseleave(function()
{
  $('#box1').css("z-index", 0)
});

});
