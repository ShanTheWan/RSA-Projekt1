<!DOCTYPE html>
<html lang='sl'>
<head>
    <meta charset="UTF-8">
    <title>IoT</title>
</head>
<body>
    <form action="">
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
    <?php
        $drink=$_GET['name'];
        $url="https://www.thecocktaildb.com/api/json/v1/1/search.php?s=$drink";
        $json=file_get_contents($url);
        $obj= json_decode($json)->drinks[0];
        echo $obj->strDrink;
        echo "<br>";
        echo $obj->strInstructions;
        echo "<br><img width='10%' style='margin-top:'50%;' src='$obj->strDrinkThumb' />";
    ?>
</body>