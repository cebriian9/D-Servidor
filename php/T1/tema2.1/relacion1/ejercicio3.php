<form>
    <p>Introduce tu usuario.</p>
    <input type="text" name="usuario">
</form>

<?php
    $usuario=$_GET['usuario'];

    if (isset($_GET['usuario'])) {
        if (strlen($usuario)<3) exit ('Tu usario no puede medir menos de 3 caracteres <br>');
        if (strlen($usuario)>20) exit ('Tu usario no puede ser mas largo de 20 caracteres <br>');
        
        $str = $usuario;
        $pattern = "/[&\+@]/";
        if (preg_match($pattern, $str)==1) {
            echo 'usuario con caracteres incorrectos <br>';
        }
        else 
            echo('Todo okey <br>');
    }
?>