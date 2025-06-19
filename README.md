# 🎬 Laravel Movie API

Esta é uma API RESTful construída com Laravel para autenticação de usuários e gerenciamento de filmes. Usuários autenticados podem cadastrar, visualizar, atualizar e deletar seus próprios filmes.

---

## 📦 Requisitos

- PHP 8.x
- Composer
- Docker / Docker Compose
- Laravel 10+
- Banco de dados configurado MySQL
- JWT para autenticação via token
- [Extra] Php MyAdmin 

---

## 🚀 Instalação

```bash
    git clone https://github.com/marcoantn020/manager-movie-backend.git
    cd manager-movie-backend
    docker-compose up -d
    docker-compose exec app zsh
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate --seed
    php artisan storage:link
```
---

## 🔐 Autenticação

A API utiliza autenticação via token (JWT). Após o `signup` ou `login`, inclua o token nos headers das requisições protegidas:

```
Authorization: Bearer {token}
```

---

## 📚 Endpoints

### ✅ Health Check
`GET /`

> Retorna um JSON com status da API.

---

### 👤 Autenticação

| Método | Endpoint        | Descrição                     |
|--------|------------------|-------------------------------|
| POST   | `/signup`        | Registro de novo usuário      |
| POST   | `/login`         | Login com e-mail e senha      |
| POST   | `/logout`        | Logout e invalida o token     |
| POST   | `/refresh`       | Renova o token JWT            |
| GET    | `/me`            | Retorna dados do usuário logado *(requer token)* |
| POST   | `/update-me`     | Atualiza dados do usuário *(requer token)* |

---

### 🎥 Filmes (Requer Autenticação)

| Método | Endpoint            | Descrição                          |
|--------|----------------------|------------------------------------|
| GET    | `/movies`            | Lista todos os filmes do usuário   |
| GET    | `/movies/{id}`       | Detalhes de um filme específico    |
| POST   | `/movies`            | Cadastra um novo filme             |
| PUT    | `/movies/{id}`       | Atualiza um filme existente        |
| DELETE | `/movies/{id}`       | Remove um filme                    |

---

## 📂 Uploads

Imagens de perfil são salvas em:  
```
storage/app/public/user_images/
```

Acesso público via URL:
```
http://localhost:8000/storage/user_images/{nome_da_imagem}
```

---

## 📎 Exemplo de resposta de erro

```json
{
  "message": "Erro de validação.",
  "errors": {
    "email": ["O campo e-mail é obrigatório."]
  }
}
```

---

---

## 🧪 Testes 
##### ⚠️ Necessário criar o banco app_test, veja como mais abaixo

```bash
  ./vendor/bin/pest
  ou 
  php artisan test
```

---
## 🔐 Acesso ao phpMyAdmin

- **URL de acesso**: [http://localhost:8080](http://localhost:8080)
- **Usuário**: `root`
- **Senha**: `root`

## 🛠️ Criando o banco de dados `app_test`

Após acessar o phpMyAdmin:

1. Clique em "**SQL**" no menu superior.
2. Cole e execute o seguinte comando:

```sql
CREATE DATABASE app_test CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Pronto! O banco de dados `app_test` estará criado e disponível para uso.

### ⚠️ Observações

- Certifique-se de que os contêineres do MySQL e do phpMyAdmin estão rodando corretamente.
---

## 🧾 Licença

MIT
