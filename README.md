# PHP-
# Guia de Uso do PHP no Desenvolvimento Web + mini landing page
<img src="https://github.com/LaiFrance/PHP-/assets/91226847/7a4bf445-071a-46ec-b8a7-7e136c8faa27" alt="OIG (2)" width="200" height="200">

## Introdução
Este README tem como objetivo fornecer uma visão abrangente sobre o uso do PHP (Hypertext Preprocessor) no desenvolvimento web, explicando suas principais tags e como incorporá-lo em documentos HTML.

## PHP: Uma Visão Geral
O PHP é uma linguagem de script amplamente utilizada para o desenvolvimento web. Sua principal característica é a incorporação de código diretamente no HTML, permitindo a criação de páginas dinâmicas e interativas. A seguir, abordaremos as principais tags PHP e como elas funcionam.

## Tags PHP Principais
| Tag                        | Descrição                                   |
| -------------------------- | ------------------------------------------- |
| `<?php ... ?>`             | Define o bloco principal do código PHP.     |
| `<? ... ?>`                | Tag curta equivalente a `<?php ... ?>`.     |
| `<?= $variavel; ?>`        | Exibe o valor de uma variável (equivalente a `<?php echo $variavel; ?>`). |
| `echo "texto";`             | Exibe texto ou variáveis na saída.          |
| `$variavel = valor;`        | Declaração e atribuição de variável.        |
| `if (condição) { ... }`    | Estrutura condicional para tomada de decisão.|
| `else { ... }`             | Bloco executado se a condição não for verdadeira.|
| `elseif (outra condição) { ... }` | Bloco executado se a primeira condição não for verdadeira, mas a segunda for verdadeira. |
| `while (condição) { ... }` | Loop que executa enquanto a condição for verdadeira.|
| `for (inicialização; condição; incremento) { ... }` | Loop que executa até que a condição seja falsa, geralmente usado com uma variável de iteração.|
| `foreach ($array as $valor) { ... }` | Loop que itera sobre cada elemento em um array.|
| `switch ($variavel) { case valor: ... break; default: ... }` | Estrutura de seleção que compara o valor de uma variável com vários casos.|
| `function nome() { ... }`  | Define uma função.                           |
| `return valor;`             | Retorna um valor de uma função.              |
| `include "arquivo.php";`   | Inclui o conteúdo de outro arquivo no código.|
| `require "arquivo.php";`   | Semelhante ao `include`, mas gera um erro fatal se o arquivo não puder ser incluído.|
| `// Comentário`             | Comentário de uma linha.                    |
| `/* Comentário de bloco */` | Comentário de bloco que pode se estender por várias linhas.|



### Tag de Abertura e Fechamento
Para incorporar código PHP em um documento, você deve usar as tags de abertura `<?php` e de fechamento `?>`. Todo o código PHP deve estar contido entre essas tags.

Exemplo:
```php
<?php
    // Seu código PHP aqui
?>
```

# Echo
A função echo é usada para imprimir conteúdo no navegador. Pode ser utilizado para exibir texto, variáveis, ou até mesmo HTML.

Exemplo:
```
<?php
    $nome = "Usuário";
    echo "Bem-vindo, $nome!";
?>
```

# Variáveis
No PHP, as variáveis começam com o caractere `$`. Elas são utilizadas para armazenar e manipular dados.

Exemplo:
```php
<?php
    $idade = 25;
    echo "Idade: $idade anos";
?>
```

### Estruturas de Controle
O PHP suporta estruturas de controle comuns, como `if`, `else`, `elseif`, `while`, `for`, entre outras, permitindo o controle do fluxo do programa.

Exemplo:
```php
<?php
    $nota = 80;

    if ($nota >= 70) {
        echo "Aprovado!";
    } else {
        echo "Reprovado.";
    }
?>
```
# Incorporando PHP em HTML
Incorporar PHP em documentos HTML é simples. Basta utilizar as tags de abertura e fechamento dentro do código HTML, como no exemplo abaixo:
```
<!DOCTYPE html>
<html>
<head>
    <title>Página PHP</title>
</head>
<body>
    <h1><?php echo "Olá, Mundo!"; ?></h1>

    <?php
        $fruta = "Maçã";
        echo "<p>Eu gosto de $fruta.</p>";
    ?>
</body>
</html>
```

Este é apenas um guia inicial sobre o uso do PHP no desenvolvimento web. Consulte a [documentação oficial do PHP](https://www.php.net/docs.php) para obter informações mais detalhadas e avançadas.

# Landing Page PHP

Bem-vindo à Landing Page simples em PHP! Esta página inclui um formulário de inscrição básico que coleta o nome e o endereço de e-mail do usuário.

## Como Usar

1. Clone o repositório para o seu ambiente de desenvolvimento local:

   ```bash
   git clone https://github.com/LaiFrance/PHP-Guia-de-Uso-do-PHP-no-Desenvolvimento-Web.git

   ```
  
# CRUD em PHP

Aqui está uma tabela simples explicando as operações CRUD básicas em PHP.

| Operação | Descrição |
| ---------| -----------|
| **Create**| Criação de novos registros no banco de dados. Geralmente, é implementado usando um formulário HTML para coletar dados do usuário e um script PHP para inserir esses dados no banco de dados. |
| **Read**  | Leitura de registros existentes no banco de dados. Pode incluir a exibição de uma lista de registros ou a exibição detalhada de um registro específico. Utiliza consultas SQL SELECT e PHP para exibir os dados na interface do usuário. |
| **Update**| Atualização de registros existentes no banco de dados. Normalmente, envolve a apresentação de um formulário preenchido com os dados atuais do registro e a atualização desses dados com base nas alterações feitas pelo usuário. Utiliza consultas SQL UPDATE e PHP para realizar as alterações. |
| **Delete**| Exclusão de registros existentes no banco de dados. Pode ser implementado usando um botão "Excluir" em conjunto com uma confirmação do usuário para evitar exclusões acidentais. Utiliza consultas SQL DELETE e PHP para realizar a exclusão. |

## Exemplo Prático

Vamos ver um exemplo prático de um CRUD em PHP utilizando MySQL como banco de dados.

### Create (Inserir)

Para inserir dados no banco de dados, você pode usar algo assim:

```php
<?php
// Conexão com o banco de dados
$mysqli = new mysqli("localhost", "usuario", "senha", "nome_do_banco");

// Verifica a conexão
if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}

// Dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];

// Inserção no banco de dados
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
$result = $mysqli->query($sql);

if ($result) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $mysqli->error;
}

// Fecha a conexão
$mysqli->close();
?>
```
