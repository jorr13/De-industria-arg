export default {
  init() {
    // JavaScript to be fired on all pages
    $(document).ready(function(){
      $("#boton-desplegar").click(function(){
          $(".nav-primary").css("display", "none"),
          $(".boton-cerrar").css("display", "block"),
          $(".segundo-menu").slideToggle();
      });
    });
    $(document).ready(function(){
      $("#boton-ocultar").click(function(){
          $(".segundo-menu").slideToggle(),
          $(".boton-cerrar").css("display", "none"),
          $(".nav-primary").css("display", "block");
      });
    });



      // JavaScript to be fired on the home page
      $(document).ready(function(){
        var imgItems = $('.slider li').length; // Numero de Slides
        var imgPos = 1;
      
        // Agregando paginacion --
  
        //------------------------
      
        $('.slider li').hide(); // Ocultanos todos los slides
        $('.slider li:first').show(); // Mostramos el primer slide
        $('.pagination li:first').css({'color': '#CD6E2E'}); // Damos estilos al primer item de la paginacion
      
        // Ejecutamos todas las funciones
        $('.pagination li').click(pagination);
        $('.right span').click(nextSlider);
        $('.left span').click(prevSlider);
      
      
        setInterval(function(){
          nextSlider();
        }, 1000000);
      
        // FUNCIONES =========================================================
      
        function pagination(){
          var paginationPos = $(this).index() + 1; // Posicion de la paginacion seleccionada
      
          $('.slider li').hide(); // Ocultamos todos los slides
          $('.slider li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado
      
          // Dandole estilos a la paginacion seleccionada
          $('.pagination li').css({'color': '#858585'});
          $(this).css({'color': '#CD6E2E'});
      
          imgPos = paginationPos;
        }
        function nextSlider(){
          if( imgPos >= imgItems){imgPos = 1;} 
          else {imgPos++;}
      
          $('.pagination li').css({'color': '#858585'});
          $('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});
      
          $('.slider li').hide(); // Ocultamos todos los slides
          $('.slider li').removeClass('active'); // Ocultamos la clase de todos los slides
          $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
          $('.slider li:nth-child('+ imgPos +')').addClass('active'); // Mostramos la clase en el item seleccionado
        }
      ////////////////////
        function prevSlider(){
          if( imgPos <= 1){imgPos = imgItems;} 
          else {imgPos--;}
      
          $('.pagination li').css({'color': '#858585'});
          $('.pagination li:nth-child(' + imgPos +')').css({'color': '#CD6E2E'});
      
          $('.slider li').hide(); // Ocultamos todos los slides
          $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
        }
      });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
