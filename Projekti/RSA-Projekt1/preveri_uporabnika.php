<?php session_start(); ?>
<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Prijava</title>
</head>
<body>
    <?php
        require_once 'povezava.php'; 
        if(!isset($_POST['sub']))
        {
            header("location:prijava.php");
        }
        else
        {
            $email=$_POST['email'];
            $pas=$_POST['pas'];


            $sql="SELECT * FROM users WHERE mail='$email' AND pas='$pas'";

            $result=mysqli_query($link, $sql);

            $kolk=mysqli_num_rows($result);

            $row=mysqli_fetch_array($result);
            
            if($kolk==1)
            {
                $_SESSION['name']=$row['name'];
                $_SESSION['surname']=$row['surname'];
                echo $_SESSION['name']." ".$_SESSION['surname'];
                
            }
            else
            {
                header("location:prijava_ponovno.php");
            }
        }
    ?>
</body>