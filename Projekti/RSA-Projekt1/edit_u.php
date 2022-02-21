<?php require_once 'povezava.php'; ?>
<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <?php
        $i=$_POST['id'];
        echo $i."<br>";
        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $mail=$_POST['email'];
        $pas=$_POST['pas'];
    
        echo $name."<br>";
        echo $surname."<br>";
        echo $mail."<br>";
        echo $pas."<br>";

        $sql="UPDATE users SET name='$name', surname='$surname', mail='$mail', pas='$pas' WHERE id_u='$i';";

        $result=mysqli_query($link, $sql);

        header("Location:izpis_u.php");
    ?>
</body>
</html>

