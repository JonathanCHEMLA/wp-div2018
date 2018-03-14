<?php

/*

Plugin Name: Map Adresse
Description: Retrouve la map à partir d'une adresse
Author: Jonathan
Version: 1.0

*/

// 1. Enregistrer notre nouveau shortcode. Pour cela, appeler la fonction de création de shortcode
add_action('init','register_shortcode_mapadresse' );

// 2.fonction qui enregistre le shortcode
function register_shortcode_mapadresse()
{
    add_shortcode('map-adresse','map_adresse_function');
}

// 3. Fonction relativeau shortcode
function map_adresse_function( $params=array(), $content= null )
{
    var_dump($params);
    var_dump($content);
}