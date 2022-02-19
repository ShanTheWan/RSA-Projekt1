<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Start</title>
</head>
<body>
<h1>GLAVA</h1>
    <?php
        if(!isset($_GET['name']))
        {
            echo "<p>Prijavite se <a href=prijava.php>TUKAJ</a></p>";
        }
        else
        {
            echo "<p>Prijavljeni ste kot: ".$_GET['name']." ".$_GET['surname']."</p>";
        }
    ?>
    <h1>Seznam aktivnosti</h1>
    <ol>
        <li><a href="izpis_u.php" target="_blank">Izpis uporabnikov</a></li>
        <li><a href="izpis_p.php" target="_blank">izpis predmetov</a></li>
        <li><a href="izpis p2.php" target="_blank">izpis predmetov2</a></li>
        <li><a href="vnos_u.php" target="_blank">Vstavljanje uporabnikov</a></li>
        <li><a href="vnos_p.php" target="_blank">Vstavljanje predmetov</a></li>
        <li><a href="del_u.php" target="_blank">Brisanje uporabnikov</a></li>
        <li><a href="edit_u.php" target="_blank">Urejanje uporbanikov</a></li>
    </ol>
</body>