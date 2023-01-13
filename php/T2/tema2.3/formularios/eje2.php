<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eje2</title>
</head>

<body>
    <h3>Elementos de entrada</h3>

    <form action="eje2R.php" method="get">

        <label for="texto"><b>Texto</b></label>
        <input type="text" name="texto" id="texto">
        <br><br>

        <label for="radio"><b>Radio</b></label>
        <input type="radio" name="sexo" value="hombre">hombre
        <input type="radio" name="sexo" value="mujer">mujer
        <input type="radio" name="sexo" value="bolsa del mercadona" checked>bolsa del mercadona
        <br><br>

        <label for="chek"><b>Chekbox</b></label>
        <input type="checkbox" name="extra[]" id="garaje" value="garaje">garaje
        <input type="checkbox" name="extra[]" id="piscina" value="piscina">piscina
        <input type="checkbox" name="extra[]" id="gym" value="gym" checked>gym
        <br><br>

        <label for="file"><b>archivo</b></label>
        <input type="file" id="file" name="file">
        <br><br>

        <label for="oculto"><b>oculto 🤫</b></label>
        <input type="hidden" id="oculto" name="oculto" value="ocultisimo">
        <br><br>

        <label for="contraseña"><b>contraseña</b></label>
        <input type="password" name="contraseña" id="contraseña">
        <br><br>

        <label for="select"><b>select</b></label>
        <select name="seleccion" id="seleccion">
            <option value="rojo">rojo</option>
            <option value="azul">azul</option>
        </select>
        <br><br>

        <label for="selectM"><b>select multiple</b></label>
        <br>
        <select name="seleccionM" id="seleccionM" multiple>
            <option value="rojo" selected>rojo</option>
            <option value="azul">azul</option>
        </select>
        <br><br>

        <label for="textArea"><b>Textarea</b></label>
        <br>
        <textarea name="textArea" id="textA" cols="30" rows="10" placeholder="Escribe tu comentario..." ></textarea>
        <br><br>
        
        <input type="submit" value="enviar" name="enviar">
        <input type="reset" value="borrar">

    </form>
</body>

</html>