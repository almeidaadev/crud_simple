# 📋 CRUD Simple — PHP + PDO + MySQL

> ⚠️ **Projeto em desenvolvimento.** Funcionalidades podem estar incompletas.

Sistema de CRUD (Create, Read, Update, Delete) simples desenvolvido em PHP puro com PDO e MySQL. O projeto utiliza uma arquitetura organizada em pastas separando conexão, ações, páginas e scripts frontend.

---

## 🗂️ Estrutura do Projeto

```
crud_simple/
├── Database/
│   └── Connection.php       # Configuração e conexão com o banco via PDO
├── actions/
│   └── users.php            # API interna que processa as ações (create, delete, etc.)
├── helpers/                 # Funções auxiliares reutilizáveis
├── langs/                   # Arquivos de idioma / internacionalização
├── pages/                   # Páginas do sistema (listagem, formulários, etc.)
├── scripts/                 # Arquivos JavaScript do frontend
└── index.php                # Ponto de entrada da aplicação
```

---

## ⚙️ Requisitos

- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Servidor local (XAMPP, Laragon, WAMP, etc.)
- Extensão PDO habilitada no PHP

---

## 🚀 Como Rodar o Projeto

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/almeidaadev/crud_simple.git
   ```

2. **Mova para a pasta do servidor:**
   ```
   xampp/htdocs/crud_simple
   ```

3. **Crie o banco de dados:**
   ```sql
   CREATE DATABASE crud;

   USE crud;

   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(150) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

4. **Configure a conexão** em `Database/Connection.php`:
   ```php
   $host = 'localhost';
   $username = 'root';
   $dbname = 'crud';
   $password = '';
   ```

5. **Acesse no navegador:**
   ```
   http://localhost/crud_simple
   ```

---

## 🔌 API de Ações (`actions/users.php`)

Todas as requisições retornam **JSON**. A ação é definida via `$_POST["action"]` ou `$_GET["action"]`.

### ➕ Criar usuário

| Campo    | Método | Tipo   | Obrigatório |
|----------|--------|--------|-------------|
| action   | POST   | string | ✅ (`"create"`) |
| name     | POST   | string | ✅ |
| email    | POST   | string | ✅ |
| password | POST   | string | ✅ |

**Resposta de sucesso:**
```json
{ "status": true, "message": "Usuário criado com sucesso." }
```

**Resposta de erro:**
```json
{ "status": false, "message": "Todos os campos são obrigatórios" }
```

---

### 🗑️ Deletar usuário

| Campo  | Método | Tipo    | Obrigatório |
|--------|--------|---------|-------------|
| action | GET    | string  | ✅ (`"delete"`) |
| id     | GET    | integer | ✅ |

**Resposta de sucesso:**
```json
{ "status": true, "message": "Usuário deletado com sucesso." }
```

---

## 🔒 Segurança

- Senhas são armazenadas com hash usando `password_hash()` + `PASSWORD_BCRYPT`
- Queries utilizam **prepared statements** via PDO (proteção contra SQL Injection)
- Saídas HTML utilizam `htmlspecialchars()` (proteção contra XSS)
- Erros são capturados com `try/catch` e retornados em JSON

---

## 🛣️ Roadmap

- [x] Conexão com banco de dados via PDO
- [x] Criar usuário
- [x] Deletar usuário
- [ ] Listar usuários
- [ ] Editar usuário
- [ ] Validação de e-mail duplicado
- [ ] Autenticação / Login
- [ ] Proteção CSRF

---

## 🧑‍💻 Autor

Feito por [almeidaadev](https://github.com/almeidaadev)