<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Par ou Impar</h1>
    <form method="post">
     <label for="number">Coloque um número:</label><br>
    <input type="numero" id="number" name="number"crequired>
    <button type="subimit">verificar</button>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if ($number % 2 == 0) {
            echo "<p>o numero $number é PAR.</p>";
        } else {
            echo "<p>o numero $number e IMPAR.<?P>";

        }
    } 
    ?>
</form>
</body>
</html>