<?php
$nombre = $_GET['nombre'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
if (isset($nombre)){
    ?>
<table>
<tr>
    <th>a</th>
    <th>*</th>
    <th>b</th>
    <th>=</th>
    <th>a*b</th>
</tr>

    <?php
    $resultado=1;
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        $resultado= $nombre*$i;
        echo " <td>",$nombre,"</td>";
        echo " <td>*</td>";
        echo " <td>",$i,"</td>";
        echo " <td>=</td> ";
        echo " <td>",$resultado,"</td> ";
        echo " </tr>";
    }
    ?>


</table>

<?php
}else{
  echo "Posa el nombre pel QueryString";
}
?>





</body>
</html>