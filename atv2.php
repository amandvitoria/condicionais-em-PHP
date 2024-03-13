<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero">digite um número:</label>
    <input type="number" name="numero" id="numero">
    <button type="number" value="Verificar">
</form>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['numero'])) {
        $numero = $_POST['numero'];
 
        if (is_numeric($numero)) {
            if ($numero % 10 == 0) {
                echo "<p>O número $numero é redondo.</p>";
            } else {
                echo "<p>O número $numero não é redondo.</p>";
            }
        } ;
    }
}
?>
</body>
</html>