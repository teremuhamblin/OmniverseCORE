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
│  │  │  ├─ main.css
│  │  │  ├─ theme-dark.css
│  │  │  └─ theme-light.css
│  │  ├─ js/
│  │  │  ├─ app.js
│  │  │  ├─ particles.js
│  │  │  └─ ui.js
│  │  └─ img/
│  └─ uploads/
│     └─ .htaccess
│
├─ app/
│  ├─ config.php
│  ├─ routes.php
│  ├─ core/
│  │  ├─ Router.php
│  │  ├─ Controller.php
│  │  ├─ View.php
│  │  ├─ Response.php
│  │  └─ Helpers.php
│  ├─ controllers/
│  │  ├─ HomeController.php
│  │  ├─ DocsController.php
│  │  └─ ApiController.php
│  ├─ models/
│  │  └─ ExampleModel.php
│  ├─ services/
│  │  └─ SystemService.php
│  └─ views/
│     ├─ layout.php
│     ├─ home.php
│     ├─ docs.php
│     └─ partials/
│        └─ loader.php
│
├─ api/
│  ├─ index.php
│  └─ routes.php
│
├─ plugins/
│  ├─ README.md
│  └─ example-plugin/
│     ├─ plugin.php
│     └─ config.json
│
├─ storage/
│  ├─ logs/
│  ├─ cache/
│  └─ sessions/
│
├─ vendor/
├─ composer.json
├─ .gitignore
└─ README.md
```

---

### Lancer en local

```bash
php -S localhost:8000 -t public
```
- puis ouvrir ouvrir https://localhost:8000

