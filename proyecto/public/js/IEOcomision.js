$( document ).ready(function() {

var theWindow = $(window),
   $bg = $("#bg"),
   aspectRatio = $bg.width() / $bg.height();
   function resizeBg() {
      if ((theWindow.width() / theWindow.height()) < aspectRatio)
      {
         $bg.removeClass().addClass('bgheight');
      } else {
         $bg.removeClass().addClass('bgwidth');
      }
   }
   theWindow.resize(resizeBg).trigger("resize");




	$("#tablaFirm").css('visibility','hidden');


    $('#tablaAut tbody').on('click', 'tr', function () {  
  	  if ( $(this).hasClass('selected') ) { 	
  	  	  null;
  	  }else{
  		$('tr.selected').removeClass('selected');           	        
  	 	    $(this).addClass('selected');
  	 	    $("#tablaFirm").css('visibility','inherit');

 			var id = $(this).children().eq(0).text();
 			
	 		var nombreAut = $(this).children().eq(8).text();
	 		var nombreProp = $(this).children().eq(3).text();
	 		var validado_pro = $(this).children().eq(4).text();
	 		var validado_aut = $(this).children().eq(9).text();

	 		$("#idFirm").text(id);
 				$("#nombreFirm").text(nombreProp);
	 			$('#btn_firmar').show()
 		
 		
 	}	  


});
function firmar(){

	$("#aceptar").attr('data-dismiss', 'modal');
	//realizo un update en la base de datos para aztualizar la firma
	toggleAlertSuccess();

}
function toggleAlertSuccess(){
     $(".alert").toggleClass('in out'); 
    return false; // Keep close.bs.alert event from removing from DOM
}

//FOOTER
//guardamos la función autoejecutable en una constante
const calc_footer_margin_top = (() => {
   //definimos las variables (al usar una función autoejecutable sólo se van a definir una única vez y al estar dentro de la función no quedan como variables globales)
    let user_height,
    margin_top_footer = 0,
        user_body_height;
    //devolvemos una función anónima con nuestra respuesta
    return () => {
        //la altura de la ventana del usuario en pixels
        user_height = $(window).innerHeight();
        //la altura del contenido de nuestra página en pixels, esta vez tenemos que restarle el margen superior que calculó para tener la altura real
        user_body_height = $('html').height() - margin_top_footer;
    //condición, (si la altura del contenido es menor a la altura de la ventana)
        if(user_body_height < user_height) {
        //definimos el nuevo margen superior
        margin_top_footer = user_height - user_body_height;
    }
    //añadimos con jQuery el margen superior al footer
    $('footer').css('marginTop', margin_top_footer + 'px');
    }
})();
//llamamos a la funcion cuando el documento esté cargado
$(document).ready(function(){
    calc_footer_margin_top();
});
//escuchamos si la altura de la ventana está cambiando
$(window).resize(function(){
    calc_footer_margin_top();
});


   
});


