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
<div class="profil">
    <a href="<?php echo get_page_link(411) ?>" class="retour">< Retour</a>
    <h1 class="nomDiplome"><?php echo $arrPrenomNom; ?></h1>
    <p class="profilTitre">Profil du diplômé(e) :</p>
    <p class="profil"><?php echo $profil; ?></p>
</div>
<div class="liens">
    <?php if ($linkedin != ""): ?>
        <a href="<?php echo $linkedin ?>" target="_blank" class="bouton">LinkedIn</a>
    <?php endif; ?>
    <?php if ($pseudo_twitter != ""): ?>
        <a href="<?php echo $pseudo_twitter ?>" target="_blank" class="bouton">Twitter</a>
    <?php endif; ?>
    <?php if ($site_web != ""): ?>
        <a href="<?php echo $site_web ?>" target="_blank" class="bouton">Site web</a>
    <?php endif; ?>
    <a href="<?php echo "mailto:" . $courriel ?>" target="_blank" class="bouton">Écrivez-moi</a>
</div>
<div class="interets">
    <h2 class="interets__h2">Intérêts notés sur 10</h2>
    <p class="interets__interet">
        <span class="interets__note"><?php echo $interet_gestion_projet; ?></span>
        <span class="interets__nom">Gestion</span>
    </p>
    <p class="interets__interet">
        <span class="interets__note"><?php echo $interet_design_interface; ?></span>
        <span class="interets__nom">Design</span>
    </p>
    <p class="interets__interet">
        <span class="interets__note"><?php echo $interet_traitement_medias; ?></span>
        <span class="interets__nom">Traitement</span>
    </p>
    <p class="interets__interet">
        <span class="interets__note"><?php echo $interet_integration; ?></span>
        <span class="interets__nom">Intégration</span>
    </p>
    <p class="interets__interet">
        <span class="interets__note"><?php echo $interet_programmation; ?></span>
        <span class="interets__nom">Programmation</span>
    </p>
</div>
<div class="projets">
    <h2 class="projets__h2">Projets</h2>
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
<?php get_footer(); ?>

