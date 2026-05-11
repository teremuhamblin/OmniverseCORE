#!/bin/bash
source "$(dirname "$0")/utils.sh"

log_info "Installation des dépendances OMNIVERSE-CORE..."

sudo apt update -y
sudo apt install -y python3 python3-pip adb neofetch htop

log_success "Installation terminée."
