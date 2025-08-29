<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Fibonacci</title>
</head>

<body>

    <form method="POST" action="">
        <label for="numero">Digite a posição desejada da sequência de Fibonacci:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="dns">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['dns'])) {
            $numero = $_POST['numero'];
            $sequence = array();

            for ($i = 0; $i <= $numero; $i++) {
                if ($i < 2) {
                    $sequence[$i] = $i;
                } else {
                    $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
                }
            }

            echo "O termo de posição $numero na sequência de Fibonacci é: " . $sequence[$numero];
        }
    }
    ?>
</body>

</html>