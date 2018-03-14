<?php 

get_header();

if( have_posts() ):

    while ( have_posts() ): the_post();
    
    $photo= get_field('photo');
    $annee_de_parution= get_field('annee_de_parution');
    $acteurs= get_field('acteurs');
    $realisateur= get_field('realisateur');
 
    
    $prefixe_acteurs=get_field_object('acteurs');  
    $leprefixeacteurs= $prefixe_acteurs['prepend'];


    $prefixe_realisateur=get_field_object('realisateur');  
    $leprefixerealisateur= $prefixe_realisateur['prepend'];

    // echo "<pre>";
    //     var_dump($infos_prix);
    // echo "</pre>";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid" src="<?= $photo['url'] ?>" alt="<?= $photo['alt'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <h2><?=get_the_title() ?></h2>
                <p><?= date('d/m/Y',strtotime($annee_de_parution)) ?></p>
                <p><?= $leprefixeacteurs. " " .$acteurs ?></p>
                <p><?= $leprefixerealisateur. " " .$realisateur ?></p>
            </div>
        </div>    

        <div class="row">
            <div class="col-md-12 text-justify">
                <p> <?= get_the_content() ?></p>
            </div>
        </div>
    </div>

    <?php
    endwhile;
endif;

get_footer();




