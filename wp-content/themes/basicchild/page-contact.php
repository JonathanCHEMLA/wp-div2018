<?php

get_header();

if( have_posts() ):

    while( have_posts() ): the_post();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Nous contacter</h2>
                <p>
                <?= do_shortcode( get_the_content() )  //si tu trouve du shortcode, execute-le! et ne m'affiche surtout pas [le code de mon shortcode]... s'il n'en trouve pas ca n'aura pas d'incidence ?>  
                </p>
            </div>
        </div>
    </div>
    <?php

    endwhile;

endif;  

get_footer();