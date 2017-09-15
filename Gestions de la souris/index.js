"use strict";

var rectangle = document.querySelector(".rectangle");
var bouton = document.getElementById("toggle-rectangle");

function toto() {
  rectangle.classList.toggle("toggle-rectangle");
}


function changeColor(){
  rectangle.classList.toggle("important");

}

function doubleclique(){
  rectangle.classList.toggle("good");
}

rectangle.addEventListener("dbclick", doubleclique);
rectangle.addEventListener("mouseenter", changeColor);
rectangle.addEventListener("mouseout", changeColor);
bouton.addEventListener("click", toto);
//rectangle.classList.toggle("rectangle");
