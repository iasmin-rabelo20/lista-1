<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 -  Dois números e a soma.</title>
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
            $numero2 = $_POST['numero2'];
                
            $soma = $numero + $numero2;
    
            echo "A soma entre $numero e $numero2 é igual a $soma.";
        }
    }
?>
</body>
</html>