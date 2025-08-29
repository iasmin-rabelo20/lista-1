<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Palavra Palíndromo</title>
</head>

<body>

    <form method="POST" action="">
        <label for="palavra">Digite a palavra:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="pp">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['pp'])) {
            $palavra = $_POST['palavra'];
            $palavra_invertida = strrev($palavra);

            if ($palavra === $palavra_invertida) {
                echo "A palavra '$palavra' é um palíndromo.";
            } else {
                echo "A palavra '$palavra' não é um palíndromo.";
            }
        }
    }
    ?>
</body>

</html>