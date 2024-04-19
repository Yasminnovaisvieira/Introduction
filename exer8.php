<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Exercicio8</title>
</head>
<body>
    <form action="" method="post">
        <label>Digite salário:</label>
        <input type="number" step="0.01" name="salario" id="asalario"><br/>
     
        <br/><br/>

        <input type="submit" value="Verificar" name="bntVerificar" id="btnVerificar">
    </form>
</body>
</html>

<?php
    if(isset($_POST['bntVerificar'])){
        $salario = $_POST['salario'];

        if($salario > 300){
            $reajuste = ($salario + ((30/100) * $salario));
            echo "O salario reajustado é $reajuste!";
        }
        else{
            $reajuste = ($salario + ((50/100 )* $salario) );
            echo "O salario reajustado é $reajuste!";      
         }
    }
?>