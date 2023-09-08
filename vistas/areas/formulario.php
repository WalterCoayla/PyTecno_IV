<?php
$id = isset($obj['id'])?$obj['id']:'';
$nombre = isset($obj['nombre'])?$obj['nombre']:'';
$idOficina = isset($obj['idOficina'])?$obj['idOficina']:'';
# var_dump($obj);exit;
$esNuevo = isset($obj['id'])?0:1; #0: No es Nuevo (Editar) / 1: Es nuevo
$titulo = ($esNuevo==1)?'Nueva Area':'Editar Area';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <h1><?=$titulo?></h1>
    <form action="?ctrl=CtrlArea&accion=guardar" method="post">

    id:
    <input class="form-control" type="text" name="id" value="<?=$id?>" readonly>
    <input class="form-control" type="hidden" name="esNuevo" value="<?=$esNuevo?>">
    <br>
    Area:
    <input class="form-control" type="text" name="nombre" value="<?=$nombre?>">
    <br>
    Oficina:
    <select class="form-control" name="idOficina" id="">
        <?php
        if (is_array($oficinas))
        foreach ($oficinas as $o) {
            
            $select=($idOficina==$o['id'])?'selected':'';
        ?>
        <option <?=$select?> value="<?=$o['id']?>">
            <?=$o['nombre']?>
        </option>
        <?php } ?>
    </select>

    
    
    
    <br>
    <input class="form-control" type="submit" value="Guardar">

    </form>
    <a href="?ctrl=CtrlArea">Retornar</a>
</body>
</html>