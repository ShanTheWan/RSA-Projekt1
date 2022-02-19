<?php require_once 'povezava.php'; ?>
<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <?php
        $i=$_GET['id_u'];
        
        // sql stavek
        $sql="DELETE FROM users WHERE id_u='$i';";

        //sproži poizvedbo
        $result=mysqli_query($link, $sql);

        header("Location:izpis_u.php");
    ?>
</body> 
</html>