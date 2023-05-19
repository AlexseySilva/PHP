<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super globais PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("Dia-da-semana", "DOMINGO", time()+3600);                    

                session_start();        
                $_SESSION["Teste"] = "Funcionou!";           

                echo "<h1>SuperGlobal GET</h1>";
                echo "\$_GET, \$_POST, \$_RESQUEST, \$_COOKIE, \$_FILES, \$_SESSION, \$_ENV, \$_SERVER, \$GLOBALS";
                
                

                //query string solicitação
                var_dump($_GET);                

                echo "<h1>Super global POST</h1>";
                var_dump($_POST);

                echo "<h1>SuperGlobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>SUPER GLOBAL COOOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>SUPER GLOBAL SESSION</h1>";
                var_dump($_SESSION);


                echo "<h1>SUPER GLOBAL ENVI</h1>";
                var_dump($_ENV);
                //foreach (getenv()as $c => $v);{
                //    echo "<br>$c -> $v";
                //}
                
                echo "<h1>SUPER GLOBAL SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>SUPER GLOBAL GLOBALS</h1>";
                var_dump($GLOBALS);    
            ?>
        </pre>
    </main>    
</body>
</html>