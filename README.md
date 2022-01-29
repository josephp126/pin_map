
- Create a new database
- Copy or rename file ```.env.example``` to ```.env```, and edit the file to change the attributes for database to your database configurations (host,username,password etc)
-  Open up Command Prompt(CMD) or Terminal in the project directory and run these commands:
```
composer install
php artisan key:generate
php artisan migrate
php artisan storage:link
```
- Launch web server
```
php artisan serve
