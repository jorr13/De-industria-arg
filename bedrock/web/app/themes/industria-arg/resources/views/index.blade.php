@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  
  <!--SLDER-->
  <div class="slideshow">
		<div class="tituloslider">
			<span>Productos recientes</span>
    </div>
    <div class="circulo-azul"></div>
    <div class="circulo-blanco"></div>

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
              <p class="contenido-primero">{{ get_sub_field('text_arriba') }}</p>
            </div>
          </div>
      </div>
  @endwhile
  @else      
  @endif
<!--Categorias-->
<div class="contenedor-categoria">
<div class="categorias-contenedor-padre columns is-multiline is-12" id="contenedor-categorias">

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
          <a href="" class="boton-categoria" id="clickelectrodomestico">Ver productos</a>
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
            <a href="" class="boton-categoria" id="clickconstruccion">Ver productos</a>
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
              <a href="" class="boton-categoria" id="ferreteria">Ver productos</a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<!--electrodomestico-->
  <div class="contenedor-padre-producto-categoria columns is-multiline is-12" id="electrodomestico" style="display:none;">
    <div class="header-categoria-producto">
      <span class="titulo-categoria-producto">Electrodomestico</span>
      <a href="" class="volver-cate" id="volver-categoria">Volver a categoria</a>
    </div>
    @foreach(array_slice($electrodomestico_loop,0,4) as $electrodomestico)
      <div class="contenedor-productos column is-3">
        <div class="contenedor-producto-hijo">
          <div class="cajita-contenido-producto">
          <div class="imgproducto">
            {!! $electrodomestico['thumbnail'] !!}
          </div>
            <div class="contenedor-titulo-producto">
              <p class="titulo-producto-categoria">{!! $electrodomestico['title'] !!}</p>
            </div>
            <div class="contenedor-boton-producto-categoria">
              <p class="producto-precio">Precio referencial: <strong>${!! $electrodomestico['price'] !!}</strong></p>
              <a href="{!! $electrodomestico['link'] !!}" class="boton-producto-categoria" >Ver producto</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
<!--electrodomestico-->
<!--Construccion-->
  <div class="contenedor-padre-producto-categoria columns is-multiline is-12 " id="construccion" style="display:none;">
    <div class="header-categoria-producto">
      <span class="titulo-categoria-producto">Electrodomestico</span>
      <a href="" class="volver-cate" id="volver-categoria1">Volver a categoria</a>
    </div>
    @foreach(array_slice($construccion_loop,0,4) as $construccion)
      <div class="contenedor-productos column is-3">
        <div class="contenedor-producto-hijo">
          <div class="cajita-contenido-producto">
          <div class="imgproducto">
            {!! $construccion['thumbnail'] !!}
          </div>
            <div class="contenedor-titulo-producto">
              <p class="titulo-producto-categoria">{!! $construccion['title'] !!}</p>
            </div>
            <div class="contenedor-boton-producto-categoria">
              <p class="producto-precio">Precio referencial: <strong>${!! $construccion['price'] !!}</strong></p>
              <a href="{!! $construccion['link'] !!}" class="boton-producto-categoria" >Ver producto</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  <div class="boton-categoria-ir-tienda">
    <a href="/shop/">Ir a Tienda</a>
  </div>
  
</div>
<!--construccion-->

<!--fin de categorias-->


  <!--lo nuevo del producto-->
  <div class="primercolor columns is-multiline is-12">
    <div class="segundocolor otraclase">
        <p class="contenido-tercer-color">se el primero  en recibir nuestras ofertas y promociones</p>
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
        @php($empresas = get_field('empresas_que_confian', 49))
        @if($empresas)
        @foreach (array_slice($empresas,0,8) as $empresa)
        <div class="img-categoria column is-3 ">
          <a href="{{ $empresa['dominio_img'] }}">
            <div class="contenedorimg-confian">
              <img src="{{ $empresa['img_empresa'] }}" alt="">
            </div>
          </a>
        </div>
        @endforeach
        @endif
    </div>
    <div class="boton-categoria-ir-tienda">
      <a href="/clientes/">Ir a clientes</a>
    </div>
  </div>
  <!--fin empresas amigas-->

  <!--ventajas--> 
<div class="ventajascontenedor columns is-multiline is-12">
  <div class="contenedor-titulo-de-circulo">
    <span class="title-ventajas">Ventajas de comerciar con nosotros</span>
  </div>
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