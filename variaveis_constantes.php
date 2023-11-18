<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // variaveis constantes
    define("NOME", "Laise");
    define("IDADE", 30);
    define("ALTURA", 1.65);
    define("CASADO", false);

    echo "Meu nome é ".NOME.", tenho ".IDADE." anos, minha altura é ".ALTURA." e sou ".(CASADO ? "casado" : "solteiro").".";
    ?>
</body>
</html>