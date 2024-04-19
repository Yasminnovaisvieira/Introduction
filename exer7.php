<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Exercicio7</title>
</head>
<body>
    <form action="" method="post">
        <label>Digite altura:</label>
        <input type="number" step="0.01" name="altura" id="altura"><br/>
     
        <br/><br/>
        <label>Digite o sexo da pessoa(M ou H):</label>
        <input type="string" name="sexo" id="sexo"><br/>

        <input type="submit" value="Verificar" name="bntVerificar" id="btnVerificar">
    </form>
</body>
</html>

<?php
    if(isset($_POST['bntVerificar'])){
        $altura = $_POST['altura'];
        $sexo = $_POST['sexo'];


        if($sexo == 'H'){
            $ideal = ((72.7 * $altura) - 58 );
            echo"Peso ideal é $ideal";
        }
        else{
            if($sexo = 'M'){
            $ideal = ((62.1 * $altura) - 44.7);
            echo"Peso ideal é $ideal";
            }
            else{
                echo "Insira o sexo da pessoa novamente!";
            }
        }
    }
?>