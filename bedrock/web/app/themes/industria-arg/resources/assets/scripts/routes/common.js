export default {
  init() {
    // JavaScript to be fired on all pages
 
      $("#boton-desplegar, #boton-ocultar").click(function(e) { 
        e.preventDefault();
          $(".nav-primary").fadeToggle();
          $(".boton-cerrar").fadeToggle();
          $(".segundo-menu").slideToggle();
      });
      $(".menu-item-163 > a").click(function(){
        $(".nav-primary").fadeIn();
        $(".boton-cerrar").fadeOut();
        $(".segundo-menu").slideUp();
        $('html, body').animate({ scrollTop: ($("#footer-enviar").offset().top) -100 }, 1500); 
      });

    //boton cargar mas
    $.getJSON( "http://de-industrias-arg.test/wp-json/wp/v2/posts?page=1", function( data ) {
      var noticias = [];
      $.each( data, function( id, title ) {
        noticias.push( "<li id='" + id + "'>" + title + "</li>" );   

      });  
      console.log(data)
      console.log(noticias);
      
        $( "<ul/>", {
          "class": "my-new-list",
          html: noticias.join(""),
        }).appendTo( "#contenedor-de-noticias" );
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
    //llamada al boton detalle
    $(".single-product .shipping-taxable .entry-summary").append("<a href='#' class='boton-consultar-precio-detalle-producto'>Consultar precio</a>");
   //llamada de modal detalle
   $(".boton-consultar-precio-detalle-producto").click(function (e) { 
    e.preventDefault();

    var titulo =  $(".entry-title").text();
    $(" #consultar-precio").fadeIn();
    $("#consultar-precio #titulo-producto").val(titulo);
    });
    $("#cerrar, .modal-background").click(function (e) { 
    e.preventDefault();
    $(" #consultar-precio").fadeOut();
    });

    //llamada del titulo en la tienda
    $(document).ready(function(){
      $(".prdctfltr_wc").before("<div class='contenedor-titulo-categorias'><span>Nuestros Productos</span></div><div class='contenedor-descrip'><p class='primero-parrafo'>Adquiere tus productos de industria argentina</p><p class='segundo-parrafo'>Empresas 100% locales</p></div>");
    });

      // JavaScript to be fired on the home page
      $(document).ready(function(){
        var imgItems = $('.slider li').length; // Numero de Slides
        var imgPos = 1;
        var i;
      
        // Agregando paginacion --
        for(i = 1; i <= imgItems; i++){
          $('.pagination').append("<li><a href='#'>"+ i +"</a></li>");
        } 
        //------------------------
      
        $('.slider li').hide(); // Ocultanos todos los slides
        $('.slider li:first').show(); // Mostramos el primer slide
        $('.pagination li:first').css({'color': '#4CC7D6'}); // Damos estilos al primer item de la paginacion
      
        // Ejecutamos todas las funciones
        $('.pagination li').click(pagination);
        $('.right span').click(nextSlider);
        $('.left span').click(prevSlider);
      
      
        setInterval(function(){
          nextSlider();
        }, 4000);
      
        // FUNCIONES =========================================================
      
        function pagination(){
          var paginationPos = $(this).index() + 1; // Posicion de la paginacion seleccionada
      
          $('.slider li').hide(); // Ocultamos todos los slides
          $('.slider li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado
      
          // Dandole estilos a la paginacion seleccionada
          $('.pagination li').css({'color': '#858585'});
          $(this).css({'color': '#4CC7D6'});
      
          imgPos = paginationPos;
      
        }
      
        function nextSlider(){
          if( imgPos >= imgItems){imgPos = 1;} 
          else {imgPos++;}
      
          $('.pagination li').css({'color': '#858585'});
          $('.pagination li:nth-child(' + imgPos +')').css({'color': '#4CC7D6'});
      
          $('.slider li').hide(); // Ocultamos todos los slides
          $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
      
        }
      
        function prevSlider(){
          if( imgPos <= 1){imgPos = imgItems;} 
          else {imgPos--;}
      
          $('.pagination li').css({'color': '#858585'});
          $('.pagination li:nth-child(' + imgPos +')').css({'color': '#4CC7D6'});
      
          $('.slider li').hide(); // Ocultamos todos los slides
          $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
        }
      });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
