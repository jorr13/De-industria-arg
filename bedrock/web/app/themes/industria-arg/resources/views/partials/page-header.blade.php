<div class="page-header">
        <div class="contenedor-title-post-detalle">
            <h1>{!! App::title() !!}</h1>
        </div>
        
    @php
    
       the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);
       
    @endphp
    

</div>

