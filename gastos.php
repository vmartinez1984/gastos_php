<?php
require_once('UnitOfWork/BusinessLayer/UnitOfWork.php');

header('autor: VictorMtz');
$unitOfWork = null;
$categorias = null;

$unitOfWork = new UnitOfWork();
$categorias = $unitOfWork->categoria->obtener_todos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select>
        <?php foreach ($categorias as $key => $categoria) { ?>
            <option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['nombre'] ?></option>
        <?php } ?>
    </select>
</body>
</html>