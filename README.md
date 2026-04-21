# API de Notas com Laravel

[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel&logoColor=white)](https://laravel.com/)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

API REST em Laravel para gerenciamento de tarefas, desenvolvida como backend do projeto [consumo-api-react](https://github.com/LucasGabriel408/consumo-api-react).

## Objetivo da API
- Disponibilizar rotas simples para estudo de consumo de API
- Retornar dados em JSON para integração com front-end
- Expor listagem paginada de tarefas (`tasks`) no banco

## Tecnologias
- PHP 8.2+
- Laravel 12
- Banco de dados relacional (configurado via `.env`)

## Endpoints disponíveis
- `GET /somar/{a}/{b}`: retorna a soma de dois valores
- `GET /info`: retorna um JSON de exemplo com dados fixos
- `GET /tasks`: retorna tarefas com paginação

## Pré-requisitos
- PHP 8.2+
- Composer
- Banco de dados configurado no `.env`

## Como rodar o projeto
1. Clonar o repositório
   ```bash
   git clone https://github.com/LucasGabriel408/apilaravel.git
   cd apilaravel
   ```
2. Instalar dependências
   ```bash
   composer install
   ```
3. Criar e configurar o arquivo de ambiente
   ```bash
   copy .env.example .env
   php artisan key:generate
   ```
4. Configurar o banco no `.env` e executar as migrations
   ```bash
   php artisan migrate
   ```
5. Iniciar o servidor
   ```bash
   php artisan serve
   ```
6. Acessar em: `http://127.0.0.1:8000`

## Integração com Front-end
Este backend pode ser consumido por aplicações React, como o projeto [consumo-api-react](https://github.com/LucasGabriel408/consumo-api-react).  
Se necessário, ajuste a URL base da API no front-end para `http://127.0.0.1:8000`.

## Observações
- A rota `/tasks` depende da tabela `tasks` criada pelas migrations
- Caso utilize Docker/XAMPP, mantenha a URL da API consistente com a configuração do front-end
