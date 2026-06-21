# CRUD simples

### Descrição
- **Resumo:** Projeto de exemplo que demonstra operações CRUD usando PDO em PHP.
- É apenas para fins educativos

### Pré-requisitos
- **PHP:** versão 7.4+ instalada.
- **Servidor web:** XAMPP (Apache + MySQL) recomendado para testes locais.
- **MySQL/MariaDB:** banco de dados disponível para criação do schema.

### Configuração de credenciais
- **Modelo de credenciais:** crie um banco de dados e copie `config.example.php` para `config.php` e preencha as variáveis de conexão (`$ENV_HOST`, `$ENV_DBNAME`, `$ENV_USERNAME`, `$ENV_PASSWORD`). Criar a tabela `usuarios` (DDL recomendada)
- A aplicação espera uma tabela `usuarios` com colunas básicas: `id`, `username`, `name`, `password`.

```sql
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  name VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
) 
```

### Testando localmente
- Atualize `config.php` com as credenciais criadas.
- Inicie Apache e MySQL no XAMPP.
- Teste os endpoints via browser ou curl:


### Observações sobre os arquivos do projeto
- **config.example.php:** modelo com as variáveis de conexão.
- **connection.php:** cria a conexão PDO (MySQL). Recomenda-se revisar para incluir charset e modo de erro.
- **insert.php / read.php / update.php / delete.php:** exemplos simples de operações CRUD na tabela `usuarios`.