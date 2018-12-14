Current page: single.php 


<h1><?php bloginfo( "name" ) ?></h1>
<h2><?php bloginfo( "description" ) ?></h2>

<?php
    while(have_posts()){
        the_post(); ?>
            <h1><?php the_title() ?></a></h1>
            <p><?php the_content() ?></p>
       
        <?php

    }
?>