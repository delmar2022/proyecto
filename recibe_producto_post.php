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
    $nombre = $_POST['nombre'];
    $costo = $_POST['costo'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $stock_min = $_POST['stock_min'];
    $moneda = "$";
    ?>
    <div class="container"><br>
    <table class="table table-striped table-hover table-bordered">
        <tbody>
            <tr>
                <th>NOMBRE</th>
                <th>COSTO</th>
                <th>PRECIO</th>
                <th>STOCK</th>
                <th>STOCK MIN.</th>
            </tr>
            <tr>
                <td><?php  echo $nombre ?></td>
                <td><?php  echo $moneda.' '.$costo ?></td>
                <td><?php  echo $moneda.' '.$precio ?></td>
                <td><?php  echo $stock ?></td>
                <td><?php  echo $stock_min ?></td>
            </tr>
            
        </tbody>
    </table>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>