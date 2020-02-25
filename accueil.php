<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>
<img class="imageEntete" alt="Image d'entête" src="https://via.placeholder.com/1000x680"/>
<div class="conteneurGeneral">
    <h1 class="titre__h1">Accueil</h1>
    <div class="visionneuse">
        <h2 class="titre__h2">Galerie de projets</h2>
    </div>
    <div class="cestQuoi">
        <p class="cestQuoi__texte">La tim, c'est quoi?</p>
        <img class="cestQuoi__image" src="https://via.placeholder.com/490x400" alt="Tableau des compétences"/>
    </div>
    <div class="competences">
        <div class="rangee1">
            <div class="competences__conteneur">
                <p class="competences__texte">
                    <span class="competences__nom">30% PROGRAMMATION</span>
                    Rendre fonctionnel un produit interactif,
                    web et application (backend)
                    <span class="competences__technologies">Php, Sql, Orienté objet, Mac, Windows, Android, iOs</span>
                </p>
                <img src="https://via.placeholder.com/490x140"/>
            </div>
            <div class="competences__conteneur">
                <p class="competences__texte">
                    <span class="competences__nom">25% INTÉGRATION</span>
                    Assembler les produits avec du code
                    et rendre l’interface interactive (frontend)
                    <span class="competences__technologies">HTML5, CSS, JavaScript, XML, Json, Git, SASS, Responsive design</span>
                </p>
                <img src="https://via.placeholder.com/490x140"/>
            </div>
        </div>
        <div class="rangee2">
            <div class="competences__conteneur">
                <p class="competences__texte">
                    <span class="competences__nom">20% CONCEPTION</span>
                    Rendre les interfaces utilisable et attrayante
                    <span class="competences__technologies">Design d’interfaces Web et tactiles, formulaires, scénarisation interactive, expérience utilisateur, ergonomie, e-commerce</span>
                </p>
            </div>
            <div class="competences__conteneur">
                <p class="competences__texte">
                    <span class="competences__nom">15% MÉDIAS</span>
                    Créer des médias
                    <span class="competences__technologies">Images, photomontages, vidéos, animations, sons, motion design, effets spéciaux</span>
                </p>
            </div>
            <div class="competences__conteneur">
                <p class="competences__texte">
                    <span class="competences__nom">10% AUTRE</span>
                    Gérer des projets, réaliser des stages en milieu professionnels, gestion agile, outils de gestion de
                    projet, réalisation de projets d’envergure, stage crédité et stage en Alternance Travail-Études
                    (ATE)
                </p>
            </div>
        </div>
    </div>
    <div class="temoignages">
        <h2 class="titre__h2">Témoignages des anciens de la TIM</h2>
        <div class="temoignages__conteneur">
            <img src="https://via.placeholder.com/235" alt="Portrait de l'ancien étudiant" class="temoignages__image">
            <p class="temoignages__infosAncien">
                <span class="temoignages__nomAncien"></span>
            </p>
            <p class="temoignages__temoignage"></p>
        </div>
    </div>
    <div class="etudiantUnJour">
        <h2 class="titre__h2">Étudiant d'un jour</h2>
        <p class="etudiantUnJour__texte">Tu veux en apprendre plus sur le programme?
            Tu veux assister à un ou plusieurs cours? Viens passer une journée avec nous en Techniques d'intégration
            multimédia!
            <span class="etudiantUnJour__contacte">Contacte Benoît Frigon pour en savoir plus.</span>
        </p>
        <a href="#" class="bouton">Nous joindre</a>
    </div>
    <div class="profil">
        <h2 class="titre__h2">As-tu le profil?</h2>
        <p class="profil__texte">Pour savoir si vous avez le profil, réalisez une autoévaluation.</p>
        <a href="#" class="bouton">Faire le quiz<span class="bouton__icone"></span></a>
    </div>
    <div class="grilleCours">
        <h2 class="titre__h2">As-tu le profil?</h2>
        <p class="grilleCours__texte">Afin d’obtenir plus de détails sur les différents cours, veuillez consulter la
            grille
            de cours officielle sur le site du Cégep de Sainte-Foy.</p>
        <a href="#" class="bouton">Voir la grille de cours<span class="bouton__icone"></span></a>
    </div>
    <div class="questions">
        <h2 class="titre__h2">Étudiant d'un jour</h2>
        <p class="questions__texte">Tu veux en apprendre plus sur le programme?
            Tu veux assister à un ou plusieurs cours? Viens passer une journée avec nous en Techniques d'intégration
            multimédia!
            <span class="questions__contacte">Contacte Sylvain Lamoureux pour en savoir plus.</span>
        </p>
        <a href="#" class="bouton">Nous joindre</a>
    </div>
    <div class="inscrire">
        <h2 class="titre__h2 titre__h2--blanc">S'inscrire au programme</h2>
        <p class="inscrire__texte">Les demandes d'admission au programme TIM sont reçues avant le 1er mars de chaque
            année
            (1er tour), 1er mai (2e tour), 1er juin (3e tour) et 1er août (4e tour). Pour compléter ta demande
            d'admission à
            notre programme, tu dois faire une demande d'admission au Service régional d'admission au collégial de
            Québec.</p>
    </div>
    <div class="convaincu">
        <p class="convaincu__texte">Vous êtes convaincu(e)?</p>
        <a href="#" class="bouton">M'inscrire<span class="bouton__icone"></span></a>
    </div>
</div>

<?php get_footer() ?>
