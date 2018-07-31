<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula 5 - Oper. Aritm.</title>
</head>
<body>
 <div>
     <?php 
        /*$n1 = 3;
        $n2 = 2;
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];*/
        $val1 = $_GET["x"];
        $val2 = $_GET["y"];
      //echo "<h2>Valores Recebidos: $n1 e $n2</h2>";
        echo "<h2>Valores Recebidos: $val1 e $val2</h2>";
      //$m = ($n1 + $n2) / 2;
        /*echo "A soma vale " . ($n1 + $n2);
        echo "<br/> A subtração vale " . ($n1 - $n2);
        echo "<br/> A multiplicação vale " . ($n1 * $n2);
        echo "<br/> A divisão vale " . ($n1 / $n2);
        echo "<br/> O módulo vale " . ($n1 % $n2);
        echo "<br/> A média é " . $m*/
        echo "O valor absoluto de $val2 é " . abs($val2);
        echo "<br/> O valor de $val1 <sup> $val2 </sup> é " .pow($val1, $val2);
        echo "<br/> A raiz quadrada de $val1 é " . sqrt($val1);
        echo "<br/> O valor de $val2 arredondado é " . round($val2); //ceil arredonda pra cima mesmo qndo ...99 e floor p/ baixo mesmo qndo ...01 assim como o round ...6 pra cima e ate .5 para baixo.
        echo "<br/> A parte inteira de $val2 é " . intval($val2);
        echo "<br/> O valor de $val1 em moeda é R$" . number_format($val1,2);

     ?>

 </div>   
</body>
</html>