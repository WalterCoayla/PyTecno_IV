<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Nuevo Cargo</h1>
    <form action="?ctrl=CtrlCargo&accion=guardar" method="post">

    id:
    <input class="form-control" type="text" name="id">
    <br>
    Cargo:
    <input class="form-control" type="text" name="nombre">
    <br>
    <input class="form-control" type="submit" value="Guardar">

    </form>
    <a href="?ctrl=CtrlCargo">Retornar</a>
</body>
</html>