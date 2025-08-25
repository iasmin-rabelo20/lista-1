<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Par ou Ímpar</title>
</head>
<body>
   
    <form method="POST" action="">
        <lable for=" numero">Digite um número:</lable>
        <input type="number" id="numero" nome="numero" required>
        <button type="submit" name="verificar_par_impar">Verificar</button> 
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
          if(isset($_POST['verificar_par_impar'])){
            $numero = $_POST['numero'];


            if($numero % 2 == 0){
                echo "O número $numero é <strong>par<strong>";
          } else {
                echo "O número $numero é <strong>ímpar<strong>";
        }
      }
    }

    ?>
</body>
</html>