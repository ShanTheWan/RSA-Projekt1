<!DOCTYPE html>
<html lang='sl'>
<head>
    <meta charset="UTF-8">
    <title>Vaja</title>
</head>
<body>
    <?php
        require_once 'povezava.php'; 
        if(!isset($_POST['sub']))
        {
            header("location:vnos_p.php");
        }
        else
        {
            $name=$_POST['name'];
            $type=$_POST['type'];
            $quant=$_POST['quant'];
            $id_u=$_POST['id_u'];
    
            echo $name."<br>";
            echo $type."<br>";
            echo $quant."<br>";
            echo $id_u."<br>";


            $sql="INSERT INTO items() VALUE(NULL, '$name', '$type', '$quant', '$id_u');";

            mysqli_query($link, $sql);
        }
    ?>
</body>

