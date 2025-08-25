    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 4 - fatorial</title>
    </head>
    <body>
        
    <form method="POST" action="">
            <lable for=" numero">Digite um número:</lable>
            <input type="number" id="numero" name="numero" required>
            <button type="submit" name="fatorial">Verificar</button>
        </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['fatorial'])) {
            $numero = $_POST['numero'];
            $fatorial = $numero;
            while ($numero > 1) {
                $numero = $numero - 1;
                $fatorial = $fatorial * $numero;
            }
        
            echo($fatorial);
        }
        }
        

        ?>
    
    </body>
    </html>