<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - P, N ou Z</title>
</head>

<body>

    <form method="POST" action="">
        <lable for=" numero">Digite um número:</lable>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="pnz">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['pnz'])) {
            $numero = $_POST['numero'];

      if($numero > 0){
                echo "O número $numero é <strong>Positivo<strong>";
          } elseif ($numero < 0) {
                echo "O número $numero é <strong>Negativo<strong>";
        } else {
            echo "O número $numero é <strong>Igual a zero<strong>";
        
            }

    }
}
    ?>

</body>

</html>