install:
	composer install

autoload:
	composer dump-autoload 

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

validate:
	composer validate

update:
	composer update
