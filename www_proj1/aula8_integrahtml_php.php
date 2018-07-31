<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula 8 - Integração HTML e PHP</title>
</head>
<body>
 <div>
     <?php 
        $valor = $_GET["val"];
        $sr = sqrt($valor);
        echo "A raiz quadrada de $valor é igual a " . number_format($sr,2);
     ?>

    <a href="aula8_integrahtml_php.html"/>Voltar</a>

</div>   
</body>
</html>