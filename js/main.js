
window.addEventListener('load', function(){

  var canvas = document.getElementById('canvas');
  var ctx = canvas.getContext('2d');
  var greenOffice = new Image();
  greenOffice.src = 'image/greenoffice.png';
  var creasoul = new Image();
  creasoul.src = 'image/creasoul.png';
  var cadrenoir = new Image();
  cadrenoir.src = 'image/cadrenoir.png';
  var carnet = new Image();
  carnet.src = 'image/selcteurphoto.png';
  var trad = new Image();
  trad.src = 'image/trad.png';



  function draw(){
    ctx.drawImage(greenOffice, 350, 25, 200, 200);
    ctx.drawImage(creasoul, 580, 25, 200, 200);
    ctx.drawImage(cadrenoir, 810, 25, 200, 200);
    ctx.drawImage(cadrenoir, 1050, 25, 200, 200);
    ctx.drawImage(carnet, 350, 250, 200, 200);
    ctx.drawImage(cadrenoir, 580, 250, 200, 200);
    ctx.drawImage(trad, 810, 250, 200, 200);
    ctx.drawImage(cadrenoir, 1050, 250, 200, 200);

      canvas.addEventListener('click', onClickPhotos);
  }

    function onClickPhotos(event){

      var xyrect = canvas.getBoundingClientRect();
        var x = Math.round(event.clientX - xyrect.left);
        var y = Math.round(event.clientY - xyrect.top);

        
      if((x >= 350 && x <= 550) && (y >= 25 && y <= 225)){
          document.location.href="GreenOffice/index.html";
        }

      if((x >= 580 && x <= 780) && (y >= 25 && y <= 225)){
            document.location.href="Creasoul/index.html";
          }

      if((x >= 810 && x <= 1010) && (y >= 25 && y <= 225)){
            document.location.href="#";
          }

      if((x >= 1050 && x <= 1250) && (y >= 25 && y <= 225)){
            document.location.href="#";
          }

      if((x >= 350 && x <= 550) && (y >= 250 && y <= 450)){
            document.location.href="selectphoto/index.html";
          }

      if((x >= 580 && x <= 780) && (y >= 250 && y <= 450)){
            document.location.href="#";
          }

      if((x >= 810 && x <= 1010) && (y >= 250 && y <= 450)){
            document.location.href="traducteur/index.php";
          }

      if((x >= 1050 && x <= 1250) && (y >= 250 && y <= 450)){
            document.location.href="#";
          }
    }

  draw();

});
