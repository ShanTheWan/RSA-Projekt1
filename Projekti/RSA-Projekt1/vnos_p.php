<?php require_once 'povezava.php'; ?>

<!DOCTYPE html>
<html lang='sl'>
<head>
    <meta charset="UTF-8">
    <title>Vaja</title>
    <style>
        tr,td 
        {
            padding:5px;
        }
    </style>
</head>
<body>
    <form action="obdelava_p.php" method="post">
        Object name: <input type="text" name="name" placeholder="Tukaj vnesite ime predmeta" size="40"><br><br>
        Type: <input type="text" name="type" placeholder="Tukaj vnesite vrsto" size="40"><br><br>
        Quantity: <input type="number" name="quant" size="40" min="1" max="1000"><br><br>
        ID: <input type="number" name="id_u" size="40"><br><br>
        <input type="reset" value="Poenostavi">&nbsp;<input type="submit" name="sub" value="Pošlji"><br>
    </form>
    <?php
        
    ?>
    <br>
    <a href="index.html">Domov</a>
</body>