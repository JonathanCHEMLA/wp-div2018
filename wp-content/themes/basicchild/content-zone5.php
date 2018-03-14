<?php   //ATTENTION: NE PAS OUBLIER "PHP" apres <?

$vignettes = array();
$vignettes[] = get_field('z5_vignette_1');  //ATTENTION: NE PAS METTRE LE Z en majuscule, car on avait enregistré précedemment le z en minuscule
$vignettes[] = get_field('z5_vignette_2');
$vignettes[] = get_field('z5_vignette_3');
$vignettes[] = get_field('z5_vignette_4');

?>

<div class="container">
    <div class="row">
    <?php
        foreach( $vignettes as $indice => $valeur ):    // ne pas mettre d'espace, dans les if, foreach... ca plante pas le code mais pour le referncement bootstrap c'est pas bien vu. 
            ?>
            <div class="col-md-3">
                <img class="img-fluid rounded-circle" src="<?= $valeur['url']?>" alt="<?=$valeur['alt']?>">    <!-- img-fluid c'est pour que l'image soit responsive -->
                <div class="caption text-center">
                    <p><?= $valeur['caption']?></p>
                </div>
            </div>
        <?php
        endforeach;
    ?>

    </div>
</div>