<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <h1>Vnos uporabnikov</h1>

    <form action="obdelava_u.php" method="post">
        Name: <input type="text" name="name" placeholder="Tukaj vnesite ime ime" size="40"><br><br>
        Surname: <input type="text" name="surname" placeholder="Tukaj vnesite priimek" size="40"><br><br>
        Mail: <input type="email" name="email" size="40"><br><br>
        Pass: <input type="password" name="pass" size="40"><br><br>
        <input type="reset" value="Poenostavi">&nbsp;<input type="submit" name="sub" value="Pošlji"><br>
    </form>
    <?php
        
    ?>
</body>