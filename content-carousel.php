<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title(); ?>
    </header>
    <div class="Icon">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="Main-Content">
        <?php the_content(); ?>
    </div>

</article>
