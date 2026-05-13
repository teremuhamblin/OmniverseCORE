###### README.md >> markdown 
# OmniverseCORE
>Site Web PHP
- Site vitrine + hub de documentation pour le projet **OmniverseCORE**.

### Structure
>OmniverseCORE :
- structure de dossiers, mini-router, layout commun, et un point d’entrée unique.

```md- `public/` : point d’entrée (`index.php`), assets, `.htaccess`
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
│  │  │  └─ main.css
│  │  ├─ js/
│  │  │  └─ app.js
│  │  └─ img/
├─ app/
│  ├─ config.php
│  ├─ routes.php
│  ├─ controllers/
│  │  ├─ HomeController.php
│  │  └─ DocsController.php
│  ├─ views/
│  │  ├─ layout.php
│  │  ├─ home.php
│  │  └─ docs.php
├─ vendor/        (si tu ajoutes Composer plus tard)
├─ .gitignore
└─ README.md
```

---

### Lancer en local

```bash
php -S localhost:8000 -t public
```
- puis ouvrir ouvrir https://localhost:8000

