<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <style>
        span{
            display: flex;
            
        }

        span>*{
            margin-left: 30px;
        }
    </style>
</head>
<body>
    <h3>Formumaliro simple</h3>

    <form action="eje1R.php" method="post">
        <span>Texto a buscar <input type="text" name="cancion" id="cancion"></span><br><br>
        <span>Buscar en: 
            <nav>
                <input type="radio" name="busqueda" value="titulo" id="titulo">Titulo de cancion
                <input type="radio" name="busqueda" value="album" id="album">Nombre de album
                <input type="radio" name="busqueda" value="ambas" id="ambos"> Ambas opciones
            </nav>
        </span>
        <span>Genero musical
            <select name="genero" id="genero">
                <option value="todos">todos</option>
                <option value="rock">rock</option>
                <option value="pop">pop</option>
            </select>
            
        </span>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>