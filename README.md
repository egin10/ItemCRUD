Learn CRUD and Auth using Laravel 5.3.23
---
- clone this repo using `git clone https://github.com/egin10/ItemCRUD.git`
- install packages from composer.json using `composer install`
- copy .env.example to .env
- edit file .env DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= yourdatabase
DB_USERNAME= youruserdatabase
DB_PASSWORD= yourpassdatabase
- migrate database in database\migrations\2016_11_20_110016_crate_items_table.php using `php artisan migrate`
- run `php artisan serve`
- open browser and open link `http://localhost:8000`

Thank's
---
egin10
