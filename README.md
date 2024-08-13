## Configuração Docker e arquivo .env

Crie o arquivo .env

```sh
cp .env.example .env
```

Atualizar as variáveis de ambiente do arquivo .env

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=blog-laravel
DB_USERNAME=root
DB_PASSWORD=root
```

Suba os containers do projeto

```sh
docker compose up -d
```

Acesse o container

```sh
docker compose exec -it laravel_blog bash
```

Instale as dependências do projeto

```sh
composer install
```

Gere a key do projeto Laravel

```sh
php artisan key:generate
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)