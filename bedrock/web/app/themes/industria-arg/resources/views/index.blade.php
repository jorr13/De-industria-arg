@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  
  <!--SLDER-->
  <div class="slideshow">
		<div class="tituloslider">
			<span>Productos recientes</span>
    </div>
    <div class="circulo-azul"></div>
		<ul class="slider">
      @foreach(array_slice($products_loop,0,4) as $products)
        <li>
          <div class="sliderimagen">
            <!--Esto es el thumb-->
            {!! $products['thumbnail'] !!}
          </div>
          <section class="caption">
            <h2>{!! $products['title'] !!}</h2>
            <p>{!! $products['excerpt'] !!}</p>
            <a href=" {!! $products['link'] !!}" class="boton-slider">Ver Producto</a>
          </section>
        </li>
      @endforeach
    </ul>
    <div class="padre-botones-slider">
      <div class="right">
        <span class="fa fa-chevron-right"><img src="/app/uploads/2018/08/flecha-subir.png" alt=""></span>
      </div>
      <div class="slider-item-numeros">
      <a href="">01</a>
      <a href="">02</a>
      <a href="">03</a>
      <a href="">04</a>
      </div>
      <div class="left">
        <span class="fa fa-chevron-left"><img src="/app/uploads/2018/08/flecha-bajar.png" alt=""></span>
      </div>
    </div>
	</div>
  <!--fin del slider-->
  @if(have_rows('seccion_arriba', 30))
  {{-- loop through the rows of data --}}
  @while (have_rows('seccion_arriba', 30))@php(the_row())
      <div class="primera_parte">
          <div class="contenedor-primero columns is-multiline is-12 is-paddingless" style="overflow: hidden;background-size: cover !important; height: 480px; background:url('{{ get_sub_field('img_fondo1') }}')">
            <div class="contenamarillo"></div> 
            <div class="contendos ">
            </div>
            <div class="contenedor-parrafo">
              <p class="contenido">{{ get_sub_field('text_arriba') }}</p>
            </div>
          </div>
      </div>
  @endwhile
  @else      
  @endif
<!--Categorias-->

<div class="categorias-contenedor-padre columns is-multiline is-12">

  <div class="contenedor-titulo-categorias">
    <span>Nuestros Productos</span>
  </div>
  <div class="contenedor-descrip">
    <p class="primero-parrafo">Adquiere tus productos de industria argentina</p>
    <p class="segundo-parrafo">Empresas 100% locales</p>
  </div>
  <div class="contenedor-tarjetas-padre is-multiline is-12">
  <div class="contenedor-tarjetas column is-3">
    <div class="contenedor-hijo column">
      <div class="cajita-tarjeta">
        <div class="contenedor-img-tarjeta">
          <img src="/app/uploads/2018/08/foto-producto-8.jpg" alt="">
        </div>
        <div class="contenedor-title-categoria">
          <h2 class="title-categoria">Electrodomestico</h2>
        </div>
        <div class="container-boton-categoria">
          <a href="" class="boton-categoria" id="electrodomestico">Ver productos</a>
        </div>
      </div>
    </div>
  </div>

  <div class="contenedor-tarjetas column is-3">
      <div class="contenedor-hijo column">
        <div class="cajita-tarjeta">
          <div class="contenedor-img-tarjeta">
            <img src="/app/uploads/2018/08/foto-producto-9.jpg" alt="">
          </div>
          <div class="contenedor-title-categoria">
            <h2 class="title-categoria">Construccion</h2>
          </div>
          <div class="container-boton-categoria">
            <a href="" class="boton-categoria">Ver productos</a>
          </div>
        </div>
      </div>
    </div>

    <div class="contenedor-tarjetas column is-3">
        <div class="contenedor-hijo column">
          <div class="cajita-tarjeta">
            <div class="contenedor-img-tarjeta">
              <img src="/app/uploads/2018/08/foto-producto-14.jpg" alt="">
            </div>
            <div class="contenedor-title-categoria">
              <h2 class="title-categoria">Ferreteria</h2>
            </div>
            <div class="container-boton-categoria">
              <a href="" class="boton-categoria">Ver productos</a>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="boton-categoria-ir-tienda">
    <a href="">Ir a Tienda</a>
  </div>

