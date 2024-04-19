<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Exercicio4</title>
</head>
<body>
    <form action="" method="post">
        <label>Digite um valor A:</label>
        <input type="number" name="numero" id="numero"><br/>
     
        <br/><br/>
        <label>Digite um valor B:</label>
        <input type="number" name="numero2" id="numero2"><br/>
       
        <br/><br/>
        <label>Digite um valor C:</label>
        <input type="number" name="numero3" id="numero3"><br/>
     
        <br/><br/>
        <label>Digite um valor D:</label>
        <input type="number" name="numero4" id="numero4"><br/>
        <input type="submit" value="Verificar" name="bntVerificar" id="btnVerificar">
    </form>
</body>
</html>

<?php
    if(isset($_POST['bntVerificar'])){
        $A = $_POST['numero'];
        $B = $_POST['numero2'];
        $C = $_POST['numero3'];
        $D = $_POST['numero4'];
        if(($A + $C) > ($B * $D)){
            echo "A + C é maior que B * D!";
        }
        else{
            if(($A + $C) == ($B * $D)){
                echo "A + C é igual que B * D!";
            }
            else{
                echo "A + C é menor que B * D!";
            }
        }
    }
?>