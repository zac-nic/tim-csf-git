<?php
/*
Template Name: Nous joindre
*/
?>
<?php get_header(); ?>
<img class="imageEntete" alt="image d'entête" src="<?php echo get_template_directory_uri(); ?>/images/entete-nousJoindre.jpg"/>
<div class="conteneurGeneral">
    <hr class="ligneOrange ligneOrange__gauche"/>
    <div class="nousJoindre__description">

        <h1 class="nousJoindre__titre">Nous joindre</h1>
        <p class="nousJoindre__texte">Si tu préfères parler directement au responsable, appelle au <span
                    class="nousJoindre__telephone">(418) 659-6600</span> et saisi ensuite le numéro de poste de la
            personne que tu souhaites rejoindre.</p>
    </div>
    <hr class="ligneOrange ligneOrange__droite"/>
    <div class="responsables">
        <?php
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type' => 'responsables',
            'post_status' => 'publish',
        ));
        if ($posts) : ?>
            <ul class="responsables__liste">
                <?php foreach ($posts as $post): ?>
                    <li class="responsables__item">
                        <img src="https://via.placeholder.com/235x235" alt="" class="responsables__image">
                        <div class="responsables__item--conteneur">
                            <p class="responsables__nom">
                                <?php echo get_field('prenom', $post) ?>
                                <?php echo get_field('nom', $post) ?>
                            </p>
                            <p class="responsables__responsabilite">
                                <?php echo get_field('responsabilite', $post) ?>
                            </p>
                            <p class="responsables__poste">
                                Poste #<?php echo get_field('telephone', $post) ?>
                            </p>
                        </div>

                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <hr class="ligneOrange ligneOrange__gauche"/>

    <div class="formulaire__conteneur">
        <h2 class="formulaire__titre">Formulaire de contact</h2>
        <form class="formulaire" action="">
            <label for="nom">Nom complet :</label>
            <input id="nom" type="text">
            <span class="messageErreur--nom"></span>
            <label for="courriel">Courriel :</label>
            <input id="courriel" type="text">
            <span class="messageErreur--courriel"></span>
            <?php
            $posts = get_posts(array(
                'posts_per_page' => -1,
                'post_type' => 'responsables',
                'post_status' => 'publish',
            ));
            if ($posts) : ?>
                <label for="destinataire">Destinataire :</label>
                <select id="destinataire">
                    <option value="">Choisir un destinataire</option>
                    <?php foreach ($posts as $post): ?>
                        <option value="<?php echo get_field('courriel', $post) ?>">
                            <?php echo get_field('prenom', $post) ?>
                            <?php echo get_field('nom', $post) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <span class="messageErreur--destinataire"></span>
            <?php endif; ?>
            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet">
            <span class="messageErreur--sujet"></span>
            <label for="message">Message :</label>
            <textarea name="message" id="message" rows="5"></textarea>
            <span class="messageErreur--message"></span>
            <input class="formulaire__btnEnvoyer" id="envoyer" type="submit">
        </form>
    </div>
</div>


<?php get_footer() ?>
