<?php
/*
Template Name: Diplomes
*/

switch (true) {
    case isset($_POST["btn_desc"]):
        $champtri = 'nom';
        $sens = 'desc';
        $ordertype = 'meta_value';
        break;
    case isset($_POST["btn_asc"]):
        $champtri = 'nom';
        $sens = 'asc';
        $ordertype = 'meta_value';
        break;
    case isset($_POST["btn_prog"]):
        $champtri = 'interet_programmation';
        $sens = 'desc';
        $ordertype = 'meta_value_num';
        break;
    case isset($_POST["btn_int"]):
        $champtri = 'interet_integration';
        $sens = 'desc';
        $ordertype = 'meta_value_num';
        break;
    case isset($_POST["btn_design"]):
        $champtri = 'interet_design_interface';
        $sens = 'desc';
        $ordertype = 'meta_value_num';
        break;
    case isset($_POST["btn_traitement"]):
        $champtri = 'interet_traitement_medias';
        $sens = 'desc';
        $ordertype = 'meta_value_num';
        break;
    case isset($_POST["btn_gestion"]):
        $champtri = 'interet_gestion_projet';
        $sens = 'desc';
        $ordertype = 'meta_value_num';
        break;
    default:
        $champtri = 'nom';
        $sens = 'asc';
        $ordertype = 'meta_value';
}

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
        <h2 class="diplomes__trierPar">Trier par :</h2>
        <form action="" method="post" class="diplomes__boutonsTris">
            <button name="btn_asc" class="bouton">Nom Ascendant</button>
            <button name="btn_desc" class="bouton">Nom Descendant</button>
            <button name="btn_prog" class="bouton">Programmation</button>
            <button name="btn_int" class="bouton">Intégration</button>
            <button name="btn_design" class="bouton">Design d'Interface</button>
            <button name="btn_traitement" class="bouton">Traitement de Médias</button>
            <button name="btn_gestion" class="bouton">Gestion de Projet</button>
        </form>
        <hr class="ligneOrange ligneOrange__gauche"/>
        <div class="diplomes">
            <?php
            $posts = get_posts(array(
                'posts_per_page' => -1,
                'post_type' => 'diplomes',
                'post_status' => 'publish',
                'meta_key' => $champtri,
                'orderby' => $ordertype,
                'order' => $sens,
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
