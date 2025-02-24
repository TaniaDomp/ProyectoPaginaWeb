
/*Almacenamiento de slider y elementos en constantes*/
const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

/*Cambiar imagenes al principio para que sea infinito*/
slider.insertAdjacentElement('afterbegin', sliderSectionLast);

/*slider margin sirve para visualizar las imagenes en el orden donde las pusimos*/
/*Funcion Next sirve para el boton siguiente/derecha y el Prev para el boton atras/izquierda*/
/*con .style estamos haciendo las animaciones de las imagene: -200% mueve las imagenes, 0.5s es el tiempo de movimiento*/
/*la segunda funcion ()serTimeout nos sirve para mover las imagenes que no se ven, con el fin de hacer el blucle. Esto se hace despues de la primera animacion*/
function Next() {
  let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
  slider.style.marginLeft = "-200%";
  slider.style.transition = "all 0.5s";
  setTimeout(function(){
    slider.style.transition = "none";
    slider.insertAdjacentElement('beforeend', sliderSectionFirst);
    slider.style.marginLeft = "-100%";
  }, 500);
}
function Prev() {
  let sliderSection = document.querySelectorAll(".slider__section");
  let sliderSectionLast = sliderSection[sliderSection.length -1]; //acomoda las imagenes
  slider.style.marginLeft = "0"; //esto se cambia para poder mover los margenes
  slider.style.transition = "all 0.5s";
  setTimeout(function(){
    slider.style.transition = "none";
    slider.insertAdjacentElement('afterbegin', sliderSectionLast);
    slider.style.marginLeft = "-100%";
  }, 500);
}
/*manda la instruccion que al hacer clic se ejecutaran las funciones creadas anteriormente*/
btnRight.addEventListener('click', function(){
  Next();
});
btnLeft.addEventListener('click', function(){
  Prev();
});
/*permite que el slider sea automatico, 5000 es el tiempo en milisegundos*/
setInterval(function(){
  Next();
}, 5000);
