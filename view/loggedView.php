
<?php
$_SESSION['unknown'] = '';
$title = 'Bienvenue';
ob_start(); ?>
<nav>
    <ul>
        <li class="navIntermediaire"><a href="index.php?action=display_queries">Affichage requête</a></li>
        <?php $_SESSION['user'] = ob_get_contents() . '</ul></nav>'; ?>
        <a href="index.php?action=manage_customers"><li class="navIntermediaire">Gestion clients</li></a>
        <?php $_SESSION['operator'] = ob_get_contents() . '</ul></nav>'; ?>
        <a href="index.php?action=admin_users"><li class="navIntermediaire">Gestion utilisateur</li></a>
    </ul>
</nav>
<?php $_SESSION['administrator'] = ob_get_clean(); ?>

<?php ob_start(); ?>
<section id='accueil'>
        <h1>Bonjour <?= $_SESSION['user_first_name'] . ' ' . $_SESSION['user_name'] ?>! Bienvenue dans l'outil STAPA</h1>
        <p>
            Vous êtes connecté(e) en tant que: <?= $_SESSION['user_type'] ?>! <br />
            Utilisez le menu à gauche de l'écran pour accéder au service voulu.
        </p>
</section>
<?php
$content = ob_get_clean();
require('template.php');
?>
