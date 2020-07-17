<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuno mases indeksas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ugis = $_REQUEST['ugis'];
        $svoris = $_REQUEST['svoris'];
        
        $kmi = round($svoris / ($ugis * $ugis) * 10000, 1);
        echo $kmi;
    }

    ?>
    <form action="index.php" method="POST">
        <label for="ugis">Jusu ugis</label>
        <input type="number" name="ugis" id="ugis">
        <label for="svoris">Jusu svoris</label>
        <input type="number" name="svoris" id="svoris">
        <input type="submit" value="Skaiciuoti">

    </form>
    


</body>

</html>