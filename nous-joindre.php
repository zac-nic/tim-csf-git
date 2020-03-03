<?php
/*
Template Name: Nous joindre
*/

$json = get_template_directory_uri() . "/js/messages-erreur.json";
$messagesJson = json_decode(file_get_contents($json), true);
// Variables qui contiennnent les différents messages d'erreur
$messageGeneral = "";
$erreurNom = "";
$erreurCourriel = "";
$erreurDestinataire = "";
$erreurSujet = "";
$erreurMessage = "";
$erreurCaptcha = "";

// Booléens qui change à "True" lorsque le preg_match() est réussi
// Le courriel est envoyé lorsque toutes les variables sont à "True"
$nomValide = false;
$courrielValide = false;
$destinataireValide = false;
$sujetValide = false;
$messageValide = false;

if (isset($_POST['nom']) OR isset($_POST['courriel']) OR isset($_POST['destinataire']) OR isset($_POST['sujet']) OR isset($_POST['message']) OR isset($_POST['g-recaptcha-response'])):
    // Variables qui contiennent les valeurs saisies dans chacun des champs
    $nom = $_POST['nom'];
    $courriel = $_POST['courriel'];
    $destinataire = $_POST['destinataire'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    $captcha = $_POST['g-recaptcha-response'];

    $messageGeneral = $messagesJson['retroactions']['courriel']['completer'];
    // Vérifie si chaque champs est vide (ou non) et ensuite vérifie la validité :
    // Validation du Nom
    if ($nom == ""):
        $erreurNom = $messagesJson['nom']['erreurs']['vide'];
    endif;
    if ($nom != ""):
        if (preg_match("/^[a-zA-Z ]*$/", $nom)):
            $nomValide = true;
            $erreurNom = "";
        else:
            $erreurNom = $messagesJson['nom']['erreurs']['motif'];
        endif;
    endif;

    // Validation du Courriel
    if ($courriel == ""):
        $erreurCourriel = $messagesJson['courriel']['erreurs']['vide'];
    endif;
    if ($courriel != ""):
        if (filter_var($courriel, FILTER_VALIDATE_EMAIL)):
            $courrielValide = true;
            $erreurCourriel = "";
        else:
            $erreurCourriel = $messagesJson['courriel']['erreurs']['motif'];
        endif;
    endif;

    // Validation du Destinataire
    if ($destinataire == ""):
        $erreurDestinataire = $messagesJson['destinataire']['erreurs']['vide'];
    endif;
    if ($destinataire != ""):
        if (filter_var($destinataire, FILTER_VALIDATE_EMAIL)):
            $destinataireValide = true;
            $erreurDestinataire = "";
        else:
            $erreurDestinataire = $messagesJson['destinataire']['erreurs']['motif'];
        endif;
    endif;

    // Validation du Sujet
    if ($sujet == ""):
        $erreurSujet = $messagesJson['sujet']['erreurs']['vide'];
    endif;
    if ($sujet != ""):
        if (preg_match('/^[\w]+$/', $sujet)):
            $sujetValide = true;
            $erreurSujet = "";
        else:
            $erreurSujet = $messagesJson['sujet']['erreurs']['motif'];
        endif;
    endif;

    // Validation du Message
    if ($message == ""):
        $erreurMessage = $messagesJson['message']['erreurs']['vide'];
    endif;
    if ($message != ""):
        if (preg_match('/^[\w]+$/', $message)):
            $messageValide = true;
            $erreurMessage = "";
        else:
            $erreurMessage = $messagesJson['message']['erreurs']['motif'];
        endif;
    endif;

    // Captcha vide
    if ($captcha == ""):
        $erreurCaptcha = $messagesJson['humain']['erreurs']['vide'];
    endif;
endif;
// Vérification des variables de validité de chacun des champs et envoi du courriel
// Affichage de la rétroaction à l'utilisateur (Message envoyé!)
if (isset($captcha)) :
    $secretKey = "6Ld2xZAUAAAAAKTP2SAEIyikTTN2uzxmgcNRaiLv";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip);
    $responseKeys = json_decode($response, true);
    if (intval($responseKeys["success"]) === 1):
        if (($nomValide && $courrielValide && $destinataireValide && $sujetValide && $messageValide) === true) :
            $to = get_option('admin_email');
            $headers = 'De: ' . $courriel . '\r\n' . 'Répondre à: ' . $courriel . '\r\n';
            $envoi = wp_mail($to, $sujet, strip_tags($message), $headers);
            if ($envoi):
                var_dump("Envoyé: " . $envoi);
                $messageGeneral = $messagesJson['retroactions']['courriel']['envoyer'];
            else:
                $messageGeneral = $messagesJson['retroactions']['courriel']['avorter'];
            endif;
        endif;
    endif;
endif;
?>
<?php get_header(); ?>
<img class="imageEntete" alt="image d'entête"
     src="<?php echo get_template_directory_uri(); ?>/images/entete-nousJoindre.jpg"/>
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
                        <img src="<?php echo get_field('photo', $post)['url'] ?>" alt="" class="responsables__image">
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
        <span class="messageGeneral"><?php echo $messageGeneral; ?></span>
        <form class="formulaire" action="" method="post">
            <label for="nom">Nom complet :</label>
            <input class="formulaire__input" name="nom" id="nom" type="text" value="<?php echo $_POST['nom']; ?>">
            <span class="messageErreur"><?php echo $erreurNom; ?></span>
            <label for="courriel">Courriel :</label>
            <input class="formulaire__input" name="courriel" id="courriel" type="text"
                   value="<?php echo $_POST['courriel']; ?>">
            <span class="messageErreur"><?php echo $erreurCourriel; ?></span>
            <?php $posts = get_posts(array(
                'posts_per_page' => -1,
                'post_type' => 'responsables',
                'post_status' => 'publish',
            ));
            if ($posts) : ?>
                <label for="destinataire">Destinataire :</label>
                <select name="destinataire" id="destinataire">
                    <option value="">Choisir un destinataire</option>
                    <?php foreach ($posts as $post):
                        var_dump(get_field('courriel_responsable', $post)); ?>
                        <option value="<?php echo get_field('courriel_responsable', $post) ?>"
                            <?php if (isset($destinataire)):
                                if ($destinataire == get_field('courriel_responsable', $post)): ?>
                                    selected
                                <?php endif; endif; ?>>
                            <?php echo get_field('prenom', $post) ?>
                            <?php echo get_field('nom', $post) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            <?php endif; ?>
            <span class="messageErreur"><?php echo $erreurDestinataire; ?></span>
            <label for="sujet">Sujet :</label>
            <input class="formulaire__input" name="sujet" type="text" id="sujet" value="<?php echo $_POST['sujet']; ?>">
            <span class="messageErreur"><?php echo $erreurSujet; ?></span>
            <label for="message">Message : </label>
            <textarea name="message" class="message" id="message"><?php echo $_POST['message']; ?></textarea>
            <span class="messageErreur"><?php echo $erreurMessage; ?></span>
            <div class="g-recaptcha" data-sitekey="6Ld2xZAUAAAAAJ2AKX2HBkO1X3vSb6vuQ4ireXAK"></div>
            <span class="messageErreur"><?php echo $erreurCaptcha; ?></span>
            <input class="formulaire__btnEnvoyer" id="envoyer" type="submit" value="ENVOYER">
        </form>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php get_footer() ?>
