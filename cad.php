<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_GET);// $_GET  $_POST $_COOKIES
            $nome = $_GET["nome"] ?? "sem nome";
            $sobreNome = $_GET["nome"] ?? "Desconhecido";
            echo "<p> e um prazer te conhecer, <strong>$nome $sobreNome</strong>! Este é o seu nome"
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>