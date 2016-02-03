<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="Icon">
        <?php the_post_thumbnail(); ?>
    </div>

    <header class="entry-header">
        <?php the_title(); ?>
    </header>

    <div class="Main-Content">
        <?php the_content(); ?>
    </div>

</article>
