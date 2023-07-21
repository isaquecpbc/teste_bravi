# Desenvolvimento de Avaliação técnica - Angular + PHP.
Pequena aplicação REST API com laravel 10 e FRONTEND com Angular consumindo a api;


### para iniciar o Angular:


1. na raiz do projeto, ``` $ cd test-app ```
2. ``` $ npm install ```
3. ``` $ npm start ```

### Teste o acesso do app em http://localhost:3000/


### Para iniciar o laravel com o docker:


1. na raiz do projeto, ``` $ cd test-api ```
2. ``` $ composer update ```
3. ``` $ docker-compose up -d ```
4. ``` $ docker-compose exec api bash ```
5. ``` $ php artisan key:generate ```
6. ``` $ php artisan optimize:clear ```


#### Para popular o banco de dados:

```
$ docker-compose exec api bash 
```

```
php artisan migrate:fresh --seed
```

### Teste o acesso da api em http://localhost/


## Esta disponível o arquivo para api no postman na raiz do projeto!
