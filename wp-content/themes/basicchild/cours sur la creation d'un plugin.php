Shortcode simple

[nom_shortcode nomchamp1="valeur1" nomchamps2="valeur2"] 	//nomchamp1 c 'est les parametre du shortcode.
params : nomchamps1, nomchamps2					//ils ne sont pas optionels


/////////////////////////////////////////////////////////////////////////////////
Shortcode avancé

[nom_shortcode nomchamp="valeur"] Contenu_ici [/nom_shortcode]	
params : nomchamp
content : Contenu ici


add_shortcode('nom_shortcode','fonction_du_shortcode');

function fonction_du_shortcode($params = array(), $content=null)
{
	/* code */
}


// explication:
	//content=null : on lui attribue une valeur par defaut(null), de facon a ce que si "Contenu_ici" n'est pas renseigné, 
la function ne va pas planter.
	// $params = array(): on lui attribue une valeur par defaut (array()), ainsi, si "nomchamp" n'est pas renseigné,
la function ne va pas planter.


//////////////////////////////////////////////////////////////////////////////////



Exemple :
si on faisait un shorcode qui affichait la vidéo youtube à partir d'un id
[youtube]girjgiojr557[/youtube]
Les deux ouvertures/fermeture de shortcode correspondent à du HTML préfait dans un plugin

do_shortcode('[youtube]' . $var . '[/youtube]')
//un shortcode peut être réutilisé dans wordpress

//////////////////////////////////////////////////////////////////////////////////////////
[map-adresse zoom="17"][/map-adresse]

