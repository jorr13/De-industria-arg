export default {
  init() {
    $('#clickelectrodomestico').click(function (e) { 
      e.preventDefault();
      $('#electrodomestico, #construccion, #contenedor-categorias').fadeOut();
      $('#electrodomestico').fadeToggle();        
    });
    $('#clickconstruccion').click(function (e) { 
      e.preventDefault();
      $('#electrodomestico, #construccion, #contenedor-categorias').fadeOut();
      $('#construccion').fadeToggle();        
    });

    $('#volver-categoria').click(function (e) { 
      e.preventDefault();
      $('#electrodomestico, #construccion, #contenedor-categorias').fadeOut();
      $('#contenedor-categorias').fadeToggle();        
    });
    
    $('#volver-categoria1').click(function (e) { 
      e.preventDefault();
      $('#electrodomestico, #construccion, #contenedor-categorias').fadeOut();
      $('#contenedor-categorias').fadeToggle();        
    });
    },

  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
