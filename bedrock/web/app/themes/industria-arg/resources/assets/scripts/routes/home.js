export default {
  init() {
    $('#clickelectrodomestico').click(function (e) { 
      e.preventDefault();
      $('#electrodomestico, #construccion, .contenedor-tarjetas-padre').fadeOut();
      $('#electrodomestico').fadeToggle();        
    });
    $('#clickconstruccion').click(function (e) { 
      e.preventDefault();
      $('#electrodomestico, #construccion, .contenedor-tarjetas-padre').fadeOut();
      $('#construccion').fadeToggle();        
    });

    $('#volver-categoria').click(function (e) { 
      e.preventDefault();
      $('#electrodomestico, #construccion, .contenedor-tarjetas-padre').fadeOut();
      $('.contenedor-tarjetas-padre').fadeToggle();        
    });
    
    $('#volver-categoria1').click(function (e) { 
      e.preventDefault();
      $('#electrodomestico, #construccion, #contenedor-tarjetas-padre').fadeOut();
      $('.contenedor-tarjetas-padre').fadeToggle();        
    });

    //dinamisando categorias :)
//recibimos el evento del boton con las variables
$(".verproducto-categori").click(function (e) {
  e.preventDefault();
  var categoria =  $(this).siblings(".contenedor-prueba").children(".tituloquefrao").text();
  $.post("http://de-industrias-arg.test/app/themes/industria-arg/app/productos-home.php", {
    categoria1: categoria,
  }, function (data) {
    $("#returnmessage").append(data); // Append returned message to message paragraph.
  });
});
    },

  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
