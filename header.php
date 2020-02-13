<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href=" <?php bloginfo('pingback_url'); ?> ">
    <title>
        <?php bloginfo('name'); ?>
        <?php if (is_home() || is_front_page()) : ?>
            &mdash; <?php bloginfo('description'); ?>
        <?php else : ?>
            &mdash; <?php wp_title("", true); ?>
        <?php endif; ?>
    </title>
    <link rel="stylesheet" href=" <?php bloginfo('stylesheet_url'); ?> ">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="en-tete">
    <div class="entete">
        <div class="entete__flex">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logoTim.svg"
                 alt="Logo de la TIM"
                 class="logoTim entete__flex--item">

            <div class="conteneurMenu">
                <img src="<?php echo get_template_directory_uri(); ?>/images/hamburger.svg"
                     alt="Menu hamburger"
                     class="hamburger entete__flex--item"
                     id="menuHamburger">
                <img src="<?php echo get_template_directory_uri(); ?>/images/close.svg"
                     alt="Menu close"
                     class="close entete__flex--item"
                     id="menuClose">
            </div>
            <h1 class="entete__h1 entete__flex--item">Techniques d'Intégration Multimédia</h1>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logoCegep.png" alt="Logo du Cégep de Sainte-Foy"
             class="logoCegep entete__flex entete__flex--item">
    </div>
    <div id="menuOuvert" class="menuOuvert">
        <svg height="5" width="320">
            <line x1="0" y1="0" x2="100" y2="100" class="line"/>
        </svg>
        <nav class="menu__mobile">
            <?php
            wp_nav_menu(array(
                'menu' => 'navigation',
                'menu_class' => 'mobile-menu',
            ));
            ?>
        </nav>

    </div>
    <nav class="menu__large">
        <?php
        wp_nav_menu(array(
            'menu' => 'navigation',
            'menu_class' => 'primary-menu',
        ));
        ?>
    </nav>


</header>

<div id="content">