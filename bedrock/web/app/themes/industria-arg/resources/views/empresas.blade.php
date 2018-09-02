{{--
  Template Name: empresas
--}}
@extends('layouts.app')

@section('content')
  @include('partials.page-header')


  @if(have_rows('titulo_empresas_confian', 49))
  {{-- loop through the rows of data --}}
      @while (have_rows('titulo_empresas_confian', 49))@php(the_row())
          <div class="contenedor-titulo-nosotros columns is-multiline is-12" style="background-image: url('{{ get_sub_field('imagen_fondo') }}'); background-repeat: no-repeat; background-size: cover; overflow: hidden; height: 400px; margin-top:6%">
              <div class="contenedor-fondo-circular column is-12">
                  <div class="contenedor-title-nosotros">
                      <h2>{{ get_sub_field('titulo_pagina_empresas') }}</h2>
                  </div>
              </div>
          </div>
      @endwhile 
  @else      
  @endif

    <!--Empresas amigas-->
    <div class="contenedor-empresas-confian">
        <div class="contenedor-titulo-empresas-confian">
          <span class="contenedor-titulo">Empresas que confian en nosotros</span>
        </div>
        <div class="empresas-confian columns is-multiline is-paddingless is-12">
            @if(have_rows('empresas_que_confian', 49))
            {{-- loop through the rows of data --}}
            @while (have_rows('empresas_que_confian', 49))@php(the_row())
              <div class="img-categoria column is-3 ">
                <a href="{{ get_sub_field('dominio_img') }}">
                  <div class="contenedorimg-confian">
                    <img src="{{ get_sub_field('img_empresa') }}" alt="">
                  </div>
                </a>
              </div>
            @endwhile 
            @else      
            @endif
        </div>
    </div>
      <!--fin empresas amigas-->


@endsection