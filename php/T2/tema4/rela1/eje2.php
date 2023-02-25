<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container w-25">
        <?php
        if (isset($_COOKIE['user']) && isset($_COOKIE['sesion'])) {
        ?>

        <p>Sesion iniciada de <?php 
        if (isset($_COOKIE['user'])) {
           echo $_COOKIE['user'];
        }
        ?></p>

        <?php
        } else if (isset($_COOKIE['user']) && !isset($_COOKIE['sesion'])) {
            //mostrar solo usuario
        ?>
            <p>Usuario: <?php echo $_COOKIE['user'] ?></p>
            <form action="#" method="post">

                <p>Contraseña:</p>
                <input type="text" name="pass">
                <br><br>
                <button type="submit" name="enviar2" class="btn btn-primary">Iniciar Sesion</button>
                <a href="eje2.php">¿No eres tu? Cerrar sesion</a>
            </form>
            <?php

            if (isset($_REQUEST['enviar2'])) {
                //al enviar 2º form compruba la contraseña
                if (sha1($_REQUEST['pass']) === $_COOKIE['pass']) {
                    echo "contraseña correcta :)";
                    setcookie('sesion', true,time()+1);
                    header('Location: eje2.php');
                    exit;
                } else {
                    echo "Contraseña incorrecta :(";
                }
            }
        } else {
            //formulario completo
            ?>
            <form action="#" method="post">
                <p>usuario:</p>
                <input type="text" name="user">
                <br>
                <p>Contraseña:</p>
                <input type="text" name="pass">
                <br><br>
                <button type="submit" name="enviar" class="btn btn-primary">Iniciar Sesion</button>
            </form>

        <?php

            if (isset($_REQUEST['enviar'])) {
                $user = $_REQUEST['user'];
                $pass = sha1($_REQUEST['pass']);

                setcookie('user', $user, time() + 60 * 30);
                setcookie('pass', $pass, time() + 60 * 30);
                setcookie('sesion', true,time()+1);

                header('Location: eje2.php');
                exit;
            }
        }
        ?>
    </div>
</body>

</html>