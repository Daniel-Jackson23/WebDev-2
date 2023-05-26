<?php
get_header(); ?>

<div class="SherlockTitle">

    <?php $items = new WP_Query(array('post_type' => 'sherlock_rescue'));
while ($items->have_posts()) : $items->the_post(); ?>
    <h2><?php the_field('introtitle'); ?></h2>
    <p><?php the_field('introtext'); ?></p>
    <?php endwhile; ?>
</div>

<main class="cards">

    <?php $items = new WP_Query(array('post_type' => 'rescuedogs'));
    while ($items->have_posts()) : $items->the_post(); ?>
    <article class="card">
        <?php
            $image = get_field('dog_image');
            if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <div class="text">
            <?php endif; ?>

            <h3 class="dog_name">Name: <?php the_field('dog_name'); ?></h3>
            <p class="dog_age">Age:<?php $object = get_field_object('dog_age');
                                        echo $object['prepend'];
                                        echo $object['value']; ?></p>

            <p class="dog_description"><?php the_field('dog_description'); ?></p>
            <button class="dog-btn">Call to enquire</button>
        </div>
    </article>
    <?php endwhile; ?>

</main>
<?php get_footer(); ?>