<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>código par ou impar</H1>
    <form method="post">
    <label for="numero" >informe um número:</label><br>
    <input type="number" id="número" name="número" required>
    <button type="submit">testas</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $número = $_POST["número"];

    if ($número % 2 == 0){
        echo "<p>o número $número é PAR.</p>";

    } else {
        echo "<p>o número $número é ÍMPAR.</p>";
    }
}
?>

    </body>
</html>