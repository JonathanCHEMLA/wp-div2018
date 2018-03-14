</div>  <!-- les 2 div fermes servent a mettre notre footer sur toute la largeur-->
</div>
<footer>

    <div class="container">
        <div class="row">
            <div class="col-md-12 monmenufooter text-center">
                <ul class="nav nav-pills nav-justified">
                <?php

                    $items= wp_get_nav_menu_items('MenuFooter');
                    foreach ($items as $index => $item):
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $item->url ?>">
                            <?= $item->title; ?>
                            </a>
                        </li>
                    <?php
                    endforeach;

                    
                    //ce code ci dessous fonctionne aussi et il est relié au css de style.css
                    // wp_nav_menu(
                    //     array(
                    //         //on lui dit ici qu'on veut qu'il affiche le menufooter dans le bas de notre page WP.
                    //         'theme_location'=>'MenuFooter',
                    //         'menu'=>'MenuFooter',   //celui qu'on a tapé dansle back
                    //         'menu_id' => 'menufooter',    //celui qu'on a tape dans function.php
                    //         'container'=>false,
                    //         'menu_class'=>'nav nav-pills',
                    //         'items_wraps'=>'<ul class="%2$s">%3$s</ul>'

                    //     )
                    // );
                ?>
                </ul>
            </div>
        </div>
    </div>    

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center monfooter">
            <p>&copy; Copyright 2018 - Jonathan CHEMLA - Tous droits réservés</p> 

            </div>
        </div>
    </div>
</footer>
<?php
wp_footer();    //fonction wp qui permet d'afficher la barre noir d'admin du haut du front, la ou c est ecrit: site de dev, personnalier, creer, modfifer page... 


?>