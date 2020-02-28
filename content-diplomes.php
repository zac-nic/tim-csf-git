<?php
/*
Template Name: Diplomes
*/
?>
<?php get_header(); ?>
    <img class="imageEntete" alt="image d'entête"
         src="<?php echo get_template_directory_uri(); ?>/images/entete-diplomes.jpg"/>
    <div class="conteneurGeneral">
        <hr class="ligneOrange ligneOrange__gauche"/>
        <h1 class="accueil__h1">Diplômé(e)s 2020</h1>
        <p class="diplomes__description">Qualifiés, déterminés, organisés, responsables, dynamiques... sont quelques-uns
            des qualificatifs qui siéent aux 24 diplômé(e)s de la TIM!
        </p>
        <hr class="ligneOrange ligneOrange__droite"/>
        <div class="diplomes">
            <?php
            $posts = get_posts(array(
                'posts_per_page' => -1,
                'post_type' => 'diplomes',
                'post_status' => 'publish',
                'orderby' => 'rand',
            ));
            if ($posts) : ?>
                <ul class="diplomes__liste">
                    <?php foreach ($posts as $post): ?>
                        <li class="diplomes__item">
                            <a class="diplomes__nom" href="<?php echo the_permalink($post); ?>">
                                <div class="diplomes__nomPrenom">
                                    <?php echo get_field('prenom', $post) ?>
                                    <?php echo get_field('nom', $post) ?> >
                                </div>
                                <div class="diplomes__image__conteneur">
                                    <img src="<?php echo get_field('photo_initial', $post)['url'] ?>" alt=""
                                         class="diplomes__image diplomes__image--initial">
                                    <img src="<?php echo get_field('photo_survol', $post)['url'] ?>" alt=""
                                         class="diplomes__image diplomes__image--survol">
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer() ?>
<?php
