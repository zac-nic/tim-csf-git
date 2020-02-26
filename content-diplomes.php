<?php
/*
Template Name: Diplomes
*/
?>
<?php get_header(); ?>
    <img class="imageEntete" alt="image d'entête" src="<?php echo get_template_directory_uri(); ?>/images/entete-diplomes.jpg"/>
    <div class="conteneurGeneral">
        <hr class="ligneOrange ligneOrange__gauche"/>
        <div class="diplomesDescription">
            <h1>Diplômé(e)s 2020</h1>
            <p>Qualifiés, déterminés, organisés, responsables, dynamiques... sont quelques-uns des qualificatifs qui
                siéent
                aux 24 diplômé(e)s de la TIM!</p>
        </div>
        <hr class="ligneOrange ligneOrange__droite"/>
        <div class="diplomes">
            <?php
            $posts = get_posts(array(
                'posts_per_page' => -1,
                'post_type' => 'diplomes',
                'post_status' => 'publish',
            ));
            if ($posts) : ?>
                <ul class="diplomes__liste">
                    <?php foreach ($posts as $post): ?>
                        <li class="diplome__item">
                            <a class="diplome__nom" href="<?php echo the_permalink($post); ?>">
                                <?php echo get_field('prenom', $post) ?>
                                <?php echo get_field('nom', $post) ?>
                            </a>
                            <!--                                        <img src="https://via.placeholder.com/405x405" alt="" class="diplome__image">-->
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer() ?>
<?php
