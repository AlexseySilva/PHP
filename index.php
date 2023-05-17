<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <h1>Entendendo constantes</h1>
    <?php 
    const COM_UNI_CODE = "Alexsey \u{1f418} para usar ini code use aspas duplas <br>";
    const SEM_UNI_CODE = 'Alexsey \u{1f418} sem unicode aspas unicas ';
    echo COM_UNI_CODE . SEM_UNI_CODE;

    
    ?>
</body>
</html>