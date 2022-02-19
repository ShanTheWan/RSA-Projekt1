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
            header("location:vnos_u.php");
        }
        else
        {
            $name=$_POST['name'];
            $surname=$_POST['surname'];
            $email=$_POST['email'];
            $pas=$_POST['pass'];
    
            echo $name."<br>";
            echo $surname."<br>";
            echo $email."<br>";
            echo $pas."<br>";


            $sql="INSERT INTO users() VALUE(NULL, '$name', '$surname', '$email', '$pas');";

            mysqli_query($link, $sql);
        }
    ?>
</body>

