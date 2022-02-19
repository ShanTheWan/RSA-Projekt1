<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <?php 
    
        function izpis(int $st1, int $st2)
        {
            //Code
            $vsota=$st1+$st2;
            return $vsota;
        }

        echo "3+12=".izpis(3,12);
    ?>
    
</body>