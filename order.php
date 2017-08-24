<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Podsumowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?PHP
        
        $donuts = $_POST['donuts'];
        $cookies = $_POST['cookies'];
        $sum = 1 * $donuts + 1.5 * $cookies;
    
echo<<<END
            <div class='container'>
            <h1>Podsumowanie zamówienia</h1>
            <table border='1' cellpadding='10' cellspacing='0'>
                <tr>
                    <td>Pączki</td>
                    <td>$donuts szt.</td>
                </tr>
                <tr>
                    <td>Ciastka</td>
                    <td>$cookies szt.</td>
                </tr>
                <tr>
                    <td>Do zapłaty</td>
                    <td>$sum PLN</td>
                </tr>
            </table>
            <a href='index.php'>Powrót</a>
            </div>
        
        
END
    ?>  
</body>
</html>