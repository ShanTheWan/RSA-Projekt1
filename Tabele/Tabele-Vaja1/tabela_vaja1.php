<!DOCTYPE html>
<html lang='sl'>
<head>
    <meta charset="UTF-8">
    <title>Vaja</title>
</head>
<body>
    <?php
        $st= array(3, -22, 87.3, 12.22, -4.7, 66.6);

        echo '<h3>A</h3>';
        for($i=0;$i<count($st);$i++)
        {
            echo nl2br($st[$i]."\n");
        }

        echo '<br>';
        echo '<h3>B</h3>';
        for($i=count($st)-1;$i>=0;$i--)
        {
            echo $st[$i]." ";
        }

        sort($st);

        echo '<br>';
        echo '<h3>C</h3>';
        for($i=0;$i<count($st);$i++)
        {
            echo nl2br($st[$i]." ");
        }

        echo '<br>';
        echo '<h3>D</h3>';
        for($i=count($st)-1;$i>=0;$i--)
        {
            echo $st[$i]." ";
        }
    ?>
</body>