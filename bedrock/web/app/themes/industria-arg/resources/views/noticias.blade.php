{{--
  Template Name: noticias
--}}
@extends('layouts.app')

@section('content')
  @include('partials.page-header')
    @if(have_rows('contenido_del_titulo', 155))
    {{-- loop through the rows of data --}}
        @while (have_rows('contenido_del_titulo', 155))@php(the_row())
            <div class="contenedor-titulo-nosotros columns is-multiline is-12" style="background-image: url('{{ get_sub_field('imagen_fondo_noticias') }}'); background-repeat: no-repeat; background-size: cover; overflow: hidden; height: 400px; margin-top:6%">
                <div class="contenedor-fondo-circular column is-12">
                    <div class="contenedor-title-nosotros">
                        <h2>{{ get_sub_field('titulo_de_noticias') }}</h2>
                    </div>
                </div>
            </div>
        @endwhile 
    @else      
    @endif
<div id="contenedor-de-noticias" class="contenedor-noticias columns is-multiline is-12">
    {{-- @foreach(array_slice($posts_loop,0,4) as $posts)
    <div class="containerpost column is-9">
      <div class="img-container">
      <!--Esto es el thumb-->
      {!! $posts['thumbnail'] !!}
      </div>
      <div class="posts-link">
      <div class="contenido">
        <h4 class="titleposts posts-title">
        <!--Esto es el titulo-->
        {!! $posts['title'] !!}</h4>
        <p class="excerpt posts-excerpt">
        <!--esto es el excerpt-->
        {!! $posts['excerpt'] !!}</p>
        <a href="{!! $posts['link'] !!}" class="leer-mas">leer mas</a>
      </div>
    </div>
    </div>   
    @endforeach --}}
    <a href="" class="">Mostrar mas</a>
</div>




@endsection