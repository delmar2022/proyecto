<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Operadores Aritmeticos</title>
    <?php require_once "menu.php" ?>
  </head>
  <body>
<div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
            <h3>Nuevo Producto con Ajax</h3>
            <hr>
            <form method="post" action="">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" class="form-control" type="text" name="nombre" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="costo">Costo</label>
                    <input id="costo" class="form-control" type="text" name="costo" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input id="precio" class="form-control" type="text" name="precio" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input id="stock" class="form-control" type="text" name="stock" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="stock_min">Stock Minimo</label>
                    <input id="stock_min" class="form-control" type="text" name="stock_min" autocomplete="off">
                </div>
                
                <br>
                <button class="btn btn-primary" id="enviar" type="button">Enviar</button>                
            </form>
            <div id="salida"></div>

        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="ajax/funcion.js"></script>
</body>
</html>