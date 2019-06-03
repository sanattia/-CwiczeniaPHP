docker-compose build
docker-compose up -d
docker-compose exec php bash -c "cd /home/wwwroot/tdd_kata && composer install"
