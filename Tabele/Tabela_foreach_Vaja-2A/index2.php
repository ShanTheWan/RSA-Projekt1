<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <?php
        $mesta=array("1"=>"Tokyo", "2"=>"Mexico City", "3"=>"New York City", "4"=>"Mumbai", "5"=>"Seoul", "6"=>"Shanghai", "7"=>"Lagos", "8"=>"Buenos Aires", "9"=>"Cairo", "10"=>"London");
        
        echo "<ul>";
        $mestaabc=$mesta;
        asort($mestaabc);
        foreach($mestaabc as $ključ=>$value)
        {
            echo "<li>";
            echo $value."&nbsp;".$ključ;
            echo "</li>";
        }
        echo "</ul>";
    ?>
</body>