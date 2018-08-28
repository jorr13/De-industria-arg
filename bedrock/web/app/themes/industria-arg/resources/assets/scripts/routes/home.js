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
    },

  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
