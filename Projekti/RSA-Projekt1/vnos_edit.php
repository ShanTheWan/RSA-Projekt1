<?php require_once 'povezava.php'; ?>
<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <?php
        $i=$_GET['id_u'];

        // sql stavek
        $sql="SELECT * FROM users WHERE id_u='$i';";

        //sproži poizvedbo
        $result=mysqli_query($link, $sql);

        while($row=mysqli_fetch_array($result))
        {
            $i=$row['id_u'];
            $name=$row['name'];
            $surname=$row['surname'];
            $mail=$row['mail'];
            $pas=$row['pas'];
        }
        
    ?>
    <h1>Urejanje podatkov</h1>

    <form action="edit_u.php" method="post">
        Name: <input type="text" name="name" value="<?php echo $name?>" placeholder="Tukaj vnesite posodobljeno ime" size="40"><br><br>
        Surname: <input type="text" name="surname" value="<?php echo $surname?>" placeholder="Tukaj vnesite posodobljen priimek" size="40"><br><br>
        Mail: <input type="mail" value="<?php echo $mail?>" name="email" size="40"><br><br>
        Pass: <input type="password" value="<?php echo $pas?>" name="pas" size="40"><br><br>
        <input type="hidden" name="id" value="<?php echo $i; ?>">
        <input type="reset" value="Poenostavi">&nbsp;<input type="submit" name="sub" value="Pošlji"><br>
    </form>
    
</body>