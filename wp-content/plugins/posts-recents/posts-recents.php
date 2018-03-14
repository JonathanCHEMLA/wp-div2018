<?php

/*

plugin Name: Posts récents
Description: Affiche les n posts récents du ou des types choisis
Author: Jonathan
Version 1.0

*/

// 1. Ajouter un appel pour enregistrer mon shortcode
add_action('init','register_posts_function');

// 2. Déclaration du shortcode
function register_posts_function(){
    add_shortcode('recent-posts','recent_posts_function');
}

// 3. La fonction du shortcode
function recent_posts_function($params=array(),$content=null ){
    // [recent-posts nb="2" types="concert"]    
    // [recent-posts nb="4" types="post,concert"]
    $nb = $params['nb'];
    $types= explode(',',$params['types']);

    // Le nombre pourra etre 1,2,3 ou 4
    $nb_col_bootstrap= 12/$nb;

    query_posts(array(
        //'orderby'   =>'date',
        //'order'     =>'DESC',
        'orderby'   => array('post_type'=>'DESC', 'date' => 'DESC'),
        'showposts' =>$nb,
        'post_type' =>$types
    ));
    $return_string='<div class="container"><div class="row">';
    if( have_posts() ) :
        while ( have_posts() ): the_post(); //charge le post mais ne l'affiche pas. Permet juste d'utiliser derriere get_the_content, gezt_the_title...
            $return_string.='<div class="col-md-' . $nb_col_bootstrap . '">
                            <h2><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2>';
            if(get_post_type() =='concert'){
                $return_string.='<p>'.get_field('date_heure').'</p>';
            }                
            $return_string.='<p>'.get_the_excerpt().'</p>
                            </div>';
        endwhile;

    endif;

    $return_string .='</div></div>';

    wp_reset_query();
    return $return_string;

}
