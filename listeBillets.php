<?php $titre = 'Mon Blog' ?>

<?php ob_start() ?>
<?php foreach ($billets as $billet): ?>
    <article>
        <!-- TODO : affichage du billet -->
        <!-- TODO : affichage du nombre de commentaires -->
    </article>
    <hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean() ?>

<?php include 'gabarit.php' ?>
