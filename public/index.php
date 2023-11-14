<?php
require_once("../app/classes/Model.php");

$model = new Model;

$json = file_get_contents("../app/db/alimentos.json");

$alimentos = $model->arrayJSON($json);
$listFood = $model->returnListFood($alimentos);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>

<body>
    <div class="form">
        <label for="food">Comidas:</label>
        <select class="" aria-label="Default select example" name="food" id="food">
            <option value="">Escolha um Alimento</option>
            <?php foreach ($listFood as $food) { ?>
                <option value="<?= $food ?>"><?= $food ?></option>
            <?php } ?>
        </select>
    </div>
</body>

</html>