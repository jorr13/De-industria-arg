<?php

namespace App;

use Roots\Sage\Container;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array  $parameters
 * @param Container $container
 * @return Container|mixed
 */

$categoria = $_POST['categoria1'];

$electrodomestico = get_posts([
    'post_type' => 'product',
    'product_cat' => $categoria,
]);

return array_map(function ($post) {
    return [  
        'price' => get_post_meta( $post->ID, '_regular_price', true),
        'sellprice' => get_post_meta( $post->ID, '_regular_price', true),
        'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
        'title' => get_the_title($post->ID),
        'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
        'link' => get_permalink($post->ID),
        'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
        'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
        'tags' => get_tags($post->ID)    
    ];
}, $electrodomestico);


foreach($electrodomestico_loop as $electrodomestico){
?>
<div class="contenedor-tarjetas column is-3">
  <div class="contenedor-hijo column">
    <div class="cajita-tarjeta">
      <div class="contenedor-img-tarjeta">
        <?php echo $electrodomestico['thumbnail']; ?>
      </div>
      <div class="contenedor-title-categoria">
        <h2 class="title-categoria"> <?php echo $electrodomestico['title'];?></h2>
      </div>
      <div class="container-boton-categoria">
          <p class="producto-precio">Precio referencial: <strong>$ <?php echo $electrodomestico['price'];?> </strong></p>
        <a href="<?php echo $electrodomestico['link'];?>" class="boton-categoria" id="ferreteria">Ver producto</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>