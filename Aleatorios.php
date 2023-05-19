<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatorios</h1>
        <?php 
            $min = 0;
            $max = 100;
            
            $num = mt_rand($min,$max);
            // rand() = 1951 - Linear congretial gerator
            // mt_rand() = 1907 - mersenne Twister
            // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
            // random_int() gera número aleatório criptograficamente seguros
            
            echo "<p>Gerando um número aleatorio entre $min e $max... <br>O valor gerado foi <strong>$num</strong></p>";
            //echo "O número gerado foi $num";
        ?>
        <!--<button>&#x1f504;Gerar outro</button>*/-->
        <button onclick="javascrip:document.location.reload()">Gerar outro</button>
    </main>
    
</body>
</html>
