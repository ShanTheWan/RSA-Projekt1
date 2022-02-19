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
                echo "IME: ".$row['name']."<br>";
                echo "PRIIMEK: ".$row['surname']."<br>";
                $name=$row['name'];
                $surname=$row['surname'];
                header ("location:index.php?name=$name&surname=$surname");
                
            }
            else
            {
                header("location:prijava_ponovno.php");
            }
        }
    ?>
</body>