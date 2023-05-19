<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada e Raiz cubica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    //Área de declarações
    $numero = $_GET['num'] ?? 1;
    ?>
    <main>
        <h1>Informe o número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular raízes">
            </form>
    </main>
    <section>
        <h2>Resultado final</h2>
            <?php 
            $rq = $numero ** (1/2);
            $rc = $numero ** (1/3);
            echo "<p>Com o número <strong>$numero</strong> você vai ter:";
            echo "<ul><li>A raiz quadrada <strong>". number_format($rq,2,",",".")."</strong> aqui</li>";
            echo "<li>E sua raiz cubica aqui<strong>". number_format($rc,2,",",".")."</strong></li></ul>";
            ?>
    </section>
</body>
</html>