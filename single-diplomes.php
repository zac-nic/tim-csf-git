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

?>
<div class="conteneurGeneral">
    <div class="diplome__profil">
        <div class="diplome__profil__nomRetour">
            <a href="<?php echo get_page_link(411) ?>" class="diplome__retour">< Retour</a>
            <h1 class="diplome__nom"><?php echo $arrPrenomNom; ?></h1>
        </div>
        <div class="diplome__imageTexte">
            <img src="<?php echo get_field('photo_initial', $post)['url'] ?>" alt=""
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
            <li class="projets__item">
                <div>
                    <h3 class="projets__nom">
                        <!--  À COMPLÉTER  -->
                    </h3>
                </div>
            </li>
        </ul>
    </div>
</div>

<?php get_footer(); ?>

