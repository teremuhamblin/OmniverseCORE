#!/bin/bash

echo "[OMNIVERSE] Optimisation Linux..."

# Nettoyage
sudo apt autoremove -y 2>/dev/null
sudo apt autoclean -y 2>/dev/null

# Performance CPU
sudo systemctl disable bluetooth.service 2>/dev/null
sudo systemctl disable cups.service 2>/dev/null

echo "[SUCCESS] Optimisation Linux terminée."
