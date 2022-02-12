<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Proyecto</title>
    <?php require_once "menu.php" ?>
  </head>
  <body>
<div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
            <h3>Registro de Usuario</h3>
            <hr>
            <form method="post" action="recibe_post.php">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input id="nombre" class="form-control" type="text" name="nombre">
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input id="usuario" class="form-control" type="text" name="usuario">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password">
                </div>
                <div class="form-group">
                    <label for="password2">Repetir el Password</label>
                    <input id="password2" class="form-control" type="password" name="password2">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email">
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