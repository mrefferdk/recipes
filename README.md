[![codecov](https://codecov.io/gh/mrefferdk/recipes/branch/main/graphs/badge.svg?token=IZUPCKXS1X)](https://github.com/mrefferdk/recipes)

# Installation

- Clone this repo
- ``cp .env.example .env``
- run
```
docker run --rm \
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php81-composer:latest \
composer install --ignore-platform-reqs
```
- run ``sail up -d``
- run ``sail artisan key:generate``
- run ``sail artisan migrate``

## Useful commands
`sail artisan db:seed` populates your development database with content

`sail test` runs all automatic tests and generates coverage report

`vendor/phpstan/phpstan/phpstan` runs PHP Stan static analysis

`vendor/squizlabs/php_codesniffer/bin/phpcs` runs PHP Codesniffer analysis
