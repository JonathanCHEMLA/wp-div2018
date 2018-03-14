<?php

/*

Plugin Name: DIW(developeurIntegrateurWeb) Youtube
Description: Affiche une vidéo en 16/9 provenant de youtube ex: [youtube]RD0g9poWKKpbU[/youtube]
Author: Jonathan
Version: 1.0

*/

/* 1. Déclarer une fonction de création de Shortcode */
function ajout_shortcode_DIWYT(){
	add_shortcode('youtube','affichage_yt');
}

/* 2. Appeler cette fonction au chargement de WP */
	add_action('init','ajout_shortcode_DIWYT');

/* 3. Associer le shortcode à une fonction */
function affichage_yt($params = array(), $content =null )	
{
	$format='16by9';	
	if( isset($params['format']) )
	{
		$format = $params['format'];
	}
	
	$html= '<div class="embed-responsive embed-responsive-'. $format .'">	
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/'. $content .'"></iframe>
</div>';

return $html;
}