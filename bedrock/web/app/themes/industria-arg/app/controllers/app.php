<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    //para traer los productos al slider    
    //Controlador para los productos

    function productsLoop()
    {
        $products = get_posts([
            'post_type' => 'product',

        ]);
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'excerpt' => apply_filters( 'the_excerpt', get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID)    
            ];
        }, $products);
    }
    
    //cada unos de los productos por categoria
//electrodomestico

function electrodomesticoLoop()
{
    $electrodomestico = get_posts([
        'post_type' => 'product',
        'product_cat' => 'electrodomestico',
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
}
//categorias


}

