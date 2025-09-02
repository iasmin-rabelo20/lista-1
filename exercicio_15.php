<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15 -  Calcular IMC</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Digite o seu peso:</label>
        <input type="number" name="peso" required>
        <label for="numero">Digite a sua altura:</label>
        <input type="number" name="altura" required>
        <button type="submit" name="verificar">Enviar</button>

    </form>
    
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['verificar'])){
                $peso= $_POST['peso'];
                $altura = $_POST['altura'] / 100;

                $imc  = $peso/($altura*$altura);

                if ($imc < 18.5){
                    echo "Seu IMC é $imc e você está abaixo do peso.";
                } elseif ($imc >= 18.5 && $imc <= 24.9){
                    echo "Seu IMC é $imc e você está saudável.";
                 } elseif ($imc >= 25 && $imc <= 30){
                    echo "Seu IMC é $imc e você está com sobrepeso.";
                } elseif ($imc >= 30.1 && $imc <= 39.9){
                    echo "Seu IMC é $imc e você está obeso.";
                } else {
                    echo "Seu IMC é $imc e você está obeso mórbido.";
                }

             }
        } 
    ?>
</body>
</html>