# initial setting
```bash
$ git clone https://github.com/Eritaso/sample-laravel.git
$ cd sample-laravel
$ git submodule init
$ git submodule update
$ git clone {Laravelのソースリポジトリ} src
$ cp src/.env.example src/.env
$ cp .env.laradock laradock/.env
$ cd laradock
$ docker-compose up -d --build nginx mysql workspace
$ docker-compose exec workspace composer install
$ docker-compose exec workspace npm install
$ docker-compose exec workspace php artisan key:generate
```
http://localhost:8080/
