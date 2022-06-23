# Installation

1. Run `git clone git@github.com:George1Meshveliani/Laratask.git`
2. Run `composer update`
3. Run `composer install`
4. Run `cp .env.example .env.`
5. Run `php artisan key:generate`
6. Run `php artisan migrate`
7. Run `php artisan serve`
8. Go to link http://localhost:8000
9. phpmyadmin: http://localhost:8080

To launch other services like e.g `phpmyadmin` and get all working endpoints run `./vendor/bin/sail up` or `docker-compose up`.

Before the installation make sure that other services like apache and mysql are stopped.
You can run `sudo service apache2 stop` and `sudo service mysql stop`.
