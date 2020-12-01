1. Dans le terminale : cd WineOc :
2. Entrer: npm install && npm run dev
3. Ouvrir un nouveau terminal, aller sur mariaDB et entrer : CREATE DATABASE wineoc;
4. Use wineoc;
5. Dans WineOc : cp .env.example .env
6. Dans le fichier .env, modifier si besoin les informations.
7. Dans WineOc : php artisan key:generate
8. Dans WineOc : php artisan serve
9. Dans WineOc : php artisan db:seed

