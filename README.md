Rodar o comando abaixo deve ser o suficiente para ter o projeto de pé

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs


Em seguida rode um ./vendor/bin/sail artisan migrate

Navegue até http://localhost:8000/ e é isso.