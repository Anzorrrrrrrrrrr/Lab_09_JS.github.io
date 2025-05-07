<?php
$item = $_POST["item"];
$material = $_POST["material"];
$quantity = $_POST["quantity"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Підтвердження замовлення</title>
    <meta charset="UTF-8">
</head>
<body>
    <h3>Ваше замовлення прийнято</h3>
    <p>Замовлено виріб: <?php echo $item; ?></p>
    <p>Матеріал: <?php echo $material; ?></p>
    <p>Кількість: <?php echo $quantity; ?></p>
    <p><a href="furniture_order.html">Повернутися</a></p>
</body>
</html>