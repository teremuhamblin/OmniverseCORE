#!/bin/bash
source "$(dirname "$0")/utils.sh"

log_info "Optimisation macOS..."

# Nettoyage caches
rm -rf ~/Library/Caches/*

# Désactivation animations
defaults write NSGlobalDomain NSAutomaticWindowAnimationsEnabled -bool false

log_success "Optimisation macOS terminée."
