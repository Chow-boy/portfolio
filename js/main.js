"use strict";

$(function() {
  $('#work').mouseenter(function() {
      $("#box1").animate({marginLeft:'50px', marginTop:'200px'}, 1000);
      $("#box2").animate({marginLeft:'270px', marginTop:'200px'}, 2000);
      $("#box3").animate({marginLeft:'490px', marginTop:'200px'}, 3000);
      $("#box4").animate({marginLeft:'710px', marginTop:'200px'}, 4000);
      $("#box5").animate({marginLeft:'50px', marginTop:'500px'}, 1000);
      $("#box6").animate({marginLeft:'270px', marginTop:'500px'}, 2000);
      $("#box7").animate({marginLeft:'490px', marginTop:'500px'}, 3000);
      $("#box8").animate({marginLeft:'710px', marginTop:'500px'}, 4000);
  });
});


$(function(){
  $('.maquette div').mouseover(function(){
    var block = $('.carre').css({"z-index":"0"});

    switch (block) {
      case $('#box1'):
              $('#box1').css("z-index", 5);
        break;

      case $('#box2'):
              $('#box2').css("z-index", 1);
        break;

      case $('#box3'):
              $('#box3').css("z-index", 1);
        break;

      case $('#box4'):
              $('#box4').css("z-index", 1);
        break;
      case $('#box5'):
              $('#box5').css("z-index", 1);
        break;

      case $('#box6'):
              $('#box6').css("z-index", 1);
        break;

      case $('#box7'):
              $('#box7').css("z-index", 1);
        break;

      case $('#box8'):
              $('#box8').css("z-index", 1);
        break;
      default:

    }
  });
});
