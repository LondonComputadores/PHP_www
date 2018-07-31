<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula 9 - Condicional If </title>
</head>
<body>
 <div>
     <?php 
       $a = isset($_GET["ano"])?$_GET["ano"]:1900;
       $i = date("Y") - $a; // Y maiúsculo para ano 4 digitos e min. p/ 2 dig.
       echo "Se você nasceu em $a terá $i anos"; 
       if ($i < 16) {
           $tipovoto = "não vota";          
       }
       elseif (($i >= 16 && $i < 18) || ($i > 65)) {
          $tipovoto = "voto opcional"; 
       }
       else {
          $tipovoto = "voto obrigatório";
       }        
       echo "<br/> Para essa idade $tipovoto!"   
     ?>
    
</div>   
</body>
</html>