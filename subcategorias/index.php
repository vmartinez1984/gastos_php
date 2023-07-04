<?php
require_once(__DIR__.'/../UnitOfWork/BusinessLayer/UnitOfWork.php');

$unitOfWork = new UnitOfWork();
$lista = $unitOfWork->subcategoria->obtener_todos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcategorias</title>
</head>
<body>
    <ul>
        <?php foreach ($lista as $key => $item) { ?>
            <li> <?php print_r($item) ?> </li>
        <?php } ?>
    </ul>
</body>
</html>