<?php
get_header();// fonction wp qui permet de charger le header.php

if( have_posts() ): // si j'ai des posts (en locurence, ici, de type "page d'acceuil")

while( have_posts() ): the_post();  //je charge les infos du post

/* the_title(); equivaut a un echo de  get_the_title() */

get_template_part('content','zone1');
get_template_part('content','zone2');
get_template_part('content','zone3');
get_template_part('content','zone4');
get_template_part('content','zone5');

get_template_part('content','zone6');// correspondance  si on avait     get_template_part('bloc','slider');   => bloc-slider.php


endwhile;

endif;

get_footer();



?>