<!DOCTYPE html>
<html lang='sl'>
<head>
    <meta charset="UTF-8">
    <title>Vaja</title>
</head>
<body>
    <?php
        $st= array("B"=>"drugi", "D"=>"cetrti", "A"=>"prvi", "C"=>"tretji");

        echo '<h3>A</h3>';
        foreach($st as $ključ=>$vrednost)
        {
            echo $ključ." ".$vrednost."<br>";
        }

        echo "<br><br>";
        echo '<h3>B</h3>';
        $newt1=$st;
        asort($newt1);
        foreach($newt1 as $ključ=>$vrednost)
        {
            echo $ključ." ".$vrednost."<br>";
        }

        echo "<br><br>";
        echo '<h3>C</h3>';
        $newt1=$st;
        ksort($newt1);
        foreach($newt1 as $ključ=>$vrednost)
        {
            echo $ključ." ".$vrednost."<br>";
        }

        echo "<br><br>";
        echo '<h3>D</h3>';
        $newt2=$st;
        krsort($newt2);
        foreach($newt2 as $ključ=>$vrednost)
        {
            echo $ključ." ".$vrednost."&nbsp;&nbsp;&nbsp;";
        }
    ?>
</body>