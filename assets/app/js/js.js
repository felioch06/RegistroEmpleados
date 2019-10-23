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
  $('#yaIngreso').addClass('hidden');
  $('#yaIngresoSalida').addClass('hidden');
  $('#noExiste').addClass('hidden');
}

var repeticion = window.setInterval("reFresh()", 7000);

