<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Número Perfeito</title>
</head>
<body>
        <form method="POST" action="">
        <lable for=" numero">Digite um número:</lable>
         <input type="number" id="numero" name="numero" required>
        <button type="submit" name="NP">Verificar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['NP'])) {
                $numero = $_POST['numero'];
        
                $divisores = array();
                for ($i = 1; $i < $numero; $i++) {
                    if ($numero % $i == 0) {
                        $divisores[] = $i;
                    }
                }

                $perfeito = array_sum($divisores) == $numero;
                echo("Número é perfeito? " . ($perfeito ? "Sim" : "Não"));
            }
        }


        ?>
</body>
</html>