<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Recibe valores aritmeticos</title>
    <?php require_once "menu.php" ?>
</head>
<body>
    <?php 
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

if ($valor1 == $valor2) {
    $op = "VERDADERO";
    $tipo = "Igual";
}else{
    $op = "FALSO";
    //$tipo = "Meno o Igual";
}

    
    
    ?>
    <div class="container"><br>
   El valor1 enviado es: <?php  echo $valor1 ?><br>
    El valor2 enviado es: <?php  echo $valor2 ?><br>

    <table class="table table-striped table-hover table-bordered">
        <tbody>
            <tr>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>El valor1 <?php  echo $valor1 ?> es:  <?php  echo $tipo ?> al valor2: <?php  echo $valor2 ?></td>
                <td><?php  echo $op ?></td>
            </tr>
            
        </tbody>
    </table>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>