<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Número Amigo</title>
</head>
<body>
    <form method="POST" action="">
        <lable for=" numero">Digite um número:</lable>
         <input type="number" id="numero" name="numero" required>
        <button type="submit" name="NA">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['fatorial'])) {
            $numero = $_POST['numero'];
         
        }
        }
        

        ?>
</body>
</html>