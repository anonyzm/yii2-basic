bash:
    docker-compose exec php bash

start:
    docker-compose up -d

stop:
    docker-compose stop

composer-install:
    docker-compose exec php bash -c 'cd /app; composer install'

migrate:
    


