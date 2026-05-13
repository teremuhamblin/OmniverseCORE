<?php
// Variables attendues : $title, $subtitle, $viewFile, $data
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title ?? OMNI_APP_NAME) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>

<!-- ============================================================
     LOADER OMNIVERSECORE
     ============================================================ -->
<div class="omniloader">
    <div class="spinner"></div>
    <p>OmniverseCORE — Booting...</p>
</div>

<!-- ============================================================
     HEADER
     ============================================================ -->
<header>
    <h1><?= htmlspecialchars(OMNI_APP_NAME) ?></h1>

    <nav>
        <a href="/">Accueil</a>
        <a href="/docs">Docs</a>
        <a href="/about">À propos</a>
        <a href="https://github.com/TonCompte/OmniverseCORE" target="_blank">GitHub</a>

        <!-- Bouton mode clair/sombre -->
        <button id="theme-toggle" class="theme-btn">☀️ / 🌙</button>
    </nav>
</header>

<!-- ============================================================
     CONTENU PRINCIPAL
     ============================================================ -->
<main>
    <?php
        // Injection de la vue spécifique
        if (isset($viewFile) && file_exists($viewFile)) {
            include $viewFile;
        } else {
            echo "<p>Vue introuvable.</p>";
        }
    ?>
</main>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer>
    <p>© <?= date('Y') ?> OmniverseCORE — All Systems Operational</p>
</footer>

<!-- Scripts -->
<script src="/assets/js/app.js"></script>

</body>
</html>
