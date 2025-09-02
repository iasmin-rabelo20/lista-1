<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16 - Receber voto</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite o seu nome:</label>
        <input type="text" name="nome" required><br><br>
        <label for="numero">Digite a sua idade:</label>
        <input type="number" name="numero" required><br><br>
        <button type="submit" name="verificar">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['verificar'])){
                $nome = $_POST['nome'];
                $numero = $_POST['numero'];

                if ($numero >= 18){
                    echo "$nome, você pode votar.";
                }else{
                    echo "$nome, você não pode votar.";
                }
            }
        }
    ?>

    
</body>
</html>