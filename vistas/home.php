<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuarto</title>
</head>
<body>
    <h1><?=isset($titulo)?$titulo:'';?></h1>
    <h3>Bienvenido: <?=isset($usuario)?$usuario:'';?></h3>


    <ul>
<?php
    if (isset($menu))
    foreach ($menu as $key => $value) {
        ?>
        <li>
            <a href="?ctrl=<?=$key?>"><?=$value?></a>
        </li>
        
        <?php
    }
?>

    </ul>
</body>
</html>