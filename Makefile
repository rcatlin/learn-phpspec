.PHONY: spec

composer:
		composer validate
		composer install

cs: composer
		vendor/bin/php-cs-fixer fix --config-file=.php_cs --verbose --diff

spec:
		vendor/bin/phpspec run