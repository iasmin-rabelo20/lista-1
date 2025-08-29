<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 - Celsius para Fahrenheit</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Digite quantos graus está:</label>
        <input type="number" id="temperatura" name="temperatura" required>
        <button type="submit" name="cpf">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['cpf'])) {
            $temperatura = $_POST['temperatura'];
            $fahrenheit = ($temperatura * 9/5) + 32;
            echo "$temperatura graus Celsius equivalem a $fahrenheit graus Fahrenheit.";            
        }
    }
    ?>
</body>

</html>