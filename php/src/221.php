

<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<ul>
    <?php
    $total = 0;
    for ($i = 1; $i <= 10; $i=$i+1 ) {
        $total += $i;
        if ($i < 10){
            echo $i,"+";
        }else{
            echo $i,"=",$total;
        }

    }
    ?>


</body>
</html>
