###### README.md >> markdown 
# 🟩 Dossier core/ 
> Et ses sous-dossiers

`markdown

Core System — OMNIVERSE-CORE

Le dossier core/system/ contient l’ensemble des composants responsables de
l’analyse, de la détection et de l’optimisation des systèmes d’exploitation
supportés par OMNIVERSE-CORE.  
Il s’agit du cœur technique du framework pour tout ce qui touche au matériel,
aux performances et aux opérations bas niveau.

📁 Structure

```text
core/system/
├── linux/      # Scripts et modules pour Linux
├── windows/    # Scripts PowerShell pour Windows
├── macos/      # Scripts pour macOS
└── android/    # Scripts ADB pour Android
```

🐧 Linux

Contient :
- detect.sh — détection de la distribution
- optimize.sh — optimisation système
- hardware_info.sh — informations matérielles
- modules/ — modules spécialisés (CPU, RAM, réseau)

Exécution :
`bash
bash core/system/linux/optimize.sh
`

🪟 Windows

Contient :
- detect.ps1 — détection de la version Windows
- optimize.ps1 — optimisation du système
- hardware_info.ps1 — informations matérielles

Exécution :
`powershell
powershell -ExecutionPolicy Bypass -File core/system/windows/optimize.ps1
`

🍏 macOS

Contient :
- detect.sh — détection de la version macOS
- optimize.sh — optimisation du système
- hardware_info.sh — informations matérielles

Exécution :
`bash
bash core/system/macos/optimize.sh
`

🤖 Android (ADB)

Contient :
- detect.sh — détection des appareils connectés
- optimize.sh — optimisation Android via ADB
- hardware_info.sh — informations matérielles

Exécution :
`bash
bash core/system/android/optimize.sh
`

🎯 Objectif du dossier

- Fournir une couche d’abstraction système unifiée  
- Offrir des optimisations natives pour chaque OS  
- Permettre l’extension via des modules spécialisés  
- Servir de base aux pipelines IA et DevOps  
- Garantir une compatibilité multi‑plateformes robuste  

📌 Bonnes pratiques

- Toujours tester les scripts sur l’OS cible  
- Ne pas modifier les modules sans validation  
- Garder les scripts simples, modulaires et documentés  
- Utiliser les utilitaires du dossier scripts/ pour les logs  

---

Ce dossier constitue la fondation système d’OMNIVERSE‑CORE :  
détection, optimisation, analyse matérielle et modules avancés.
`

---
