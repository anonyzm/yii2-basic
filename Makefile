##############################################
#                                            #
#                  USAGE                     #
#                                            #
#          make env                          #
#          ** edit .env file **              #
#          make build                        #
#                                            #
##############################################

# environment initalization
env:
    mv ./env.dist ./app/.env
    ln -s ./app/.env ./.env

# project compilation
build: up composer-install migrate create-user

# docker containers up
up:
    docker-compose up -d

# docker containers down
down:
    docker-compose stop

# installing composer dependencies
composer-install:
    docker-compose exec php bash -c 'cd /app; composer install'

# proceeding migrations
migrate:
    docker-compose exec php php /app/yii migrate --interactive=0

# init default user
create-user:
    docker-compose exec php php /app/yii tools/create-default-user

# shortcut to enter php container
bash:
    docker-compose exec php bash




