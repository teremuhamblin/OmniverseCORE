<section class="docs">
    <h1 class="title">Documentation OmniverseCORE</h1>

    <div class="doc-grid">
        <?php foreach ($sections as $section): ?>
            <article class="doc-card">
                <h2><?= htmlspecialchars($section, ENT_QUOTES) ?></h2>
                <p>Consultez les détails de la section « <?= htmlspecialchars($section, ENT_QUOTES) ?> ».</p>
            </article>
        <?php endforeach; ?>
    </div>
</section>
