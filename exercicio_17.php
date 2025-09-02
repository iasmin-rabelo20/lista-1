<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17 - Validar data</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite o primeiro número:</label>
        <input type="number" name="dia" required>
        <label for="numero">Digite o segundo número:</label>
        <input type="number" name="mes" required>
        <label for="numero">Digite o terceiro número:</label>
        <input type="number" name="ano" required><br><br>
        <button type="submit" name="verificar">Validar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['verificar'])){
                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $ano = $_POST['ano'];

                if (checkdate($mes, $dia, $ano)) {
                 echo "A data é válida: $dia/$mes/$ano";
                } else {
                 echo "A data é inválida: $dia/$mes/$ano";
                }
            }
         }
    ?>

    
</body>
</html>