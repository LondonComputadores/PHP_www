<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula 8c - Integração HTML e PHP</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>; /* O 1o. ";" é do php e o 2o do css.*/
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
 <div>
     <?php 
       echo "<span class='texto'>$txt</span>"; 
     ?>
    
</div>   
</body>
</html>