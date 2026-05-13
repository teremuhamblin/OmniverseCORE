<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? "OmniverseCORE" ?></title>
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>

<div class="omniloader">
    <div class="spinner"></div>
    <p>OmniverseCORE — Booting...</p>
</div>

<main>
    <?php require __DIR__ . "/$template.php"; ?>
</main>

<script src="/assets/js/app.js"></script>
</body>
</html>
