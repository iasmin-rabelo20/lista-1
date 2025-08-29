<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 - Contar vogais</title>
</head>

<body>

    <form method="POST" action="">
        <label for="palavra">Digite a palavra:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="cv">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['cv'])) {
            $vogais = ['a', 'e', 'i', 'o', 'u'];
            $palavra = $_POST['palavra']; 
            foreach ($vogais as $vogal) {
                $contagem[$vogal] = substr_count($palavra, $vogal);
            }   
            echo "A palavra '$palavra' contém as seguintes vogais:<br>";
            foreach ($contagem as $vogal => $quantidade) {
                echo "$contagem vogal '$vogal': $quantidade vezes<br>";
        }
    }
}
    ?>
</body>

</html>