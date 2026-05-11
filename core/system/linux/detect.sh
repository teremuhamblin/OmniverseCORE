#!/bin/bash

DISTRO=$(grep '^ID=' /etc/os-release | cut -d= -f2)

echo "[OMNIVERSE] Distribution détectée : $DISTRO"

case "$DISTRO" in
    ubuntu|linuxmint|debian)
        echo "[OK] Système basé sur Debian détecté."
        ;;
    arch)
        echo "[OK] Système basé sur Arch détecté."
        ;;
    fedora)
        echo "[OK] Fedora détecté."
        ;;
    *)
        echo "[WARN] Distribution inconnue."
        ;;
esac
