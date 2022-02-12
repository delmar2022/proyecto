<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibe valores aritmeticos</title>
</head>
<body>
    <?php 
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacion = $_POST['operacion'];

    switch ($operacion){

        case 's';
            echo $valor1+$valor2;
            break;
        case 'r';
            echo $valor1-$valor2;
            break;
        case 'm';
            echo $valor1*$valor2;
            break;
        case 'd';
            echo $valor1/$valor2;
            break;
    }
    
    ?>
</body>
</html>