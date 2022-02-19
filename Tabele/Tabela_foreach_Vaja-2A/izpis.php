<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <?php
        $besedilo=$_GET['besedilo'];
        $besede=explode(" ", $besedilo);
        $st=count($besede);
        echo "<table border=1>";
        for($i=0;$i<$st;$i++)
        {
            echo "<tr><td>";
            print $besede[$i];
            echo "</td></tr>";
        }

        echo "</table>";
    ?>
</body>