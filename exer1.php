<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Exercicio1</title>
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
 
        if($num > 10){
            echo "O valor é maior que 10!";
        }
        else{
            echo "O valor é menor que 10!";
        }
    }
?>
