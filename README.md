# Laravel GraphQL API

Este projeto é uma API GraphQL construída com o framework Laravel, utilizando as bibliotecas mll-lab/laravel-graphiql e nuwave/lighthouse.

## Descrição

Esta API oferece uma maneira eficiente de consultar e manipular dados por meio de consultas GraphQL. A biblioteca mll-lab/laravel-graphiql fornece uma interface gráfica amigável para testar e explorar as consultas GraphQL, enquanto a biblioteca nuwave/lighthouse simplifica a implementação de endpoints GraphQL no Laravel.

## Instalação

1. Clone o repositório para sua máquina local:

``````
git clone https://github.com/pedroesteves2803/laravel-graphql-api.git
``````

2. Instale as dependências do Composer:

``````
composer install
``````

3. Configure o arquivo .env com suas configurações de banco de dados.

4. Execute as migrações para criar as tabelas necessárias:

``````
php artisan migrate
``````

5. Inicie o servidor local:

``````
php artisan serve
``````

6. Acesse o GraphiQL em seu navegador:

``````
http://localhost:8000/graphiql

``````

## Uso

Você pode usar o GraphiQL para enviar consultas e mutações GraphQL para a API. Consulte a documentação do Lighthouse para obter informações sobre como definir esquemas GraphQL e implementar resolvers.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.
