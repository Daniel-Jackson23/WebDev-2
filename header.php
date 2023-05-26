<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php single_post_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
<div id="container">
    <header id="main-header">
        <h1 id="site-title"><a href="<?php echo esc_url(bloginfo('url')); ?>">
                <?php bloginfo('name'); ?></a></h1>
        <h2 id="site-description"><?php bloginfo('description'); ?></h2>

        <nav class="siteNav">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'depth' => 0)); ?>
        </nav><!-- site-navigation -->

    </header>

    <div class="content">
