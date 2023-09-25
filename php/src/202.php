<?php
$nom  = "Ale";
$cognoms = "Fe";
$email = "alejand";
$natalici = "200";
$telefono = "6998";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla HTML</title>
</head>
<body>
    <table border="1">
            <tr>
                <td>Nom</td>
                <td>Ignasi</td>
            </tr>

            <tr>
                <td>Cognoms</td>
                <td><?=$cognoms?></td>
            </tr>
        <tr>
            <td>Email</td>
            <td><?=$email?></td>
        </tr>
        <tr>
            <td>Natalici</td>
            <td><?=$natalici?></td>
        </tr>
            <tr>
                <td>Telèfon</td>
                <td><?=$telefono?></td>
            </tr>
    </table>
</body>
</html>