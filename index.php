This is our custom theme. Current page: index.php

<h1><?php bloginfo( "name" ) ?></h1>
<h2><?php bloginfo( "description" ) ?></h2>

<?php
    while(have_posts()){
        the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <p><?php the_excerpt() ?></p>
            <hr />
        <?php

    }
?>