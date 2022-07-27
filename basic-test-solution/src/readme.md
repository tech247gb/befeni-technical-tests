# Test App

## Installation

Test App requires [PHP](https://www.php.net/) v7+ to run.

Install the dependencies using [Composer](https://getcomposer.org/).

```sh
cd test
composer install
```

## Run

You can run the CLI application:
```sh
cd test/src
php src/main.php
```
> Note: Instructions need to be updated on `src/data/instructions.txt` file.


## Run Test
Run the unit tests using:-

```sh
cd test
./vendor/bin/phpunit test/CalculatorTest.php
```