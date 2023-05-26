<?php get_header(); ?>
<div id="main">

    <?php //start the loop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ( in_category( 'awards' ) ) : ?>
    <div class="post-content awards-post">
        <?php elseif (in_category( 'suppliers' ) ): ?>
        <div class="post-content suppliers-post">
            <?php else : ?>
            <div class="post-content">
                <?php endif; ?>
                <h2><?php the_title(); ?></h2>
                Hello wold
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- main -->
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>
    </div>