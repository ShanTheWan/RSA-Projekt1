<?php require_once 'povezava.php'; ?>

<!DOCTYPE html>
<html lang='sl'>
<head>
    <meta charset="UTF-8">
    <title>Vaja</title>
    <style>
        tr,td 
        {
            padding:5px;
        }
    </style>
</head>
<body>
    <?php
        echo ("<h1> Izpis predmetov </h1>");

        // sql stavek
        $sql="SELECT * FROM items";

        //sproži poizvedbo
        $result=mysqli_query($link, $sql);

        echo "<table border=1>";
        echo "<tr align=center>";
        echo "<td>"."ID"."</td><td>"."NAME"."</td><td>"."TYPE"."</td><td>"."QUANTITY"."</td><td>"."ID_U"."</tr>";
        echo "</tr>";
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id_i']."</td><td>".$row['name']."</td><td>".$row['type']."</td><td>".$row['quant']."</td><td>".$row['id_u']."</tr>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <br>
    <a href="index.html">Domov</a>
</body>