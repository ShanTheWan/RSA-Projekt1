<!DOCTYPE html>
<html lang='sl'>
<head>
    <title>Vaja</title>
</head>
<body>
    <!--Ustvarite stran matematika.php. Napišite PHP skript za deklaracijo dveh spremenljivk s poljubno številčno vrednostjo, 
    potem pa izvedite naslednje operacije: seštevanje, odštevanje, množenje in deljenje. Rezultate izpišite na zaslon. 
    Za vsako od operacij uporabite drugačno funkcijo za izpis [ print(), sprintf(), print_r(), var_dump() ].-->
    <form action="index.php" methode="get">
        <input type="text" name="st1">
        <input type="text" name="st2">
        <input type="submit" value="Klikn">
        <br><br>Operacije:<br>
        <input type="checkbox" name="operacija[]" value="1">Seštevanje<br>
        <input type="checkbox" name="operacija[]" value="2">Odštevanje<br>
        <input type="checkbox" name="operacija[]" value="3">Množenje<br>
        <input type="checkbox" name="operacija[]" value="4">Deljenje<br>
    </form>
</body>