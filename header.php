<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <meta name="robots" content="noindex, nofollow">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<header>
    <nav>
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ChloeRhodesPhotography.svg" alt="Chloe Rhodes Photography Logo" class="logo2"></a>

        <input type="checkbox" class="menu-btn" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <div class="nav-wrapper">
            <ul class="menu" style="text-align: center;">
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Me</a></li>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ChloeRhodesPhotography.svg" alt="Chloe Rhodes Photography Logo" class="logo"></a>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <img src="<?php echo get_template_directory_uri(); ?>/images/randomperson.jpg" alt="selfie" id="hero">
</header>
