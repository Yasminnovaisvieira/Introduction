<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Exercicio3</title>
</head>
<body>
    <form action="" method="post">
        <label>Digite um numero:</label>
        <input type="number" name="numero" id="numero"><br/>
        <input type="submit" value="Verificar" name="bntVerificar" id="btnVerificar">
    </form>
</body>
</html>
 
<?php
    if(isset($_POST['bntVerificar'])){
        $num = $_POST['numero'];
 
        if($num > 0){
            echo "Valor positivo!";
        }
        else{
            if($num == 0){
                echo"Valor igual a 0!";
            }
            else{
                echo "Valor Negativo!";
            }
        }
    }
?>