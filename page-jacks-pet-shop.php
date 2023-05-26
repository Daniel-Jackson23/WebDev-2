<?php
get_header(); ?>
<div class="home-wrapper">
    <?php $items = new WP_Query(array('post_type' => 'homepage'));
    while ($items->have_posts()) : $items->the_post(); ?>
        <h2>Welcome to Jacks Pets </h2>
        <?php
        $image = get_field('banner_image');
        if (!empty($image)) : ?>
            <img class="banner-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <p><?php the_field('home_text'); ?></p>

    <?php endwhile; ?>


</div>
<h3>Some free pet tips that we can offer.</h3>
<main class="cards">
    <?php $items = new WP_Query(array('post_type' => 'pet_tips'));
    while ($items->have_posts()) : $items->the_post(); ?>
        <article class="card">
            <div class="text">
                <h3 class="dog_name"><?php the_field('tip_title'); ?></h3>
                <p class="dog_description"><?php the_field('tip_description'); ?></p>
                <p>Aniaml Type:<?php the_field('animal_type'); ?></p>
                <button class="dog-btn">Read more</button>
            </div>
        </article>
    <?php endwhile; ?>

    <?php get_footer(); ?>