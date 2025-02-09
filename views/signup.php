<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signUp</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://kit.fontawesome.com/e1d55cc160.js" crossorigin="anonymous"></script>
  <script src="../js/main.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="fondo-login">
    <div class="icon">
        <a href="../index.php">
          <img src="../image/logoA.png" alt="Logo" width="72px" height="72px" ">
        </a>
    </div>
    <div class="titulo">
        Create una cuenta en ampara Artes Bol
    </div>
    <form action="../controllers/registrar.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nom" class="form-control" >
        </div>    
          <select class="form-select" name="rol" aria-label="Default select example">
            <option selected>Rol:</option>
            <option value="1">Cliente</option>
            <option value="2">Artesano</option>
            <option value="3">Admin</option>
          </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Repeat the password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña" class="form-control" id="password2">
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>
        <div class="mb-3 g-recaptcha" data-sitekey="6Ldn2VwqAAAAAMK3CzBnuKI7eCUMIZNsQKWyZiug">

        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        Tienes una cuenta? <a href="../views/login.php" style="text-decoration: none;">Inicia Sesion</a>
    </div>
</div>
</body>
</html>