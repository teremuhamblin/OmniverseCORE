#!/bin/bash

# ────────────────────────────────────────────────
# 🌌 OmniverseCORE — Regeneration du lockfile Bun
# Auteur : Teremu
# Version : NextGen v4.0
# ────────────────────────────────────────────────

echo "🔄 Regénération du lockfile Bun..."

# Supprimer l'ancien lockfile
rm -f bun.lockb

# Réinstaller les dépendances
bun install

echo "✅ bun.lockb régénéré avec succès."
echo "🌌 OmniverseCORE NextGen — Lockfile à jour."
