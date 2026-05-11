###### README.md >> markdown 
# 🟩 Dossier config/
>OmniverseCORE

Ce dossier contient l’ensemble des fichiers de configuration utilisés par le framework OMNIVERSE-CORE.  
Toutes les options globales, paramètres système, réglages IA, variables d’environnement et valeurs par défaut sont centralisés ici.

📁 Contenu

- app.yaml  
  Configuration principale du framework : API, dashboard, sécurité, fonctionnalités activées.

- settings.toml  
  Paramètres avancés : IA, DevOps, performance, chemins internes, modules.

- defaults.ini  
  Valeurs par défaut globales : optimisation système, logging, sécurité.

- env.example  
  Modèle de fichier d’environnement. Sert de base pour créer votre .env.

🎯 Objectif

Centraliser toutes les configurations du projet afin de garantir :

- une structure propre et professionnelle  
- une séparation claire entre code et configuration  
- une maintenance simplifiée  
- une compatibilité multi‑plateformes  
- une extensibilité maximale pour les modules et services  

🛠️ Utilisation

Charger les configurations dans vos scripts

Bash :
`bash
source config/defaults.ini
`

Python :
`python
import yaml
config = yaml.safe_load(open("config/app.yaml"))
`

Node.js :
`js
import fs from "fs";
const config = JSON.parse(fs.readFileSync("config/settings.toml"));
`

Créer votre fichier .env

Copiez le modèle :
`bash
cp config/env.example .env
`

Puis remplissez vos valeurs personnelles.

📌 Bonnes pratiques

- Ne jamais modifier defaults.ini directement : utilisez app.yaml ou .env.
- Ne jamais versionner votre .env.
- Toujours valider les modifications de configuration avant un commit.
- Garder les fichiers simples, lisibles et documentés.

---

Ce dossier est un élément central d’OMNIVERSE‑CORE : il garantit la cohérence, la modularité et la stabilité du framework.
`

---
