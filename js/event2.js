function cambiar(){

    document.getElementById('titulo').innerHTML = '+5493516625140';
}
/* ===== Ahora voy a detectar el boton con onclick =====*/
/*======================================================*/
/*======= Ahora le agrego "onclick" y despues genero una nueva 
funcion sin nombre y sin parametros, lo unico que hace es 
llamar a la anterior funcion que habia creado a la cual llame "cambiar" ==*/
/*=====NOTA: La primer funcion de cambiar el texto no se ejecuta, hasta
que el cliente haga "onclick" en el boton con lo que se ejecuta la segunda funcion
y luego llama a la primera en donde esta cambiar */
document.getElementById('boton').onclick = function(){
cambiar();
}