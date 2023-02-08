test:
	php artisan test

lint:
	composer exec --verbose phpcs -- --standard=PSR12 app tests

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 app tests