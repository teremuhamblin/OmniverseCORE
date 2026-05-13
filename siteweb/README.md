###### README.md >> markdown 
# OmniverseCORE
>Site Web PHP
- Site vitrine + hub de documentation pour le projet **OmniverseCORE**.
- Mini-framework PHP modulaire pour l’écosystème.

## 🚀 Fonctionnalités
```text
- Router interne (PSR-like)
- Système de vues avec layout global
- Loader cyber-physique OmniverseCORE
- Architecture MVC légère
- Autoload PSR-4 via Composer
- Structure scalable (services, models, core)
```

## ▶️ Lancer le projet
```bash
php -S localhost:8000 -t public
### Structure
>OmniverseCORE :
- structure de dossiers, mini-router, layout commun, et un point d’entrée unique.

```md
- `public/` : point d’entrée (`index.php`), assets, `.htaccess`
- `app/` : config, routes, contrôleurs, vues
- `vendor/` : dépendances (optionnel, via Composer)
```

Structure de base du projet
```text
OmniverseCORE-site/
├─ public/
│  ├─ index.php
│  ├─ .htaccess
│  ├─ assets/
│  │  ├─ css/
│  │  ├─ js/
│  │  └─ img/
│  └─ uploads/          ← sécurisé + .htaccess
├─ app/
│  ├─ config.php
│  ├─ routes.php
│  ├─ controllers/
│  ├─ models/           ← NOUVEAU (future DB)
│  ├─ services/         ← NOUVEAU (API, logique)
│  ├─ core/             ← NOUVEAU (Router, View, Helpers)
│  └─ views/
├─ storage/             ← logs, cache, sessions
│  ├─ logs/
│  ├─ cache/
│  └─ sessions/
├─ vendor/
├─ .gitignore
├─ composer.json        ← NOUVEAU (autoload PSR-4)
└─ README.md
```

---

### Lancer en local

```bash
php -S localhost:8000 -t public
```
- puis ouvrir ouvrir https://localhost:8000

