<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos de PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        /*
        // 0x = hexadecimal 0b = binário 0 = Octal
        $num =300;
        echo "O valor de num é $num <br>";
        
        $v = 300;
        echo "\n var_dump, mostra tudo sobre a variavel > ";var_dump($v);
        echo "<br>";
        //mostra tudo sobre a variavel
        echo "(br) quebra a linha <br>";
        $coercao = "como fazer coerção<br>";
        echo "No php da para trocar o indicador da string usando o seguinte esquema ($ variavel = (String) or (int) or (double) + Letras ou valor ";
        echo "Quebra linha (br) <br>";
        echo "Cuidados com o booleano no PHP (False = sempre vai ser 0 or vazio or num)<br> E (true = sempre vai ser 1 ou etc..)";
        echo "Quebra linha (br) <br>";
        $vet = [1,"Alexsey",3.4,4,true];
        echo "O (echo) não mostra vetores. então atenção na hora de usar o VET <br>";
        var_dump($vet);
        echo "Class entendendo classes"
        */
        class Pessoa {
            private string $nome;
        }
        $i = new Pessoa;
        var_dump($i);
    ?>
</body>
</html>