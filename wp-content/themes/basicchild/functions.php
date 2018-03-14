<?php

/*
Ajouter une feuille CSS
        un script JS
        
        une zone de menu perso
        une zone de widget perse

        chaque action wp possede un nom: init, terme_loded... 
        hook(cours paypal) : on s'accroche entre 2 foncitons et on intercale des fonctions, avant ou apres, mais pas au milieu meme d'une fonction. 

*/        
// 1-2 Ajouter feuilles CSS et scripts
// nom du hook: 'wp_enqueue_scripts'. On insere notre fonction 'custom_style_scripts' à la suite de cette fonction la
add_action('wp_enqueue_scripts','custom_style_scripts');
// add_action(hook, nom_de_la_fct_perso)

function custom_style_scripts(){
    //Feuilles CSS
        //Feuille du theme parent:
        wp_enqueue_style('parent-style',get_template_directory_uri() . '/style.css');//ajout de 2 feuilles de styles: parent et enfant
        //get_template_directory_uri donne le chemin à la "racine de mon theme parent" ; eh oui! puisque c'est "template"! -  "template = theme parent"

        //Feuille du theme enfant:
        wp_enqueue_style('child-style',get_stylesheet_directory_uri() . '/style.css');//get_stylesheet_directory_uri donne le chemin à la "racine de mon theme enfant"'

    //Script
    wp_enqueue_script('jquery-cdn','https//code.jquery.com/jquery-3.3.1.min.js');
    /* si vous aviez un script perso, nommé fichier_perso.js, dans le repertoire JS du theme, on tapera:  wp_enqueue_script('perso-js','get_stylesheet_directory_uri() . '/js/fichier_perso.js');   perso-js c'est le id dans la balise <script>*/

}

//3. Menu Perso => cf. footer.php

//si la function existe:
if( function_exists('register_nav_menus') ){    // va créer la case "Menu du bas" dans le back, dans Apparences,menus
    //on enregistre un nouveau menu: "menufooter" et il aura comme libellé "Menu du bas"
    register_nav_menus( array(
        'menufooter' =>'Menu du bas')
    
    );

}

//4. Zone à Widgets perso

if( function_exists('register_sidebar') ){  

    register_sidebar( array(
        'name' => 'Ma zone à widgets Perso',
        'id' => 'sidebar-perso',
        'before_widget' => '<div>', // pour definir ce qui est avant(par defaut c'est li)
        'after_widget' => '</div>'

    )
    );

}