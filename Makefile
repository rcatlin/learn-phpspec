composer:
		composer validate
		composer install

cs: composer
		vendor/bin/php-cs-fixer fix --config-file=.php_cs --verbose --diff

spec: composer
		vendor/bin/phpspec run