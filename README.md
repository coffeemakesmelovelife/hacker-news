# Hacker News
Built in Symfony 3
## Installation
Clone repository
### Install dependencies
`php composer.phar install`
### Configure database by updating app/config/parameters.yml
### Create database
`php bin/console doctrine:database:create`
### Update database with entitites
`php bin/console doctrine:schema:update --force`
### Go to 
`localhost:8000/`
