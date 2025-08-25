<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8 - Números Pares</title>
</head>

<body>
    <form method="POST" action="">
        <lable for="numero">Digite um número:</lable>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="NP">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['NP'])) {
            $numero = $_POST['numero'];


            if ($numero % 2 == 0) {
                echo "O número $numero é <strong>par<strong><br/>";
            } else {
                echo "O número $numero é <strong>ímpar<strong><br/>";
            }

            $quantidade_pares = floor($numero / 2);
            
            echo "Existem " . $quantidade_pares . " números pares entre 1 e " . $numero . ".";
        }
    }

    ?>

</body>

</html>