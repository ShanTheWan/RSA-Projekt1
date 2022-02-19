<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <?php
    $st1=$_GET['st1'];
    $st2=$_GET['st2'];
    $op=$_GET['operacija'];

        if(isset($st1)&&isset($st2))
            echo ("Število 1: ".$_GET['st1']."<br>");
            echo ("Število 2: ".$_GET['st2']."<br><br>");

            if($op[1]=="1")
            {
                $vsota=$st1+$st2;
                echo ("Vsota je: $vsota <br>");
            }
            if($op[2]=="2")
            {
                $razlika=$st1-$st2;
                echo ("Razlika: ");
                var_dump ($razlika);
                echo ("<br>");
            }
            if($op[3]=="3")
            {
                $krat=$st1*$st2;
                print ("Zmnožek je: $krat <br>");
            }
            if($op[4]=="4")
            {
                $deljenje=$st1/$st2;
                echo("Deljenje: ");
                $txt=sprintf($deljenje);
                echo $txt;
            }
    ?>
</body>