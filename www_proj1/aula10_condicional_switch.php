<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula 10 - Condicional Switch </title>
</head>
<body>
 <div>
     <?php 
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $op = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($op) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n); // ou pode ser tbm $n ^ 0.5 ou ^ (1/2); Ambos são meio.
        } 
        echo "O resultado da operação foi <span class-'foco'>$r</span>"
     ?>
    <a href="aula10_condicional_switch.html" class="botao">Voltar</a>
</div>   
</body>
</html>