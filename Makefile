up:
	docker-compose up -d --build

test:
	./vendor/bin/phpunit --testdox

bash_php:
	docker-compose exec --workdir=/var/www/html/code php bash

phpunit:
	docker-compose exec --workdir=/var/www/html/code php vendor/bin/phpunit
