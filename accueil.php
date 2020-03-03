<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>
<img class="imageEntete" alt="Image d'entête"
     src="<?php echo get_template_directory_uri(); ?>/images/entete-accueil.jpg"/>
<div class="conteneurGeneral">
    <hr class="ligneOrange ligneOrange__droite"/>
    <h1 class="accueil__h1">Accueil</h1>
    <!--    <div class="visionneuse">-->
    <!--        <h2 class="titre__h2">Galerie de projets</h2>-->
    <!--    </div>-->
    <hr class="ligneOrange ligneOrange__gauche"/>
    <div class="cestQuoi">
        <div class="carreBleu">
            <p class="carreBleu__texte">La tim,<br/> c'est quoi?</p>
        </div>
        <img class="cestQuoi__image" src="<?php echo get_template_directory_uri(); ?>/images/competences-pie-chart.jpg"
             alt="Tableau des compétences"/>
    </div>
    <hr class="ligneOrange ligneOrange__droite"/>
    <div class="competences">
        <h2 class="accueil__h2">Grande diversité des compétences</h2>
        <div class="competences__rangee1">
            <div class="competences__conteneur">
                <div class="competences__texte1">
                    <p class="competences__nom">30% PROGRAMMATION</p>
                    <p class="competences__description">Rendre fonctionnel un produit interactif, web et application
                        (backend)</p>
                    <p class="competences__technologies">Php, Sql, Orienté objet, Mac, Windows, Android, iOs</p>
                </div>
                <img class="competences__image"
                     src="<?php echo get_template_directory_uri(); ?>/images/programmation.jpg"/>
            </div>
            <div class="competences__conteneur">
                <div class="competences__texte1">
                    <p class="competences__nom">25% INTÉGRATION</p>
                    <p class="competences__description">Assembler les produits avec du code et rendre l’interface
                        interactive (frontend)</p>
                    <p class="competences__technologies">HTML5, CSS, JavaScript, XML, Json, Git, SASS, Responsive
                        design</p>
                </div>
                <img class="competences__image"
                     src="<?php echo get_template_directory_uri(); ?>/images/integration.jpg"/>
            </div>
        </div>
        <div class="competences__rangee2">
            <div class="competences__conteneur">
                <div class="competences__texte2">
                    <p class="competences__nom">20% CONCEPTION</p>
                    <p class="competences__description">Rendre les interfaces utilisable et attrayante</p>
                    <p class="competences__technologies">Design d’interfaces Web et tactiles, formulaires, scénarisation
                        interactive, expérience utilisateur, ergonomie, e-commerce</p>
                </div>
            </div>
            <div class="competences__conteneur">
                <div class="competences__texte2">
                    <p class="competences__nom">15% MÉDIAS</p>
                    <p class="competences__description">Créer des médias</p>
                    <p class="competences__technologies">Images, photomontages, vidéos, animations, sons, motion design,
                        effets spéciaux</p>
                </div>
            </div>
            <div class="competences__conteneur">
                <div class="competences__texte2">
                    <p class="competences__nom">10% AUTRE</p>
                    <p class="competences__description">Gérer des projets, réaliser des stages en milieu professionnels,
                        gestion agile, outils de gestion de
                        projet, réalisation de projets d’envergure, stage crédité et stage en Alternance Travail-Études
                        (ATE)</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="ligneOrange ligneOrange__gauche"/>
    <h2 class="accueil__h2">Témoignages des anciens de la TIM</h2>
    <div class="temoignages">
        <?php
        $posts = get_posts(array(
            'posts_per_page' => 2,
            'post_type' => 'temoignages',
            'post_status' => 'publish',
            'orderby' => 'rand',
        ));
        if ($posts) : ?>
            <?php foreach ($posts as $post): ?>
                <div class="temoignages__conteneur">
                    <div class="temoignages__infos">
                        <img src="<?php echo get_field('photo', $post)['url'] ?>" alt="Portrait de l'ancien étudiant"
                             class="temoignages__image">
                        <div class="temoignages__flex">
                            <p class="temoignages__annee">
                                Diplômé(e) <?php echo get_field('annee_diplomation', $post) ?></p>
                            <p class="temoignages__nom"><?php echo get_field('temoin', $post) ?></p>
                            <?php if (get_field('titre_poste', $post)) : ?>
                                <p class="temoignages__poste"><?php echo get_field('titre_poste', $post) ?> chez
                                    <a href="https://<?php echo get_field('url_entreprise', $post) ?>"
                                       class="temoignages__entreprise"
                                       target="_blank"><?php echo get_field('entreprise', $post) ?></a>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <p class="temoignages__temoignage"><?php echo get_field('temoignage', $post) ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <hr class="ligneOrange ligneOrange__droite"/>
    <div class="etudiantUnJour">
        <h2 class="accueil__h2">Étudiant d'un jour</h2>
        <p class="etudiantUnJour__texte">Tu veux en apprendre plus sur le programme?
            Tu veux assister à un ou plusieurs cours? Viens passer une journée avec nous en Techniques d'intégration
            multimédia!
        </p>
        <p class="etudiantUnJour__texte">Contacte Benoît Frigon pour en savoir plus.</p>
        <a href="<?php echo get_page_link(192); ?>" class="bouton">Nous joindre</a>
    </div>
    <hr class="ligneOrange ligneOrange__gauche"/>
    <div class="profil">
        <h2 class="accueil__h2">As-tu le profil?</h2>
        <p class="profil__texte">Pour savoir si vous avez le profil, réalisez une autoévaluation.</p>
        <a href="https://www.cegep-ste-foy.qc.ca/programmes/programmes-techniques/techniques-dintegration-multimedia-web-et-apps/autoevaluation/"
           target="_blank" class="bouton">Faire le quiz<span class="bouton__icone"></span></a>
    </div>
    <hr class="ligneOrange ligneOrange__droite"/>
    <div class="grilleCours">
        <h2 class="accueil__h2">Grille de cours</h2>
        <p class="grilleCours__texte">Afin d’obtenir plus de détails sur les différents cours, veuillez consulter la
            grille
            de cours officielle sur le site du Cégep de Sainte-Foy.</p>
        <a href="#" class="bouton">Voir la grille de cours<span class="bouton__icone"></span></a>
    </div>
    <hr class="ligneOrange ligneOrange__gauche"/>
    <div class="questions">
        <h2 class="accueil__h2">Étudiant d'un jour</h2>
        <p class="questions__texte">Tu veux en apprendre plus sur le programme?
            Tu veux assister à un ou plusieurs cours? Viens passer une journée avec nous en Techniques d'intégration
            multimédia!
        </p>
        <p class="questions__texte">Contacte Sylvain Lamoureux pour en savoir plus.</p>
        <a href="<?php echo get_page_link(192); ?>" class="bouton">Nous joindre</a>
    </div>
    <hr class="ligneOrange ligneOrange__droite"/>
    <h2 class="accueil__h2">Facebook</h2>
    <div class="facebook">
        <?php echo do_shortcode("[custom-facebook-feed]"); ?>
    </div>
    <hr class="ligneOrange ligneOrange__gauche"/>
    <h2 class="accueil__h2">Twitter</h2>
    <hr class="ligneOrange ligneOrange__droite"/>
    <div class="inscrire">
        <h2 class="accueil__h2">S'inscrire au programme</h2>
        <p class="inscrire__texte">Les demandes d'admission au programme TIM sont reçues avant le 1er mars de chaque
            année
            (1er tour), 1er mai (2e tour), 1er juin (3e tour) et 1er août (4e tour).
        </p>
        <p class="inscrire__texte">
            Pour compléter ta demande d'admission à notre programme, tu dois faire une demande d'admission au Service
            régional d'admission au collégial de Québec.
        </p>
    </div>
</div>
<div class="convaincu">
    <p class="convaincu__texte">Vous êtes convaincu(e)?</p>
    <a href="https://www.cegep-ste-foy.qc.ca/index.php?id=5302" target="_blank" class="bouton">M'inscrire<span
                class="bouton__icone"></span></a>
</div>
<?php get_footer() ?>
