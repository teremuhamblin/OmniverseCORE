<?php use function App\Core\asset; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? APP_NAME ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/theme-dark.css') ?>" id="theme-style">
</head>

<body class="theme-dark">

<?php require __DIR__ . '/partials/loader.php'; ?>

<header class="nav">
    <div class="logo">OmniverseCORE</div>
    <nav>
        <a href="/" data-nav>Accueil</a>
        <a href="/docs" data-nav>Documentation</a>
        <button id="theme-toggle" class="btn-theme">Mode</button>
    </nav>
</header>

<main class="page">
    <?php require $contentView; ?>
</main>

<footer class="footer">
    <p>© <?= date('Y') ?> OmniverseCORE — Cyber‑Physical Framework</p>
</footer>

<script src="<?= asset('js/ui.js') ?>"></script>
<script src="<?= asset('js/particles.js') ?>"></script>
<script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>
