# Symfony4 - The Spacebar Project

To run the app: <br />
php -S 127.0.0.1:8000 -t public 
<br />or <br />
./bin/console server:run

## Services
./bin/console debug:autowiring

## Routing
./bin/console debug:router

## Cache
./bin/console cache:clear

## Doctrine
Create a table: <br />
./bin/console make:entity <br />

Create a migration: <br />
./bin/console make:migration

Apply migration: <br />
./bin/console doctrine:migrations:migrate <br />
./bin/console doctrine:migrations:status

Database query <br />
./bin/console doctrine:query:sql 'SELECT * from tag'

Drop all tables in the database <br />
./bin/console doctrine:schema:drop --full-database --force

## Twig
./bin/console make:twig-extension

## Fixtures
./bin/console make:fixture<br />
./bin/console doctrine:fixtures:load

## Create controller
./bin/console make:controller

## Security
Make authenticator:<br />
php bin/console make:auth

Make voter:<br />
php bin/console make:voter


##
Based on symfonycasts tutorials:
1. Stellar Development with Symfony 4
https://symfonycasts.com/screencast/symfony

2. Symfony 4 Fundamentals: Services, Config & Environments
https://symfonycasts.com/screencast/symfony-fundamentals

3. Doctrine & the Database
https://symfonycasts.com/screencast/symfony-doctrine

4. Mastering Doctrine Relations!
https://symfonycasts.com/screencast/doctrine-relations

5. Symfony Security: Beautiful Authentication, Powerful Authorization
https://symfonycasts.com/screencast/symfony-security/firewalls-authenticator