</div>

<div class="categori-categori">
    <div class="menu-categs-box">	
        <?php 
        $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'orderby' => 'ASC',  'parent' =>0)); //, 'exclude' => '17,77'
          foreach($wcatTerms as $wcatTerm) : 
            $wthumbnail_id = get_woocommerce_term_meta( $wcatTerm->term_id, 'thumbnail_id', true );
            $wimage = wp_get_attachment_url( $wthumbnail_id );
          ?>
          <ul>
            <li class="libreak"><?php if($wimage!=""):?><img src="<?php echo $wimage?>"><?php endif;?></li>
            <li>
              <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></a>
              <ul class="wsubcategs">
              <?php
              $wsubargs = array(
                 'hierarchical' => 1,
                 'show_option_none' => '',
                 'hide_empty' => 0,
                 'parent' => $wcatTerm->term_id,
                 'taxonomy' => 'product_cat'
              );
              $wsubcats = get_categories($wsubargs);
              foreach ($wsubcats as $wsc):
              ?>
                <li><a href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy );?>"><?php echo $wsc->name;?></a></li>
              <?php
              endforeach;
              endforeach;
              ?>  
              </ul>
            </li>

</div>



                





<!--fin de categorias-->


  <!--lo nuevo del producto-->
  <div class="primercolor columns is-multiline is-12">
    <div class="segundocolor column is-6">
      <div class="contenedor-contenido">
        <p class="contenido-tercer-color">se el primero  en recibir nuestras ofertas y promociones</p>
      </div>
        <h2>¡Suscribete!</h2> 
        <div class="contenedorcaja-input">       
          <input type="text" placeholder="Escribe tu correo electronico aqui" class="caja-texto-suscribete">
        </div>
        <div class="contenedor-ico-redes">
          <img class="ico-redes" src="app/uploads/2018/08/icon-facebook.png" alt="">
          <img class="ico-redes" src="app/uploads/2018/08/icon-instagram.png" alt="">
          <img class="ico-redes" src="app/uploads/2018/08/icon-linkedin.png" alt="">
          <img class="ico-redes" src="app/uploads/2018/08/icon-twitter.png" alt="">
          <img class="ico-redes" src="app/uploads/2018/08/icon-youtube.png" alt="">
        </div>
    </div>
  </div>
  <!--fin lo nuevo del producto-->
  <!--Empresas amigas-->
  <div class="contenedor-empresas-confian">
    <div class="contenedor-titulo-empresas-confian">
      <span class="contenedor-titulo">Empresas que confian en nosotros</span>
    </div>
    <div class="empresas-confian columns is-multiline is-paddingless is-12">
        @if(have_rows('empresas_que_confian', 49))
        {{-- loop through the rows of data --}}
        @while (have_rows('empresas_que_confian', 49))@php(the_row())
          <a href="{{ get_sub_field('dominio_img') }} "class="column is-3 ">
            <div class="img-categoria ">
              <div class="contenedorimg-confian">
                <img src="{{ get_sub_field('img_empresa') }}" alt="">
              </div>
            </div>
          </a>
        @endwhile 
        @else      
        @endif
    </div>
</div>
  <!--fin empresas amigas-->

  <!--ventajas--> 
<div class="ventajascontenedor columns is-multiline is-12">

    <span class="title-ventajas">Ventajas de comerciar con nosotros</span>

    @if(have_rows('ventajas_de_comerciar', 54))
    {{-- loop through the rows of data --}}
    @while (have_rows('ventajas_de_comerciar', 54))@php(the_row())
    <div class="contenedor-circulos column is-3">
      <div class="contenedor-contenido-ventaja column">
        <div class="cajita-contenido">
          <div class="imgseccion">
            <img src="{{ get_sub_field('img_descrip') }}" alt="">
          </div>
          <div class="contenedor-parrafo-ventaja">
            <p class="contenido-ventajas">{{ get_sub_field('descrip-ventaja') }}</p>
          </div>
        </div>
      </div>
    </div>
    @endwhile 
    @else      
    @endif
  <div class="boton-ventaja">
    <a href="">Solicita tu cotizacion</a>
  </div>
</div>

  <!--fin de ventajas-->
@endsection