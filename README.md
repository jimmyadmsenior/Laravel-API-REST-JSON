# Laravel API REST JSON

![Laravel](https://img.shields.io/badge/Laravel-Framework-red?style=flat-square&logo=laravel)
![API](https://img.shields.io/badge/API-REST-blue?style=flat-square)
![License](https://img.shields.io/badge/license-MIT-green?style=flat-square)

## ✨ Sobre o Projeto

Este repositório apresenta uma API RESTful desenvolvida em [Laravel](https://laravel.com/), focada em fornecer respostas no formato JSON. O objetivo é servir como base para aplicações modernas, integrações e consumo por frontends, mobile apps ou outros sistemas.

---

## 🚀 Funcionalidades
- Cadastro, listagem, atualização e remoção de usuários
- Gerenciamento de pacientes (CRUD)
- Autenticação via token (Laravel Sanctum ou Passport)
- Respostas padronizadas em JSON
- Validação de dados e tratamento de erros
- Estrutura pronta para testes automatizados

---

## 🛠️ Tecnologias Utilizadas
- PHP 8+
- Laravel 10+
- SQLite (padrão, facilmente adaptável para outros bancos)
- Composer
- PHPUnit

---

## 📦 Instalação

1. **Clone o repositório:**
	```bash
	git clone https://github.com/jimmyadmsenior/Laravel-API-REST-JSON.git
	cd Laravel-API-REST-JSON/api-receptora
	```
2. **Instale as dependências:**
	```bash
	composer install
	```
3. **Copie o arquivo de ambiente:**
	```bash
	cp .env.example .env
	```
4. **Gere a chave da aplicação:**
	```bash
	php artisan key:generate
	```
5. **Configure o banco de dados:**
	- Por padrão, utiliza SQLite. Edite `.env` se desejar outro banco.
	- Para SQLite, garanta que `DB_CONNECTION=sqlite` e `DB_DATABASE` aponte para o arquivo correto.
6. **Execute as migrations:**
	```bash
	php artisan migrate
	```
7. **(Opcional) Popule o banco com seeders:**
	```bash
	php artisan db:seed
	```
8. **Inicie o servidor:**
	```bash
	php artisan serve
	```

---

## 🔐 Autenticação

A API utiliza autenticação baseada em tokens. Para acessar rotas protegidas:
- Realize login e obtenha o token
- Envie o token no header `Authorization: Bearer {token}`

---

## 📚 Exemplos de Endpoints

### Usuários
- `GET /api/users` — Lista usuários
- `POST /api/users` — Cria usuário
- `GET /api/users/{id}` — Detalha usuário
- `PUT /api/users/{id}` — Atualiza usuário
- `DELETE /api/users/{id}` — Remove usuário

### Pacientes
- `GET /api/pacientes` — Lista pacientes
- `POST /api/pacientes` — Cria paciente
- `GET /api/pacientes/{id}` — Detalha paciente
- `PUT /api/pacientes/{id}` — Atualiza paciente
- `DELETE /api/pacientes/{id}` — Remove paciente

### Autenticação
- `POST /api/login` — Login do usuário
- `POST /api/logout` — Logout do usuário

#### Exemplo de requisição (login):
```http
POST /api/login
Content-Type: application/json

{
  "email": "usuario@exemplo.com",
  "password": "senha"
}
```

#### Exemplo de resposta:
```json
{
  "token": "seu_token_aqui",
  "user": {
	 "id": 1,
	 "name": "Usuário Exemplo",
	 "email": "usuario@exemplo.com"
  }
}
```

---

## 🧪 Testes

Execute os testes automatizados com:
```bash
php artisan test
```

---

## 📄 Licença

Este projeto está sob licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---

## 🤝 Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues, enviar pull requests ou sugerir melhorias.

---

## 📫 Contato

Dúvidas, sugestões ou feedback? Entre em contato:
- [Seu LinkedIn](https://www.linkedin.com/in/seu-perfil)
- [Seu Email](mailto:seu@email.com)

---

> Feito com ❤️ usando Laravel.

