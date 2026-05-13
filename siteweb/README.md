# OmniverseCORE – Site Web PHP
Site vitrine + hub de documentation pour le projet **OmniverseCORE**.

## Structure

- `public/` : point d’entrée (`index.php`), assets, `.htaccess`
- `app/` : config, routes, contrôleurs, vues
- `vendor/` : dépendances (optionnel, via Composer)

## Lancer en local

```bash
php -S localhost:8000 -t public
