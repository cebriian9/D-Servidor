<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <?php
    if (!isset($_COOKIE['visitas'])) {
        setcookie('visitas',2,time()+60*30);
        $visitas=1;
        
    }else {
        setcookie('visitas',$_COOKIE['visitas']+1,time()+60*30);
        $visitas=$_COOKIE['visitas'];
        
        
    }
    ?>
    <div>
        <p>Visito esta pagina un total de: <?php 
        echo $visitas;
        ?> </p>
    </div>
</body>
</html>