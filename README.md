pizza-place
===========

Uses the Laravel framework.

1. Install composer. (https://getcomposer.org/)
2. cd laravel
3. Install dependencies by running *composer install* in the /laravel directory.
4. Configure database in config/database.php
	+ Set up the connection in the connections array (pick the driver according to which DB engine you're using)
	+ Set the connection to use by entering the key of your DB in 'default' on line 29. (i.e. if using the pgsql config, set default to 'pgsql')
5. Deploy the database: php artisan migrate
	+ The database definition can be found in laravel/database/migrations/2014_10_12_141037_create_pizza_customer_tables.php
6. Configure your webserver to point at laravel/public.


+ Main logic is in laravel/app/controller/PizzaController.php
+ Database tables are written using Eloquent ORM. Models are in laravel/app/models: Pizza.php and Customer.php
+ Forms are defined in laravel/app/views.
+ Routes are in laravel/app/routes.php