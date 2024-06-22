# Biblioteca - Sistema de Cadastro de Livros


# Biblioteca - Sistema de Cadastro de Livros

Este projeto é um sistema de cadastro de livros para uma biblioteca. Ele permite adicionar, visualizar, editar e excluir livros do banco de dados, com uma interface estilizada usando CSS.

## Funcionalidades

- **Cadastrar Livro**: Adicione novos livros à biblioteca.
- **Visualizar Livros**: Liste todos os livros cadastrados.
- **Editar Livro**: Edite as informações de um livro existente.
- **Excluir Livro**: Exclua um livro do banco de dados.

## Configuração do Ambiente

### Requisitos

- XAMPP ou outro servidor local com suporte a PHP e MySQL.
- Navegador web.

### Passos para Configuração

1. **Instale o XAMPP**:
   Baixe e instale o XAMPP a partir do [site oficial](https://www.apachefriends.org/index.html). Inicie o Apache e o MySQL através do painel de controle do XAMPP.

2. **Configuração do Banco de Dados**:
   Acesse o phpMyAdmin através do navegador, indo para `http://localhost/phpmyadmin`.
   Crie um banco de dados chamado `biblioteca`:
   ```sql
   CREATE DATABASE biblioteca;
   ```
   Use o banco de dados `biblioteca` e crie a tabela `livros`:
   ```sql
   USE biblioteca;
   CREATE TABLE livros (
       id INT AUTO_INCREMENT PRIMARY KEY,
       titulo VARCHAR(255),
       autor VARCHAR(255),
       genero VARCHAR(100),
       ano INT,
       sinopse TEXT
   );
   ```

3. **Clone o Repositório**:
   Clone este repositório na pasta `htdocs` do seu XAMPP:
   ```bash
   git clone https://github.com/USERNAME/biblioteca.git
   ```

4. **Execute o Projeto**:
   Abra o navegador e acesse `http://localhost/biblioteca/create_livro.php` para começar a usar o sistema.

## Estrutura do Projeto

```
biblioteca/
├── create_livro.php
├── insert_livro.php
├── view_livros.php
├── update_livro.php
├── edit_livro.php
├── delete_livro.php
├── styles.css
└── README.md
```
