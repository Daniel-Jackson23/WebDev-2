<?php get_header(); ?>
<div id="main">
    <?php
    //start the loop
    while ( have_posts() ) : the_post(); ?>
        <div class="about-us-content">
            <h1>*** <?php the_title(); ?> ***</h1>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</div><!-- #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
