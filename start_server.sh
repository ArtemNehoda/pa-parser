#!/bin/bash
sudo docker-compose up -d site
#sudo docker-compose run --rm artisan migrate
#sudo docker-compose run --rm npm install
#sudo docker-compose run --rm npm run dev
#sudo docker-compose exec php chown -R $UID:laravel /var/www/html/storage

