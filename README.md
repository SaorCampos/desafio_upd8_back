## DESAFIO :UPD8

API consta com dois CURDS simples de entidades: Ciente, Representantes e Cidade. No projeto de back-end, abordo uma arquitetura hexagonal, dividada em camadas como: Servives, Repositories, Http e Support.

No projeto abordo diversos temas com foco em Programação Orientada a Objetos (POO), Data Transfers Objects (DTOs).

### Aplicação Web desenvolvida com:<br />

-   Laravel 10x/PHP 8.1x<br />
-   banco de dados MySQL<br/>

## Funcionalidades (Atualmente desenvolvidas)

<ul>
    <li>CRUD de Cliente</li>
    <li>CRUD de Representante</li>
    <li>Testes de Integração</li>
</ul>

## PASSOS:

<details>
<summary>Detalhes</summary>

### Requesitos necessários para executar o projeto:

<ul>
    <li>Instalar o PHP versão 8.1</li>
    <li>Instalar o Laravel versão 10.0</li>
    <li>Instalar o MySQL</li>
    <li>Instalar o composer</li>
    <li>Instalar o Postman ou Insomnia</li>
    <li>Instalar uma IDE de sua escolha (PHPStorm / VSCode)</li>
    <li>Instalar um cliente SQL de sua escolha (DBeaver / PHPMyAdmin / MySQL WorkBench)</li>
</ul>

### Executar o projeto:

<ul>
    <li>Clone o projeto ou baixe o arquivo zip</li>
    <li>Adicione o arquivo .env copiando o arquivo .env.example</li>
    <li>Configure as variáveis de ambiente: Defina as credenciais de banco de dados, informações JWT e outras variáveis em .env exemplo:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=upd8
    DB_USERNAME=root
    DB_PASSWORD=senha

</li>

<li>
    Após configurar o .env, execute os comandos abaixo para criar as chaves do projeto e JWT:

```bash
php artisan key:generate
php artisan jwt:secret
```

</li>

<li>
Após criar as chaves, execute o comando abaixo para criar as tabelas no banco de dados:

```bash
php artisan migrate --seed
```

<li>Assim estara criado um usuario com</li>

```
login: admin@admin.com
senha: 123456
```
</li>

</ul>

### Para iniciar o servidor:
`php artisan serve`
Agora acesse o endereço http://localhost:8000/api/rota em seu Postman ou Insomnia
</details>

## TESTES

Caso queira executar todos os testes, use o comando:

```
    php artisan test
```
