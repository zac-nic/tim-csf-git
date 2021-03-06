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
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Oswald&display=swap" rel="stylesheet">
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

        <nav class="menu__mobile">
            <?php
            wp_nav_menu(array(
                'menu' => 'navigation',
                'menu_class' => 'mobile-menu',
            ));
            ?>
        </nav>
        <hr class="entete__ligneOrange"/>
        <div class="mobileMenuFlex">
            <a href="https://www.facebook.com/timcsf/" target="_blank" class="mobileMenuFlex__reseauxSociaux">
                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook_blanc.svg" alt="facebook"/>
            </a>
            <a href="https://twitter.com/timcsf" target="_blank" class="mobileMenuFlex__reseauxSociaux">
                <img src="<?php echo get_template_directory_uri(); ?>/images/twitter_blanc.svg" alt="twitter"/>
            </a>
        </div>
        <hr class="entete__ligneOrange"/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logoCegep.png" alt="Logo du Cégep de Sainte-Foy"
             class="logoCegep--mobile">
    </div>
    <div class="menuFlex">
        <nav class="menu__large">
            <?php
            wp_nav_menu(array(
                'menu' => 'navigation',
                'menu_class' => 'primary-menu',
            ));
            ?>
        </nav>
        <div class="menuFlex__reseaux">
            <a href="https://www.facebook.com/timcsf/" target="_blank" class="reseauxSociaux">
                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook"/>
            </a>
            <a href="https://twitter.com/timcsf" target="_blank" class="reseauxSociaux">
                <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="twitter"/>
            </a>
        </div>
    </div>
</header>

<div id="content">
