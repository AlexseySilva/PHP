<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
</head>
<body>
    <h1>Conversor de moedas</h1>
    <main>
        <?php 
            //$reais = 150.00;
        //$valorDolar = 5.12;
        //$resultado = $reais/$valorDolar;
        //echo "você tem $reais com a cotação do dolar em $valorDolar que te da a quantia de $resultado"
        $cotacao = 5.17;
        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotacao;
        // mostra o resultado
        // echo "Seus R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$" . number_format($dolar, 2, ",", ".");

        //formatação de moedas internacinal     
        // Biblioteca INTL (Transfor em qualquer moeda (Atenção com a formatação da mesma))  
        $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "<p>Seus ". number_format($padrão, $real,"BRL"). "equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>