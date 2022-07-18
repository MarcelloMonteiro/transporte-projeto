


Sistema de gestão de transporte

### DEPLOY DOCKER PARA PRODUÇÃO

`docker-compose --file docker-compose-prod.yml up -d`

### DEPLOY DOCKER PARA DEV

`docker-compose up -d`

### INSTALAÇÃO DO PROJETO

- `cp .env.exemple .env`
- `docker-compose run --rm composer install`
- `docker-compose run --rm artisan migrate --seed`
- `docker-compose run --rm artisan key:generate`
- `docker-compose run --rm artisan storage:link`
- `docker-compose run --rm app chmod -R 775 bootstrap storage`
- `docker-compose run --rm app chown -R www-data.www-data bootstrap storage`
