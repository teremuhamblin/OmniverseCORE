#!/bin/bash
source "$(dirname "$0")/utils.sh"

log_info "Optimisation Linux en cours..."

# Nettoyage
sudo apt autoremove -y
sudo apt autoclean -y

# Performance
sudo systemctl disable bluetooth.service
sudo systemctl disable cups.service

log_success "Optimisation Linux terminée."
