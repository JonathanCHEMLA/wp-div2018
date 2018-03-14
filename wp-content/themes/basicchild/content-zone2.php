<?php

$texte_gauche = get_field('z2_texte_gauche');
$texte_droite= get_field('z2_texte_droite');

?>

<div class="container">
    <div class="row">
        <div class="col-md-6 text-justify"><p><?= $texte_gauche ?></p></div>
        <div class="col-md-6 text-justify"><p><?= $texte_droite ?></p></div>
    </div>
</div>