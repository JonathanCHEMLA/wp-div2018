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
    if ( $options = get_option('mapadresse_settings') ) 
    {
    $zoom=17;
    if ( isset($options['zoom']) )
    {
        $zoom = $options['zoom'];
    }
    if( isset($params['zoom']) )
    {
        $zoom = $params['zoom'];
    }
    $cle_api = $options['cle_api'];
    if ( !empty($cle_api) ){
    /*
        appel au script google map  :on relie notre page à googlemap
        appel à mon script map-adresse.js (fichier fourni par le prof)  :on relie notre page au fichier JS
        appel à la fonction TrouverMap(adresse,zoom)  , située dans map-adresse.js      : transmission a googlemap de ces 2 parametres
        Afficher une div avec l'id maGoogleMap   , situé aussi dans map-adresse.js      :
    */
    $retour = '
    <script src="https://maps.googleapis.com/maps/api/js?&language=fr&key='. $cle_api .'"></script>
    <script src="'. plugin_dir_url(__FILE__) . 'map-adresse.js"></script>
    <script>TrouverMap(\'' . $content . '\',' . $zoom . ')</script>
    <div id="maGoogleMap" style="height:400px;width:100%"></div>
    ';
    }else
    {
        $retour =" Clé API vide ";
    }
}
else
{
    $retour =" Clé API non configurée ";
}

return $retour;
}

/*--------------------*/
/* Réglages du plugin */
/*--------------------*/

add_action('admin_menu','mapadresse_add_admin_menu');   // ajouter une entree de menu en Back office
add_action('admin_init','mapadresse_settings_init');   // ajouter une fct de gestion des reglages

function mapadresse_add_admin_menu(){
    //pour ajouter un nouvel onglet: map adresse    qui est une entree de menu 
    add_menu_page('Map Adresse','Map Adresse','manage_options','map_adresse','mapadresse_options_page');
}

function mapadresse_settings_init() {

    register_setting('pluginPage','mapadresse_settings'); // id de page,  nom de l'option en BDD

    add_settings_section( // ajoute une section
        'mapadresse_pluginPage_section', // id de section
        'Réglages',
        'mapadresse_settings_section_callback',
        'pluginPage'
    );

    add_settings_field( // ajoute un champ dans la section
        'cle_api',
        'Clé API',
        'api_reglage_function', // fonction d'affichage du champ
        'pluginPage', // reference l'id de page
        'mapadresse_pluginPage_section' // reference l'id de section        
    );

    add_settings_field(
        'zoom',
        'Zoom par défaut',
        'zoom_reglage_function',
        'pluginPage',
        'mapadresse_pluginPage_section'
    );

}

function mapadresse_options_page()
{
    ?>
    <form action="options.php" method="post">
        <?php
            settings_fields('pluginPage');
            do_settings_sections('pluginPage');
            submit_button();            
        ?>
    </form>
    <?php
}

function mapadresse_settings_section_callback() // fonction d'affichage de la description de la section de réglage
{
    echo "Configuration de la Google Map";
}

function api_reglage_function() // fonction d'affichage du réglage lié à la clé API
{
    $cle_api_value='';
    if (  $options = get_option('mapadresse_settings') )
    {
        $cle_api_value = $options['cle_api'];
    }

    ?>
    <input type="text" size="50" name='mapadresse_settings[cle_api]' value="<?= $cle_api_value ?>">
    <?php

}

function zoom_reglage_function() // fonction d'affichage du reglage lié au zoom
{
    $zoom_value=17;
    if ( $options = get_option('mapadresse_settings') ) // get_option recupére une option de WP
    {
        $zoom_value = $options['zoom'];
    }
    ?>
    <input type="text" size="5" name='mapadresse_settings[zoom]' value="<?= $zoom_value ?>">
    <?php

}


// Ajout d'un lien réglages sur la page des extensions

add_filter('plugin_action_links_' . plugin_basename(__FILE__),'mapadresse_settings_action_links',10,2);

function mapadresse_settings_action_links($links, $file){
    
    array_unshift($links,'<a href="' .admin_url('admin.php?page=map_adresse') . '">Réglages</a>');
    
    return $links;
}