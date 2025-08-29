<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9 -  Dois números e a soma.</title>
</head>
<body>
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