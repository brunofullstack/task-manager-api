# Gestão de Usuários e Lista de Tarefas API

# Instalação
1. Clone o repo
```
https://github.com/iamrafehdev/laravel-lumen-REST-API-jwt-auth.git
```

2. Instale pacotes composer
```
cd laravel-lumen-rest-api-jwt-auth
$ composer install
```

3. Setup
```
copie o conteúdo de .env.example e renomei para .env
$ php artisan key:generate
put database credentials in .env file
$ php artisan jwt:secret
```

4. Migrate e inserção de dados
```
$ php artisan migrate
$ php artisan tinker
$ factory(App\User::class, 10)->create()
$ factory(App\Post::class, 50)->create()
```
