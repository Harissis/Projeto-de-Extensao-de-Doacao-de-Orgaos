Documentação do Back-end (Laravel)

 Integrantes do Projeto

1. Rafael Alves Harissis
2. Luiz Felipe Santos Freitas
3. Jamilly De Souza Oliveira
4. Fabricio Pereira da Costa Filho


Quero Doar! - Back-end (Laravel)

Quero Doar! é uma plataforma de doação de órgãos, conectando doadores, pontos de coleta e beneficiários. Esta documentação descreve o processo de configuração e execução do back-end da aplicação, que é desenvolvido utilizando o framework Laravel.

Tecnologias Utilizadas

PHP: Linguagem de programação utilizada.
Laravel: Framework PHP para a criação da API RESTful.
MySQL: Banco de dados utilizado para armazenamento de dados.
Composer: Gerenciador de dependências do PHP.
Pré-requisitos
PHP 7.4 ou superior.
Composer (faça o download em getcomposer.org).
MySQL ou MariaDB.
Instalação e Configuração

1. Clonar o Repositório
Clone o repositório do back-end para a sua máquina local:

bash
Copiar código
git clone https://github.com/Harissis/Projeto-de-Extensao-de-Doacao-de-Orgaos-back
cd Quero-Doar-backend
2. Instalar as Dependências
Use o Composer para instalar as dependências do Laravel:

bash
Copiar código
composer install
3. Configuração do Banco de Dados
Crie um banco de dados MySQL para a aplicação. Após isso, copie o arquivo .env.example para .env e configure as credenciais do banco de dados:

bash

cp .env.example .env
No arquivo .env, configure as informações de banco de dados:

plaintext

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=quero_doar
DB_USERNAME=root
DB_PASSWORD=

4. Gerar a Chave de Aplicação
   
Gere a chave de aplicação Laravel:

bash


php artisan key:generate

5. Rodar as Migrações

Execute as migrações para criar as tabelas no banco de dados:

bash
Copiar código
php artisan migrate

6. Rodar o Servidor de Desenvolvimento
Para rodar a aplicação localmente, use o seguinte comando:

bash

php artisan serve
O servidor estará disponível em http://127.0.0.1:8000.

Estrutura de Diretórios

/app: Contém os controladores, modelos e lógica de negócios.
/routes: Define as rotas da aplicação.
/database/migrations: Arquivos de migração para criar as tabelas no banco de dados.
/resources/views: Contém as views Blade (caso haja uso de Blade no backend).
/public: Arquivos públicos como imagens e CSS para o back-end.
Rotas Principais
POST /doadores: Cadastro de doador.
GET /doadores: Listar todos os doadores.
GET /pontos-de-coleta: Listar pontos de coleta.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
















