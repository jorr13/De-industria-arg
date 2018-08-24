export default {
  init() {
    // JavaScript to be fired on all pages
 
      $("#boton-desplegar, #boton-ocultar").click(function(e) { 
        e.preventDefault();
          $(".nav-primary").fadeToggle(),
          $(".boton-cerrar").fadeToggle(),
          $(".segundo-menu").slideToggle();
      });

    //llamada de modal mayorista
    $(".menu-item-162").click(function (e) { 
      e.preventDefault();
      //var email = $(this).data('email');
      $("#mayorista").fadeIn();
      //$("#registrar-usuario #email-receptor").val(email);
    });
    $("#cerrar, .modal-background").click(function (e) { 
      e.preventDefault();
      $("#mayorista").fadeOut();
    });
    //agregando boton en woocommerce para llamar a la modal
    $(document).ready(function(){
      var addId = $(".woocommerce-loop-product__title");
      addId.each(function(index, element){
      $(element).attr("id", "id-" + (index + 1));
      });
    });


    $("li.status-publish").append("<a href='#' class='boton-consultar-precio'>Consultar precio</a>");
    //llamada de modal mayorista
    $(".boton-consultar-precio").click(function (e) { 
    e.preventDefault();
    var titulo =  $(this).siblings(".woocommerce-LoopProduct-link").children(".woocommerce-loop-product__title").text();
    $(" #consultar-precio").fadeIn();
    $("#consultar-precio #titulo-producto").val(titulo);
    });
    $("#cerrar, .modal-background").click(function (e) { 
    e.preventDefault();
    $(" #consultar-precio").fadeOut();
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
      $(".menu-item-163 > a").click(function(){
        $("html, body").animate({ scrollTop: $(document).height()}, 1500);
      });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
