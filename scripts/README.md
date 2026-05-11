###### README.md >> markdown 
# 🟩 Dossier scripts/
>OmniverseCORE

Le dossier scripts/ regroupe l’ensemble des scripts utilisés par OMNIVERSE-CORE
pour l’installation, l’optimisation système, l’automatisation et le profiling.
Ils sont organisés par langage afin d’assurer une compatibilité multi‑plateformes.

📁 Structure

`
scripts/
├── bash/          # Scripts Linux / macOS
├── powershell/    # Scripts Windows
├── python/        # Scripts cross-platform
└── node/          # Outils CLI et automatisation
`

🐧 Bash (Linux / macOS)

Contient les scripts :
- install.sh — installation des dépendances
- optimize_linux.sh — optimisation Linux
- optimize_macos.sh — optimisation macOS
- optimize_android.sh — optimisation via ADB
- utils.sh — fonctions communes (logs, couleurs)

Exécution :
`bash
bash scripts/bash/optimize_linux.sh
`

🪟 PowerShell (Windows)

Scripts dédiés à Windows :
- install.ps1 — installation des outils nécessaires
- optimize_windows.ps1 — optimisation du système
- utils.ps1 — fonctions utilitaires

Exécution :
`powershell
powershell -ExecutionPolicy Bypass -File scripts/powershell/optimize_windows.ps1
`

🐍 Python (Cross‑platform)

Scripts utilisés pour :
- le profiling système (profiler.py)
- la récupération d’informations (system_info.py)
- l’optimisation intelligente (optimizer.py)

Exécution :
`bash
python3 scripts/python/optimizer.py
`

🟦 Node.js (Automation / CLI)

Scripts JavaScript pour :
- la CLI OMNIVERSE (cli.js)
- les modules système (system.js)
- les outils internes (module.js)

Exécution :
`bash
node scripts/node/cli.js
`

🎯 Objectif du dossier

- Centraliser tous les scripts du framework  
- Assurer une compatibilité totale (Linux, Windows, macOS, Android)  
- Fournir des outils d’optimisation, d’analyse et d’automatisation  
- Servir de base aux modules et services OMNIVERSE‑CORE  

📌 Bonnes pratiques

- Ne jamais modifier les scripts sans tester sur votre OS
- Toujours exécuter les scripts avec les permissions adaptées
- Garder les scripts simples, modulaires et documentés
- Utiliser les utilitaires (utils.sh / utils.ps1) pour les logs

---

Ce dossier constitue la boîte à outils principale d’OMNIVERSE‑CORE, permettant d’automatiser, optimiser et profiler chaque environnement.
`

---
