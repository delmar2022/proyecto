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
            <h3>Operadores Aritmeticos</h3>
            <hr>
            <form method="post" action="calculos_arimet.php">
                <div class="form-group">
                    <label for="valor1">Valor 1:</label>
                    <input id="valor1" class="form-control" type="text" name="valor1" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="valor2">Valor 2:</label>
                    <input id="valor2" class="form-control" type="text" name="valor2" required autocomplete="of">
                </div>
                <div class="form-group">
                    <label for="operacion">Selecciona una Operacion</label>
                    <select id="operacion" class="form-control" name="operacion" required autocomplete="of">
                        <option value="s">Sumar</option>
                        <option value="r">Restar</option>
                        <option value="m">Multiplicar</option>
                        <option value="d">Dividir</option>
                    </select>
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Enviar</button>                
            </form>

        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>