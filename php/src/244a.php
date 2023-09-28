<!DOCTYPE html>
<html lang="en">
<?php $cantidad = $_GET["cantidad"];
?>
<head>
    <meta charset="UTF-8">
    <title>Supermercat Server</title>
</head>
<body>
<form method="get">


    <h2>Supermercat Server</h2>
    <?php  for($i = 0; $i < $cantidad; $i++) { ?>
        <div >
        <a>Producte <?= $i +1 ?></a><br>
        <input placeholder="Producte" name=""><br>
        <input placeholder="Preu">
    </div>
    <?php
    } ?>
</form>

</body>
</html>
