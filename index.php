<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        input, button {
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo à Nossa Landing Page!</h1>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coleta os dados do formulário
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);

        // Exibe os dados coletados
        echo "<p>Obrigado por se inscrever, $nome!</p>";
        echo "<p>Seu endereço de e-mail é: $email</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Inscrever-se</button>
    </form>
</body>
</html>
