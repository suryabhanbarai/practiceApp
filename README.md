Prerequisites
    ensure you have the following installed on your system:
    -> PHP 8.1 or Higher
    -> Composer
    -> MySQL
    -> Laravel 12
    
Installation steps:
1. Clone the repository:
    git clone https://github.com/suryabhanbarai/practiceApp.git
    cd practiceApp

2. Install Dependencies
    composer install

3. copy and configure Environment file
    cp .env.example .env
    update .env with your database credentials
         DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=practiceapp
         DB_USERNAME=root
         DB_PASSWORD=

4. Generate Application Key
    php artisan key:generate

5. Run Migrations and Seed Database
   php artisan migrate --seed

6. Serve the Application
    php artisan serve
    
    your API should now be accessible at:
    http://127.0.0.1:8000
