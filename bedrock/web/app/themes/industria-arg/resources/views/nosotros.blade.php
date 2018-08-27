{{--
  Template Name: nosotros
--}}
@extends('layouts.app')

@section('content')
  @include('partials.page-header')




  @if(have_rows('primera_parte', 67))
  {{-- loop through the rows of data --}}
  @while (have_rows('primera_parte', 67))@php(the_row())
  <div class="contenedor-titulo-nosotros columns is-multiline is-12" style="background-image: url('{{ get_sub_field('imagen_titulo_primera') }}'); background-repeat: no-repeat; background-size: cover; overflow: hidden; height: 400px; margin-top:6%">
    <div class="contenedor-fondo-circular column is-12">
        <div class="contenedor-title-nosotros">
            <h2>Nosotros</h2>
        </div>
    </div>
</div>

<div class="parte-uno-nosotros columns is-multiline is-12">
    <div class="contenedor-img-parte-uno">
        <img src="{{ get_sub_field('imagen_primera_parte') }}" alt="">
    </div>
    <div class="contenedor-texto-parte-uno">
        <h2>{{ get_sub_field('titulo_primera_parte') }}</h2>
        <p>{{ get_sub_field('descripcion_primera_parte') }}</p>
    </div>
</div>
  @endwhile 
  @else      
  @endif
  
  @if(have_rows('ventajas', 67))
  {{-- loop through the rows of data --}}
  @while (have_rows('ventajas', 67))@php(the_row())
  <div class="parte-dos-ventajas-nosotros columns is-multiline is-12">
    <div class="parte-ventajas  column is-6">
        <h2>{{ get_sub_field('titulo_de_ventajas') }}</h2>
        <p>{{ get_sub_field('descripcion_de_ventaja') }}</p>
    </div>

    <div class="cada-ventaja-nosotros column is-6">
        @if(have_rows('circulo_de_ventaja', 67))
        {{-- loop through the rows of data --}}
        @while (have_rows('circulo_de_ventaja', 67))@php(the_row())
        <div class="contenedor-circulos column is-5">
          <div class="contenedor-contenido-ventaja ">
                <div class="cajita-contenido">
                <div class="imgseccion">
                    <img src="{{ get_sub_field('img_circulo') }}" alt="">
                </div>
                </div>

            </div>
            <div class="contenedor-parrafo-ventaja">
                <p class="contenido-ventajas">{{ get_sub_field('titulo_del_circulo') }}</p>
            </div>
        </div>
        @endwhile 
        @else      
        @endif
    </div>
</div>

  @endwhile 
  @else      
  @endif

  @if(have_rows('tercera_parte', 67))
  {{-- loop through the rows of data --}}
  @while (have_rows('tercera_parte', 67))@php(the_row())

    <div class="tercera-parte-nosotros ">
        <h2>{{ get_sub_field('titulo-tercera-parte') }}</h2>
        <p>{{ get_sub_field('contenido_tercera_parte') }}</p>
        <div class="contenedor-padre-img-nosotros">
            <div class="contenedor-img-circular">
                <img src="{{ get_sub_field('imagen_tercera_parte') }}" alt="">
            </div>
        </div>
    </div>

  @endwhile 
  @else      
  @endif

@endsection