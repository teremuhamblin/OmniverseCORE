#!/bin/bash
echo "[OMNIVERSE] Optimisation macOS..."

# Désactivation animations
defaults write NSGlobalDomain NSAutomaticWindowAnimationsEnabled -bool false

# Nettoyage caches
rm -rf ~/Library/Caches/*

echo "[SUCCESS] Optimisation macOS terminée."
