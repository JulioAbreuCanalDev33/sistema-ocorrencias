# Sistema de Ocorrências Veiculares

Sistema completo desenvolvido em PHP Laravel para gerenciamento de ocorrências veiculares, com autenticação de usuários, interface azul e branco, e funcionalidades de exportação em PDF e Excel.

## 🚀 Características

- **Autenticação**: Sistema de login com dois tipos de usuário (Admin e Normal)
- **Interface**: Design moderno com cores azul e branco
- **Gestão Completa**: Clientes, Agentes, Atendimentos, Ocorrências e Vigilância Veicular
- **Relatórios**: Exportação em PDF e Excel
- **Responsivo**: Interface adaptável para desktop e mobile
- **Segurança**: Middleware de autenticação e autorização

## 📋 Pré-requisitos

- PHP 8.1 ou superior
- Composer
- Node.js e NPM
- Extensões PHP: sqlite3, mbstring, xml, curl, zip, gd

## 🔧 Instalação

### 1. Extrair o arquivo
```bash
unzip sistema-ocorrencias.zip
cd sistema-ocorrencias
```

### 2. Instalar dependências
```bash
composer install
npm install
```

### 3. Configurar ambiente
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configurar banco de dados
O sistema está configurado para usar SQLite por padrão. Para usar MySQL, edite o arquivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

### 5. Executar migrations
```bash
php artisan migrate
```

### 6. Criar usuários padrão
```bash
php artisan db:seed --class=AdminUserSeeder
```

### 7. Compilar assets
```bash
npm run build
```

### 8. Iniciar servidor
```bash
php artisan serve
```

O sistema estará disponível em: http://localhost:8000

## 👥 Usuários Padrão

### Administrador
- **Email**: admin@sistema.com
- **Senha**: admin123
- **Permissões**: Acesso completo ao sistema

### Usuário Normal
- **Email**: usuario@sistema.com
- **Senha**: usuario123
- **Permissões**: Acesso às funcionalidades básicas

## 📊 Funcionalidades

### Para Todos os Usuários
- ✅ Gerenciar Clientes
- ✅ Gerenciar Agentes
- ✅ Gerenciar Atendimentos
- ✅ Gerenciar Rondas Periódicas
- ✅ Gerenciar Ocorrências Veiculares
- ✅ Gerenciar Vigilância Veicular
- ✅ Exportar relatórios em PDF e Excel

### Apenas para Administradores
- ✅ Gerenciar Prestadores de Serviço
- ✅ Acesso a relatórios administrativos
- ✅ Visualizar dados bancários dos prestadores

## 📈 Relatórios Disponíveis

### Formatos
- **PDF**: Ideal para impressão e compartilhamento
- **Excel**: Dados editáveis para análise

### Tipos de Relatórios
1. **Clientes**: Lista completa de empresas cadastradas
2. **Agentes**: Equipe de campo e suas informações
3. **Atendimentos**: Histórico de atendimentos realizados
4. **Ocorrências Veiculares**: Registro de ocorrências
5. **Vigilância Veicular**: Dados de vigilância e recuperação
6. **Prestadores** (Admin): Informações dos prestadores de serviço

## 🎨 Interface

O sistema utiliza um design moderno com:
- **Cores principais**: Azul (#2563eb) e Branco (#ffffff)
- **Framework CSS**: Bootstrap 5
- **Ícones**: Font Awesome
- **Animações**: Transições suaves e efeitos hover
- **Responsividade**: Adaptável a diferentes tamanhos de tela

## 🔒 Segurança

- Autenticação obrigatória para todas as rotas
- Middleware de autorização para funções administrativas
- Proteção CSRF em formulários
- Validação de dados de entrada
- Hash seguro de senhas

## 📁 Estrutura do Banco de Dados

### Tabelas Principais
- `users`: Usuários do sistema
- `clientes`: Empresas clientes
- `agentes`: Equipe de campo
- `atendimentos`: Registros de atendimentos
- `rondas_periodicas`: Rondas programadas
- `ocorrencias_veiculares`: Ocorrências registradas
- `vigilancia_veicular`: Dados de vigilância
- `tabela_prestadores`: Prestadores de serviço (admin)
- `fotos_atendimentos`: Fotos dos atendimentos
- `fotos_vigilancia_veicular`: Fotos da vigilância

## 🚀 Deploy em Produção

### Configurações Recomendadas
1. Configure um servidor web (Apache/Nginx)
2. Use MySQL ou PostgreSQL em produção
3. Configure SSL/HTTPS
4. Ajuste as permissões de arquivos
5. Configure backup automático do banco

### Variáveis de Ambiente
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://seudominio.com
```

## 🛠️ Tecnologias Utilizadas

- **Backend**: PHP 8.1, Laravel 10
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5
- **Banco de Dados**: SQLite (desenvolvimento), MySQL (produção)
- **Exportação**: DomPDF, Maatwebsite Excel
- **Autenticação**: Laravel UI
- **Ícones**: Font Awesome

## 📞 Suporte

Para dúvidas ou problemas:
1. Verifique os logs em `storage/logs/laravel.log`
2. Confirme se todas as dependências estão instaladas
3. Verifique as permissões de arquivos e pastas

## 📝 Licença

Este sistema foi desenvolvido especificamente para gerenciamento de ocorrências veiculares.

---

**Desenvolvido com ❤️ usando Laravel**

