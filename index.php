<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="public/css/form.css">

    <script src="public/js/script.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Formulario de pruebas</title>
</head>
<body>
    <div class="logo">
            <img src="public/uploads/img/logo.png" alt="Logo">
        </div>

    <form action="post.php" method="post">
        <div class="form-text">Usuario</div>
        <input type="text" name="user" placeholder="Usurio" class="">
        <div class="form-text">Clave</div>
        <input type="password" name="pass" placeholder="Clave de Acceso">


        <button type="submit" class="submit" onmouseover="buttonhoverIn(this)" onmouseout="buttonhoverOut(this)">Entrar</button>

        <div class="links-container">
        <a href="proximamente.php" onmouseover="linkhoverIn(this)" onmouseout="linkhoverOut(this)">
        ¿Olvidaste tu contraseña?
        </a>
        <a href="proximamente.php" onmouseover="linkhoverIn(this)" onmouseout="linkhoverOut(this)">
        Registrarse
        </a>
        </div>

    </form>

</body>
</html>