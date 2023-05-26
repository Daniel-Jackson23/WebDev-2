<?php

function jackpetstheme_add_stylesheet()
{
    wp_enqueue_style('jackpetsstyle', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'jackpetstheme_add_stylesheet');
function bistro_add_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary' ),
        'secondary' => __( 'Bob' ),
    ) );
}
add_action( 'after_setup_theme',
    'bistro_add_menus' );


    if (function_exists('acf_register_block_type')) {
        add_action('acf/init', 'register_acf_block_types');
    } 
        
    function register_acf_block_types(){
        acf_register_block_type(array(
            'name' => 'hero',
            'title' => __('Hero'),
            'description' => __('A custom hero block.'),
            'render_template' => 'template-parts/blocks/hero/hero.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('hero', 'quote'),
        )
    );
    }