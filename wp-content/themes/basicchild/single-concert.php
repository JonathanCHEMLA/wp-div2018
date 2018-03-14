<?php 

get_header();

if( have_posts() ):

    while ( have_posts() ): the_post();
    
    $photo= get_field('photo');
    $date_heure= get_field('date_heure');
    $salle= get_field('salle');
    $adresse= get_field('adresse');
    $prix= get_field('prix');    

    $infos_prix=get_field_object('prix');   // recupere non pas la valeur mais les PROPRIETES Du champ "prix"

    // echo "<pre>";
    //     var_dump($infos_prix);
    // echo "</pre>";
    $devise= $infos_prix['append'];  //on a appris qu'il fallait utiliser "append" grace au vardump precedent

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid" src="<?= $photo['url'] ?>" alt="<?= $photo['alt'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <h2><?=get_the_title() ?></h2>
                <p><?= date('d/m/Y H:i',strtotime($date_heure)) ?></p>
                <p><?= $salle ?></p>
                <p><?= $prix.''.$devise ?></p>
            </div>
            <div class="col-md-6"><p><?= $adresse ?></p>
            <?= do_shortcode('[map-adresse]'. str_replace(PHP_EOL,'',(strip_tags(trim($adresse) ))) .'[/map-adresse]')?>
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