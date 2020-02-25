</div>
<footer class="piedDePage__conteneur">
    <div class="piedDePage__navigation">
        <?php
        wp_nav_menu(array(
            'menu' => 'navigation',
            'menu_class' => 'primary-menu',
        ));
        ?>
    </div>
    <div class="piedDePage__ligneOrange"></div>
    <small>TOUS DROITS RÉSERVÉS © 2020 - TECHNIQUES D'INTÉGRATION MULTIMÉDIA, CÉGEP DE SAINTE-FOY.© ZACHARY
        NICOL-P.</small>
</footer>
<?php wp_footer(); ?>
</body>
</html>