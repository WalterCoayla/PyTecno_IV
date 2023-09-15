
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
<a href="?ctrl=CtrlEstudiante&accion=nuevo">Nuevo Estudiante</a>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>correo</th>
            <th>direccion</th>
            <th>Teléfono</th>
            <th>Fecha Nac.</th>
            <th>Programa Estud.</th>
            <th>Opciones</th>
        </tr>
<?php
if (is_array($datos))
foreach ($datos as $d) {
    ?>
<tr>
    <td>
        <?=$d['id']?>
    </td>
    <td><?=$d['nombres']?></td>
    <td><?=$d['apellidos']?></td>
    <td><?=$d['dni']?></td>
    <td><?=$d['correo']?></td>
    <td><?=$d['direccion']?></td>
    <td><?=$d['Telefono']?></td>
    <td><?=$d['fecha_nacimiento']?></td>
    <td><?=$d['programa']?></td>
    <td>
        <a href="?ctrl=CtrlEstudiante&accion=editar&id=<?=$d['id']?>">
            Editar
        </a>
        <a href="?ctrl=CtrlEstudiante&accion=eliminar&id=<?=$d['id']?>">Eliminar</a>
        
    </td>
</tr>

<?php
}
?>

    </table>

    <a href="?">Retornar</a>
</body>
</html>