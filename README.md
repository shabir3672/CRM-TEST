
## How to Install
1. Clone the repo 
2. `$ cd Mini-CRM`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Create **database on MySQL** or **SQLite**
7. **Set database credentials** on `.env` file
8. `$ php artisan migrate --seed`
9. `$ php artisan storage:link`
10. `$ php artisan serve`
11. Login with :
    - email : `admin@admin.com`
    - password : `password`
