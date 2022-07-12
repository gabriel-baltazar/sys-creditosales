<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Como executar projeto

- Clone o repositorio
- `git clone https://github.com/gabriel-baltazar/sys-creditosales`
- Rode os comandos abaixo na raiz do projeto para instalar todas as dependencias
    - `composer install && npm install`
- Inicie o docker na maquina e rode o comando abaixo
    - `./vendor/bin/sail up`
- Altere o arquivo .env.example para .env
- Rode as migrações com o comando abaixo:
    - `./vendor/bin/sail artisan migrate`
- Entre no `localhost` e pronto