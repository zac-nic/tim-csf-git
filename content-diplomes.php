<?php
/*
Template Name: Diplomes
*/
?>
<?php get_header(); ?>
    <div class="conteneurGeneral">
        <div class="diplomesDescription">
            <h1>Diplômé(e)s 2020</h1>
            <p>Qualifiés, déterminés, organisés, responsables, dynamiques... sont quelques-uns des qualificatifs qui
                siéent
                aux 24 diplômé(e)s de la TIM!</p>
        </div>
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
