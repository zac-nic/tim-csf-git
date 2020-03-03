<?php get_header(); ?>
<?php
$arrPrenomNom = get_field('prenom') . " " . get_field('nom');
$profil = get_field('presentation');
$interet_gestion_projet = get_field('interet_gestion_projet');
$interet_design_interface = get_field('interet_design_interface');
$interet_traitement_medias = get_field('interet_traitement_medias');
$interet_integration = get_field('interet_integration');
$interet_programmation = get_field('interet_programmation');
$courriel = get_field('courriel');
$pseudo_twitter = get_field('pseudo_twitter');
$linkedin = get_field('linkedin');
$site_web = get_field('site_web');
$photo = get_field('photo_initial')['url'];

// Affichage des projets selon le diplômé
$posts = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'projets',
    'post_status' => 'publish',
    'meta_key' => 'id_diplome',
    'meta_value' => get_field('id_diplome'),
    'meta_compare' => "=",
));

$arrProjets = array();
if ($posts):
    foreach ($posts as $post):
        array_push($arrProjets, $post);
    endforeach;
endif;
?>
<div class="conteneurGeneral">
    <div class="diplome__profil">
        <div class="diplome__profil__nomRetour">
            <a href="<?php echo get_page_link(411) ?>" class="diplome__retour">< Retour</a>
            <h1 class="diplome__nom"><?php echo $arrPrenomNom; ?></h1>
        </div>
        <div class="diplome__imageTexte">
            <img src="<?php echo $photo ?>" alt=""
                 class="diplome__image">
            <div class="diplome__profil__conteneur">
                <p class="diplome__profil__titre">Profil du diplômé(e) :</p>
                <div class="diplome__profil__texte"><?php echo $profil; ?></div>
            </div>
        </div>
    </div>
    <div class="diplome__liens">
        <?php if ($linkedin != ""): ?>
            <a href="<?php echo $linkedin ?>" target="_blank" class="bouton diplome__lien">LinkedIn</a>
        <?php endif; ?>
        <?php if ($pseudo_twitter != ""): ?>
            <a href="<?php echo $pseudo_twitter ?>" target="_blank" class="bouton diplome__lien">Twitter</a>
        <?php endif; ?>
        <?php if ($site_web != ""): ?>
            <a href="<?php echo $site_web ?>" target="_blank" class="bouton diplome__lien">Site web</a>
        <?php endif; ?>
        <a href="<?php echo "mailto:" . $courriel ?>" target="_blank" class="bouton diplome__lien">Écrivez-moi</a>
    </div>
    <hr class="ligneOrange ligneOrange__droite"/>
    <h2 class="accueil__h2">Intérêts notés sur 10</h2>
    <div class="diplome__interets">

        <p class="diplome__interets__interet">
            <span class="diplome__interets__note"><?php echo $interet_gestion_projet; ?></span>
            <span class="diplome__interets__nom">Gestion</span>
        </p>
        <p class="diplome__interets__interet">
            <span class="diplome__interets__note"><?php echo $interet_design_interface; ?></span>
            <span class="diplome__interets__nom">Design</span>
        </p>
        <p class="diplome__interets__interet">
            <span class="diplome__interets__note"><?php echo $interet_traitement_medias; ?></span>
            <span class="diplome__interets__nom">Traitement</span>
        </p>
        <p class="diplome__interets__interet">
            <span class="diplome__interets__note"><?php echo $interet_integration; ?></span>
            <span class="diplome__interets__nom">Intégration</span>
        </p>
        <p class="diplome__interets__interet">
            <span class="diplome__interets__note"><?php echo $interet_programmation; ?></span>
            <span class="diplome__interets__nom">Programmation</span>
        </p>
    </div>
    <hr class="ligneOrange ligneOrange__gauche"/>
    <h2 class="accueil__h2">Projets</h2>

    <div class="projets">
        <ul class="projets__liste">
            <?php
            for ($cpt = 0;
                 $cpt < 2;
                 $cpt++) {
                ?>
                <?php
                if (get_field("id_diplome") == get_field("id_diplome", $arrProjets[$cpt]->ID)) { ?>
                    <li class="projets__item">
                        <h3 class="projets__nom">
                            <?php echo $arrProjets[$cpt]->post_title; ?>
                        </h3>
                        <img class="projets__image"
                             src="<?php echo get_site_url() ?>/wp-content/uploads/2020/02/prj<?php echo $arrProjets[$cpt]->id_projet ?>_01.png"/>
                        <div class="projets__description"><?php echo $arrProjets[$cpt]->description ?></div>
                        <p class="projets__technologies">Technologies :
                            <b><?php echo $arrProjets[$cpt]->technologies ?></b></p>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>
</div>

<?php get_footer(); ?>

