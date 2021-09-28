# Rector issue reproducer

- clone this repo and enter its directory
- Run:
  - `docker-compose run php composer install`
  - `docker-compose run php vendor/bin/phpunit -c utils/rector/phpunit.xml`
  - `docker-compose run php vendor/bin/phpunit`

Both approaches (standard `phpunit.xml` file location and nested one)
does not work as expected - instead of running tests for `CustomRector`
it ends with PHP fatal error for not found class/interface.