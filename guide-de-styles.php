<?php
/*
Template Name: Guide
*/
?>
<?php get_header(); ?>
    <h1 class="gds__titre">Guide de styles</h1>
    <section>

        <h2 class="gds__sousTitre">Couleurs</h2>

        <ul class="palette">
            <li class="palette__item">
                <div class="palette__couleur palette__couleur--bleuFonce"></div>
                <p class="palette__description"><code>$bleuFonce</code> <br>#083C65</p>
            </li>
            <li class="palette__item">
                <div class="palette__couleur palette__couleur--bleuPale"></div>
                <p class="palette__description"><code>$bleuPale</code> <br>#A9DAFF</p>
            </li>
            <li class="palette__item">
                <div class="palette__couleur palette__couleur--orange"></div>
                <p class="palette__description"><code>$orange</code> <br>#FF9200</p>
            </li>
            <li class="palette__item">
                <div class="palette__couleur palette__couleur--bleuMoyen"></div>
                <p class="palette__description"><code>$bleuMoyen</code> <br>#0B61A4</p>
            </li>
        </ul>
        <table class="gds__tableau">
            <thead>
            <tr>
                <th><h2 class="gds__sousTitre">Textes - Desktop</h2></th>
                <th><h2 class="gds__sousTitre">Textes - Mobile</h2></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <p class="titreNiveau1 titreNiveau1--desktop">Titre niveau 1</p>
                    <p>
                        <small>Bebas Neue regular, 48pts sur écran large</small>
                    </p>
                </td>
                <td>
                    <p class="titreNiveau1 titreNiveau1--mobile">Titre niveau 1</p>
                    <p>
                        <small>Bebas Neue regular, 36 pts sur écran étroit</small>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="titreNiveau2 titreNiveau2--desktop">Titre niveau 2</p>
                    <p>
                        <small>Bebas Neue regular, 36pts sur écran large</small>
                    </p></td>
                <td>
                    <p class="titreNiveau2 titreNiveau2--mobile">Titre niveau 2</p>
                    <p>
                        <small>Bebas Neue regular, 28pts sur écran étroit</small>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="titreNiveau3 titreNiveau3--desktop">Titre niveau 3</p>
                    <p>
                        <small>Bebas Neue regular, 22pts sur écran large</small>
                    </p>
                </td>
                <td>
                    <p class="titreNiveau3 titreNiveau3--mobile">Titre niveau 3</p>
                    <p>
                        <small>Bebas Neue regular, 18 pts sur écran étroit</small>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="texte texte--desktop">Texte courant lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A corporis dolores enim eveniet id inventore laborum modi nam necessitatibus officia,
                        perspiciatis quasi sint soluta, suscipit voluptates? Esse ex harum incidunt.</p>
                    <p><small>(Oswald regular, 18pts avec interlignage de 24 pts)</small></p>
                </td>
                <td>
                    <p class="texte texte--mobile">Texte courant lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A corporis dolores enim eveniet id inventore laborum modi nam necessitatibus officia,
                        perspiciatis quasi sint soluta, suscipit voluptates? Esse ex harum incidunt.</p>
                    <p><small>(Oswald regular, 18pts avec interlignage de 22 pts)</small></p>
                </td>
            </tr>

            </tbody>
        </table>


        <h2 class="gds__sousTitre">Boutons / Éléments interactifs</h2>

        <h3 class="gds__categorie">Hyperliens de base (pas de classe)</h3>

        <ul class="listeInteractivite">
            <li class="listeInteractivite__item">
                <a href="#" class="hyperlien">Un vrai hyperlien</a>
            </li>
            <li class="listeInteractivite__item">
                <p class="hyperlien">a:link</p>
                <p>Couleur $hyperlien <br>(équivalente à $bleuFonce)</p>
            </li>
            <li class="listeInteractivite__item">
                <p class="hyperlien hyperlien--visited">a:visited</p>
                <p>Couleur $hyperlien plus foncée de 10%</p>
            </li>
            <li class="listeInteractivite__item">
                <p class="hyperlien hyperlien--hover">a:hover</p>
                <p>Couleur $bleuMoyen

            </li>
            <li class="listeInteractivite__item">
                <p class="hyperlien hyperlien--active">a:active</p>

                <p>Couleur $bleuMoyen <br>Souligné</p>
            </li>
        </ul>

        <h3 class="gds__categorie">Bouton</h3>
        <ul class="listeInteractivite">
            <li class="listeInteractivite__item">
                <a href="#" class="bouton">Un vrai bouton</a>
            </li>
            <li class="listeInteractivite__item">
                <p class="bouton">Bouton</p>
                <p>État de base</p>
                <p>Couleur $bleuMoyen, border-radius de 5px & box-shadow $bleuPale</p>
            </li>
            <li class="listeInteractivite__item">
                <p class="bouton bouton--hover">Bouton</p>
                <p>État survol</p>
                <p>Couleur $bleuFonce</p>
            </li>
            <li class="listeInteractivite__item">
                <p class="bouton bouton--active">Bouton</p>
                <p>État actif</p>
                <p>Couleur $orange</p>
            </li>
        </ul>
    </section>
<?php get_footer() ?>