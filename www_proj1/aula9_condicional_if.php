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
       if ($i >= 18) {
           $vot = "já pode votar";
           $dir = "já pode dirigir"; 
       }
       else {
           $vot = "não pode votar";
           $dir = "não pode dirigir";
       }
       echo "<br/> Com essa idade você $vot e $dir!";
     ?>
    
</div>   
</body>
</html>