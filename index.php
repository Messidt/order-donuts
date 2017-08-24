<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zamówienie</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <div class='container'>
        <h1>Zamówienie</h1>
        <form action="order.php" method='post'>
            <label for="donuts">Liczba pączków (1 PLN/szt)</label>
            <input type="text" name='donuts'>
            <label for="">Liczba ciastek (1.50 PLN/szt)</label>
            <input type="text" name='cookies'>
            <input type="submit" value='Złóż zamówienie'>
        </form>
    </div>
</body>
</html>
