<?php 

$image = get_field('z3_image_parallax');
$url_image = $image['url'];

$hauteur=get_field('z3_hauteur');

?>
</div>
</div>
<div class="container-fluid">
    <div class="row">

        <div class="img_parallax col-md-12" style="background:url(<?= $url_image ?>);height:<?= $hauteur ?>px"></div>

    </div>
</div>

