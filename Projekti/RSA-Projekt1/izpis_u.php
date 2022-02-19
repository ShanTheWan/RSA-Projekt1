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
        echo ("<h1> Izpis uporabnikov </h1>");

        // sql stavek
        $sql="SELECT * FROM users;";

        //sproži poizvedbo
        $result=mysqli_query($link, $sql);
        

        echo "<table border=1>";
        echo "<tr align=center>";
        echo "<td>"."ID"."</td><td>"."NAME"."</td><td>"."SURNAME"."</td><td>"."MAIL"."</td><td>"."PASSWORD"."</td><td>"."BRISANJE"."</td><td>"."UREJANJE"."</td>";
        echo "</tr>";
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>".$row['id_u']."</td>
                <td>".$row['name']."</td>
                <td>".$row['surname']."</td>
                <td>".$row['mail']."</td>
                <td>".$row['pas']."</td><td>"
                ."<a href='del_u.php?id_u=".$row['id_u']."'>Briši</a></td><td>"
                ."<a href='vnos_edit.php?id_u=".$row['id_u']."'>Uredi</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <br>
    <a href="index.html">Domov</a>
</body>