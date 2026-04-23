Sobre o Projeto

Este projeto consiste em um sistema web simples desenvolvido em PHP para cadastro, visualização e alteração de dados em um banco de dados.

O sistema implementa operações básicas de CRUD, com foco em manipulação de registros (provavelmente cidades, com base no arquivo insere_cidade.php).

🛠️ Tecnologias Utilizadas
PHP
HTML
SQL (MySQL)
Servidor local (XAMPP/WAMP/Laragon)

📁 Estrutura do Projeto
cadastro-1.php
→ Página com formulário para cadastro de dados
insere_cidade.php
→ Responsável por receber os dados do formulário e inserir no banco
manutencao_dados.php
→ Exibe os dados cadastrados (listagem)
1form-alter.php
→ Formulário para alteração dos dados existentes
🔧 Funcionalidades Implementadas
✅ Inserção de dados no banco de dados
📄 Listagem de registros cadastrados
✏️ Alteração de registros existentes
🔗 Integração entre páginas PHP e banco de dados
🔄 Fluxo do Sistema
Usuário acessa cadastro-1.php
Preenche o formulário
Os dados são enviados para insere_cidade.php
Os dados são armazenados no banco
manutencao_dados.php exibe os registros
Usuário pode editar através de 1form-alter.php
