<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <?php
    $num=array(-8, 5, 12.3);
    echo $num[0];
    
    echo "<br><br>";
    
    $sports=array("ena"=>"NFL", "dva"=>"NBA", "tri"=>"NHL");
    echo $sports["tri"];
    echo "<br>";
    echo $sports["dva"];
    echo "<br>";
    echo $sports["ena"];

    echo "<br><br>";

    foreach($sports as $value)
    {
        echo $value.' ';
    }

    echo "<br><br>";

    $sports['stiri']="MBL";
    foreach($sports as $value => $vrednost)
    {
        echo $value." ".$vrednost."<br>";
    }

    echo "<br><br>";
    echo '<caption>'."Izpis tabele:".'</caption>';
    echo '<table border="1">';
    echo '<tr>'.'<th>'."KLUJČ".'</th>'.'<th>'."VREDNOST".'</th>'.'</tr>';
    foreach($sports as $ključ => $vrednost)
    {
        echo '<tr>'.'<td>'.$ključ.'</td>'.'<td>'.$vrednost.'</td>'.'</tr>';
    }
    ?>
</body>