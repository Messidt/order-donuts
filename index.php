<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zamówienie</title>
</head>
<body>
    <h1>Złóż zamówienie</h1>
    <form action="order.php" method='post'>
        <label for="donuts">Liczba pączków (1PLN/szt)</label>
        <input type="text" name='donuts'>
        <label for="">Liczba ciastek (1.50PLN/szt)</label>
        <input type="text" name='cookies'>
        <input type="submit" value='Złóż zamówienie'>
    </form>
</body>
</html>
