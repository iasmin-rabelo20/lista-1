<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - tabuada</title>
</head>
<body>

    <form method="POST" action="">
        <lable for=" numero">Digite um número:</lable>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="tabuada">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['tabuada'])) {
            $numero = $_POST['numero'];

                $numero2 = 1;
                echo "Tabuada do $numero<br>";
                while ($numero2 <= 10) {
                    echo "$numero2 * $numero = " . $numero2 * $numero . "<br>";
                    $numero2 += 1;
                }
            
            
        }
    }
    ?>

</body>

</html>