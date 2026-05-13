<?php
// Variables attendues : $title, $subtitle (optionnel), $viewFile, $data
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? OMNI_APP_NAME) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
<header>
    <h1><?= htmlspecialchars(OMNI_APP_NAME) ?></h1>
    <nav>
        <a href="/">Accueil</a>
        <a href="/docs">Docs</a>
        <a href="/about">À propos</a>
        <a href="https://github.com/TonCompte/OmniverseCORE" target="_blank">GitHub</a>
    </nav>
</header>

<main>
    <?php
    // injection de la vue spécifique
    include $viewFile ?? __DIR__ . '/home.php';
    ?>
</main>

<footer>
    <p>© <?= date('Y') ?> OmniverseCORE · Powered by PHP</p>
</footer>

<script src="/assets/js/app.js"></script>
</body>
</html>
