<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 -  Dois números e a soma</title>
</head>
<body>

 <form method="POST" action="">
        <label for="numero">Digite o primeiro número:</label>
        <input type="number" id="numero" name="numero" required>
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="dns">Verificar</button>
    </form>
    
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['dns'])) {
            $numero = $_POST['numero'];
            $numero2 = $_POST['numero2'];
            $soma = $numero + $numero2;
            echo "A soma entre $numero e $numero2 é igual a $soma.";
        }
        
    }
?>
</body>
</html>