<?php
function chloe_portfolio_scripts() {
    wp_enqueue_style('chloe-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'chloe_portfolio_scripts');
