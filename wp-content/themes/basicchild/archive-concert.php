<?php 

get_header();

if( have_posts() ):
    while( have_posts() ): the_post();

    $photo = get_field('photo');
    $date_heure = get_field('date_heure');

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="<?= $photo['url']?>" alt="<?= $photo['alt']?>">
            </div>
            <div class="col-md-8">
            <a href="<?= get_the_permalink() ?>"><h3><?= get_the_title() ?></h3></a>   <!-- get_the_permalink permet de recuperer le lien permalien(l'url) du post ci-dessus: the_post -->
            <p><?= date('d/m/Y H:i', strtotime($date_heure)); ?></p>  <!-- strtotime c'est pour transformer une date en timestamp -->
            <p><?= get_the_excerpt() ?></p> <!-- recupere  un resumé/ un extrait  de la description alors que get_the_content recupere la totalite du champ appelé "contenu" -->
            </div>           
        </div>
    </div>
    
    <?php
    endwhile;
endif;

get_footer();