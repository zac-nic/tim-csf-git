<?php
/*
Template Name: Nous joindre
*/
?>
<?php get_header(); ?>
<picture class="imageEntete"><img src="https://via.placeholder.com/1000x680"/></picture>
<div class="nousJoindreDescription">
    <h1>Nous joindre</h1>
    <p>Si tu préfères parler directement au responsable, appelle au <span
                class="joindre__telephone">(418) 659-6600</span>
        et saisi ensuite le numéro de poste de la personne que tu souhaites rejoindre.</p>
</div>

<div class="responsables">
    <ul class="responsable__liste">
        <?php
        // Sylvain = 163
        // Michel = 164
        // Michelle = 165
        // Benoit = 166

        $arrIdResponsables = [163, 164, 165, 166];
        for ($cpt = 0; $cpt < count($arrIdResponsables); $cpt++) {
            $arrPrenomNom[$cpt] = get_field('prenom', $arrIdResponsables[$cpt]) . " " . get_field('nom', $arrIdResponsables[$cpt]);
            $arrResponsabilite[$cpt] = get_field('responsabilite', $arrIdResponsables[$cpt]);
            $arrPoste[$cpt] = get_field('telephone', $arrIdResponsables[$cpt]);
            $arrCourriel[$cpt] = get_field('courriel_responsable', $arrIdResponsables[$cpt]);
            ?>
            <li class="responsable__item">
                <img src="https://via.placeholder.com/235x235" alt="" class="responsable__image">
                <div class="responsable__description">
                    <p class="responsable__nom"><?php echo $arrPrenomNom[$cpt] ?></p>
                    <p class="responsable__responsabilite"><?php echo $arrResponsabilite[$cpt] ?></p>
                    <p class="responsable__poste"><?php echo $arrPoste[$cpt] ?></p>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="formulaireContact">
    <h2 class="formulaireTitre">Formulaire de contact</h2>

</div>

<?php get_footer() ?>
