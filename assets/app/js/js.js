/*
var bannerEntrada = document.getElementById('entrada');
var bannerSalida = document.getElementById('salida');
var time = 3000;

setTimeout( function(){
    
    bannerEntrada.style.display = 'none';
    bannerSalida.style.display = 'none';


}, time);*/


function reFresh()

{
  $('#salida').addClass('hidden');
  $('#entrada').addClass('hidden');
}

var repeticion = window.setInterval("reFresh()", 5000);

