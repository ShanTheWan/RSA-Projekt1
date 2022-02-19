<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <?php
    $st1=$_GET['st1'];
    $st2=$_GET['st2'];
    
    $op=array($_GET['operacija1'], $_GET['operacija2'], $_GET['operacija3'], $_GET['operacija4']);

        if(isset($st1)&&isset($st2))
            echo ("Število 1: ".$st1."<br>");
            echo ("Število 2: ".$st2."<br><br>");

            if($op[0]=="1")
            {
                $vsota=$st1+$st2;
                echo ("Vsota je: $vsota <br>");
            }
            if($op[1]=="2")
            {
                $razlika=$st1-$st2;
                echo ("Razlika: ");
                var_dump ($razlika);
                echo ("<br>");
            }
            if($op[2]=="3")
            {
                $krat=$st1*$st2;
                print ("Zmnožek je: $krat <br>");
            }
            if($op[3]=="4")
            {
                $deljenje=$st1/$st2;
                echo("Deljenje: ");
                $txt=sprintf($deljenje);
                echo $txt;
            }
    ?>
</body>
