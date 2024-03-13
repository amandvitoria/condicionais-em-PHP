<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>mostrando se o número é positivo negativo ou neutro </h1>
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
            if ($numero > 0) {
                echo "<p>O número $numero é positivo.</p>";
            } elseif ($numero < 0) {
                echo "<p>O número $numero  é negativo .</p>";
            }else{
                echo "<p>O número $numero é neutro.</p>";
            }
        } ;
    }
}
?>
</body>
</html>