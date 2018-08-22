<header class="banner">
  <div class="primer-menu">
    <a class="brand" href="{{ home_url('/') }}"><img class="imgmenu" src="app/uploads/2018/08/DIA-logo-02.png" alt=""></a>
    <a href="#" id="boton-ocultar" class="boton-cerrar">X</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      <a href="#" id="boton-desplegar"><img class="boton-menu" src="app/uploads/2018/08/hamburguesa1.png" alt=""></a>
    </nav>
  </div>
  

  <div class="segundo-menu otro-menu">
    <nav class="nav-segundo">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <ul class="ico-header-redes">
      <a href=""><li class="ico-contenedor-redes"><img class="ico-redes-blanco" src="app/uploads/2018/08/icon-facebook-blanco.png" alt=""></li></a>
      <a href=""><li class="ico-contenedor-redes"><img class="ico-redes-blanco" src="app/uploads/2018/08/icon-instagram-blanco.png" alt=""></li></a>
      <a href=""><li class="ico-contenedor-redes"><img class="ico-redes-blanco" src="app/uploads/2018/08/icon-linkedin-blanco.png" alt=""></li></a>
      <a href=""><li class="ico-contenedor-redes"><img class="ico-redes-blanco" src="app/uploads/2018/08/icon-twitter-blanco.png" alt=""></li></a>
      <a href=""><li class="ico-contenedor-redes"><img class="ico-redes-blanco" src="app/uploads/2018/08/icon-youtube-blanco.png" alt=""></li></a>
    </ul>
  </div>
</header>
