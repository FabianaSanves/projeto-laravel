# 📋 Aplicação de Lista de Tarefas (To-Do List)

Este é um projeto simples e completo de uma aplicação de lista de tarefas, desenvolvido com o framework Laravel. Ele permite gerenciar tarefas de forma eficiente, praticando os conceitos de desenvolvimento web moderno, como CRUD, validação de dados e estilização.

---

## ✅ Funcionalidades

* **Criar tarefas**: Adicione novas tarefas com validação de campo para garantir que não estejam vazias.
* **Visualizar tarefas**: Liste todas as tarefas na página inicial.
* **Marcar como concluído**: Alterne o status de uma tarefa entre "concluído" e "pendente".
* **Editar tarefas**: Mude o título de uma tarefa já existente.
* **Excluir tarefas**: Remova tarefas permanentemente da lista.
* **Design Responsivo**: Estilização moderna e limpa com o uso do framework Bootstrap.

---

## 🛠️ Tecnologias Utilizadas

* **Backend**: PHP 8.2+
* **Framework**: Laravel 12.x
* **Banco de Dados**: MySQL
* **Ferramentas de Servidor**: Laragon
* **Frontend**: HTML, Blade, CSS (Bootstrap e customizado)
* **Gerenciadores de Pacote**: Composer e npm

---

## 📋 Pré-requisitos

Para rodar este projeto localmente, você precisa ter as seguintes ferramentas instaladas:

* Git
* Composer
* Node.js e npm
* Servidor local com PHP e MySQL (Laragon é recomendado)

---

## ⚙️Instalação e Execução

Siga os passos abaixo para configurar e rodar a aplicação em sua máquina.

1.  **Clone o repositório:**
    Abra seu terminal e clone o projeto do GitHub.

    ```bash
    git clone https://github.com/FabianaSanves/projeto-laravel.git
    ```

2.  **Acesse a pasta do projeto:**

    ```bash
    cd projeto-laravel
    ```

3.  **Instale as dependências:**
    Instale as dependências do PHP e do Node.js.

    ```bash
    composer install
    npm install
    ```

4.  **Configure o ambiente:**
    Copie o arquivo `.env.example` para `.env` e gere a chave da aplicação.

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Configure o banco de dados:**
    Abra o seu cliente de banco de dados (HeidiSQL, por exemplo), crie um novo banco de dados chamado `todo_app` e atualize as informações no seu arquivo `.env`.

    ```
    DB_DATABASE=todo_app
    DB_USERNAME=root
    DB_PASSWORD=****
    ```

6.  **Rode as migrações:**
    Execute as migrações para criar as tabelas no seu banco de dados.

    ```bash
    php artisan migrate
    ```

7.  **Inicie o servidor:**
    Execute o servidor de desenvolvimento do Laravel.

    ```bash
    php artisan serve
    ```

Agora você pode acessar a aplicação no seu navegador em `http://127.0.0.1:8000`.
