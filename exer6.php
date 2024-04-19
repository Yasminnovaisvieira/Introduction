<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Exercicio6</title>
</head>
<body>
    <form action="" method="post">
        <label>Digite nota 1:</label>
        <input type="number" name="numero" id="numero"><br/>
     
        <br/><br/>
        <label>Digite nota 2:</label>
        <input type="number" name="numero2" id="numero2"><br/>

        <br/><br/>
        <label>Digite unota 3:</label>
        <input type="number" name="numero3" id="numero3"><br/>

        <br/><br/>
        <label>Digite nota 4:</label>
        <input type="number" name="numero4" id="numero4"><br/>

        <input type="submit" value="Verificar" name="bntVerificar" id="btnVerificar">
    </form>
</body>
</html>

<?php
    if(isset($_POST['bntVerificar'])){
        $nota1 = $_POST['numero'];
        $nota2 = $_POST['numero2'];
        $nota3 = $_POST['numero3'];
        $nota4 = $_POST['numero4'];

        if((($nota1 + $nota2 + $nota3 + $nota4) / 4) >= 7){
            echo "Aprovado!";
        }
        else{
           
            echo "Reprovado";      
         }
    }
?>