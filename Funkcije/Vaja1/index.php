<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
    <style>
        tr,td
        {
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
        echo "<table border=1  align=center><tr  align=center><td colspan=3 ><img src=Slika1.png alt=Wait for the image to load height=50 width=50>Lovce</td></tr>";
        echo "<tr  align=center><td><a href=>Link1</a></td><td><a href=>Link2</a></td><td><a href=>Link3</a></td></tr>";
        echo "<tr align=center><td colspan=3><h1>Naslov 1</h1><br><img src=Slika1.png alt=Wait for the image to load height=50 width=50></td></tr>";
        echo "<tr align=center><td colspan=3>";
        include('../Zacetek2.php');
        echo "</td></tr>";
        echo "<tr align=center><td colspan=3>© by :)</td></tr>";
        echo "</table>";
    ?>
</body>