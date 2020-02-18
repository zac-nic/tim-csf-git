<?php
/* Ajout d'un emplacement de menu */
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'principal' => 'Menu principal'
        )
    );
}

// RESPONSABLE
function tim_responsable_custom_post()
{
    $labels = array(
        // Nom au pluriel
        'name' => _x('Responsables de la TIM', 'Post Type General Name'),
        // Nom au singulier
        'singular_name' => _x('Responsables', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Responsables'),
        // Les différents libellés de l'interface administrative
        'all_items' => __('Tous nos responsables'),
        'view_item' => __('Voir nos responsables'),
        'add_new_item' => __('Ajouter un nouveau responsable'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Éditer un responsable'),
        'update_item' => __('Modifier un responsable'),
        'search_items' => __('Rechercher un responsable'),
        'not_found' => __('Non trouvé'),
        'not_found_in_trash' => __('Non trouvé dans la corbeille'),
    );

    $args = array(
        'label' => __('Nos responsables'),
        'description' => __('Tous sur nos responsables'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'responsables'),
    );
    register_post_type('responsables', $args);
}

add_action('init', 'tim_responsable_custom_post', 0);

// DIPLÔMÉ(E)
function tim_diplomes_custom_post()
{
    $labels = array(
        // Nom au pluriel
        'name' => _x('Diplômé(e)s de la TIM', 'Post Type General Name'),
        // Nom au singulier
        'singular_name' => _x('Diplômés', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Diplômé(e)s'),
        // Les différents libellés de l'interface administrative
        'all_items' => __('Tous nos diplômés'),
        'view_item' => __('Voir nos diplômés'),
        'add_new_item' => __('Ajouter un nouveau diplômé'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Éditer un diplômé'),
        'update_item' => __('Modifier un diplômé'),
        'search_items' => __('Rechercher un diplômé'),
        'not_found' => __('Non trouvé'),
        'not_found_in_trash' => __('Non trouvé dans la corbeille'),
    );

    $args = array(
        'label' => __('Nos diplômé(e)s'),
        'description' => __('Tous sur nos diplômé(e)s'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'diplomes'),
    );
    register_post_type('diplomes', $args);
}

add_action('init', 'tim_diplomes_custom_post', 0);

// PROJET
function tim_projet_custom_post()
{
    $labels = array(
        // Nom au pluriel
        'name' => _x('Projets de la TIM', 'Post Type General Name'),
        // Nom au singulier
        'singular_name' => _x('Projets', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Projets'),
        // Les différents libellés de l'interface administrative
        'all_items' => __('Tous nos projets'),
        'view_item' => __('Voir nos projets'),
        'add_new_item' => __('Ajouter un nouveau projet'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Éditer un projet'),
        'update_item' => __('Modifier un projet'),
        'search_items' => __('Rechercher un projet'),
        'not_found' => __('Non trouvé'),
        'not_found_in_trash' => __('Non trouvé dans la corbeille'),
    );

    $args = array(
        'label' => __('Nos projets'),
        'description' => __('Tous sur nos projets'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projets'),
    );
    register_post_type('projets', $args);
}

add_action('init', 'tim_projet_custom_post', 0);

// TÉMOIGNAGE
function tim_temoignage_custom_post()
{
    $labels = array(
        // Nom au pluriel
        'name' => _x('Témoignages des anciens de la TIM', 'Post Type General Name'),
        // Nom au singulier
        'singular_name' => _x('Témoignages', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name' => __('Témoignages'),
        // Les différents libellés de l'interface administrative
        'all_items' => __('Tous nos témoignages'),
        'view_item' => __('Voir nos témoignages'),
        'add_new_item' => __('Ajouter un nouveau responsable'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Éditer un témoignage'),
        'update_item' => __('Modifier un témoignage'),
        'search_items' => __('Rechercher un témoignage'),
        'not_found' => __('Non trouvé'),
        'not_found_in_trash' => __('Non trouvé dans la corbeille'),
    );

    $args = array(
        'label' => __('Nos témoignages'),
        'description' => __('Tous sur nos témoignages'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'temoignages'),
    );
    register_post_type('temoignages', $args);
}

add_action('init', 'tim_temoignage_custom_post', 0);

wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), true );
?>
