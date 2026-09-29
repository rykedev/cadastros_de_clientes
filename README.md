# 🛒 Sistema de Cadastro de Produtos em PHP + SQLite

Projeto simples de cadastro de produtos desenvolvido em PHP puro e integrado com base de dados SQLite via PDO[cite: 1]. Inclui validação de formulários no lado do servidor e notificações dinâmicas que desaparecem automaticamente[cite: 1].

---

## 🚀 Funcionalidades

* **Formulário de Cadastro:** Interface para inserção do nome e preço do produto[cite: 1].
* **Validação PHP:**
  * Impede o envio de campos de nome vazios[cite: 1].
  * Garante que o preço seja um valor numérico estritamente positivo[cite: 1].
* **Base de Dados Automática:** Criação automática do ficheiro SQLite (`exercicio.db`) na pasta raiz, dispensando a configuração prévia do MySQL[cite: 1].
* **Feedback ao Utilizador:** Apresenta mensagens de erro ou sucesso na tela, que são ocultadas após 5 segundos via JavaScript[cite: 1].

---

## 🛠️ Tecnologias Utilizadas

* **HTML5:** Estrutura da página e formulário[cite: 1].
* **PHP (PDO):** Lógica do servidor, validação e manipulação de base de dados[cite: 1].
* **SQLite3:** Armazenamento local leve dos dados.
* **JavaScript:** Ocultação temporária de notificações na página[cite: 1].

---

## 📁 Estrutura de Ficheiros

```text
.
├── index.php         # Script principal com HTML, PHP e JavaScript[cite: 1]
├── exercicio.db      # Ficheiro de base de dados SQLite gerado automaticamente[cite: 1, 2]
└── README.md         # Documentação do projeto
