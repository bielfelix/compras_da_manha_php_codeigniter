# Morning Shopping List

A historical CodeIgniter 4 version of a small shopping-list application.

I keep this repository public as part of my PHP progression: the same application idea was first implemented with plain PHP and JavaScript and later rebuilt with CodeIgniter to implement the same domain using framework structure, routing, models, controllers and dependency management.

## Stack

- PHP 7.4 or PHP 8
- CodeIgniter 4
- MySQL
- Composer

## Local setup

Install dependencies:

```bash
composer install
```

Create the local environment file:

```bash
cp .env.example .env
```

Create a MySQL database named `teste_php` and import:

```text
teste_php.sql
```

Start the CodeIgniter development server:

```bash
php spark serve
```

## Repository status

This is a historical implementation, not a reference architecture for my current PHP work.

The repository originally committed framework/vendor files and a local `.env` file. The current branch now ignores environment files, generated dependencies and local operating-system metadata so the project is safer to clone and maintain.

## Related project

The earlier plain PHP/JavaScript implementation is available at:

https://github.com/bielfelix/compras_da_manha_php_js_puro
