<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula 8b - Integração HTML e PHP</title>
</head>
<body>
 <div>
     <?php 
        $nome = isset($_GET["nome"])? $_GET["nome"] : "[nao informado]";
        $ano = isset($_GET["ano"])? $_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])? $_GET["sexo"] : "[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos.";
     ?>
    <a href="aula8c_integrahtml_php.html">Voltar</a>"
</div>   
</body>
</html>