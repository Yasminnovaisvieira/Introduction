<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Exercicio5</title>
</head>
<body>
    <form action="" method="post">
        <label>Digite um valor A:</label>
        <input type="number" name="numero" id="numero"><br/>
     
        <br/><br/>
        <label>Digite um valor B:</label>
        <input type="number" name="numero2" id="numero2"><br/>

        <input type="submit" value="Verificar" name="bntVerificar" id="btnVerificar">
    </form>
</body>
</html>

<?php
    if(isset($_POST['bntVerificar'])){
        $A = $_POST['numero'];
        $B = $_POST['numero2'];

        if($A < $B){
            echo "$A, $B!";
        }
        else{
           
                echo "$B, $A!";      
         }
    }
?>