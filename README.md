# Hacker News
Built in Symfony 3
## Installation
Clone repository
Install dependencies
        php composer.phar install
Configure database by updating app/config/parameters.yml
        database_driver   = pdo_mysql
        database_host     = localhost
        database_port     = 
        database_name     = symfony_boilerplate
        database_user     = root
        database_password = 
Create database
        php bin/console doctrine:database:create
Update database with entitites
        php bin/console doctrine:schema:update --force
Go to 
        localhost:8000/
