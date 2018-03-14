<?php

$texte_gauche = get_field('texte');


?>

<div class="container">
    <div class="row">
        <div class="col-md-6 text-justify"><p><?= $texte_gauche ?></p></div>
        <div class="col-md-6 text-justify">
        <?php
             dynamic_sidebar('sidebar-perso');
        ?>    
        </div>
    </div>
</div>

<?php
/*
1. Ajouter un champ dans le groupe "zones de la page d'accueil"
2. Créer un fichier de template zone 6
3. l'integrer à front-page
4. ajouter du texte dans cette zone en modifiant le contenu de la page d'accueil.
*/


/*
1. Ajouter un champ dans le groupe "zones de la page d'accueil"
    //  ACF/ajouter(celui du bas)/lui attribuer le titre, le nom et le type puis enregistrer


2. Créer un fichier de template zone 6
    //  c'est le code que j'ai créé dans cette page, ci dessus

3. l'integrer à front-page
    //  taper get_template_part('content','zone6');  dans la page front-page.php

4. ajouter du texte dans cette zone en modifiant le contenu de la page d'accueil.
    //  Pages/Accueil/ scroller la page jusqu'en bas, remplir le contenu de la zone de texte correspondant à l'etape 1 et enregistrer
*/


?>