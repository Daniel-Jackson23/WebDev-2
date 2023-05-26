<?php get_header(); ?>
<div id="main">
    <?php //start the loop
    while ( have_posts() ) : the_post();
        ?>
        <div class="page-content">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
    <?php endwhile; //end the loop
    ?>
</div><!-- #main -->
<?php get_footer(); ?>
