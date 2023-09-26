
    <h1><?=isset($titulo)?$titulo:'';?></h1>
    <h3>Bienvenido al sistema de ies jcm: <?=isset($usuario)?$usuario:'';?></h3>


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
