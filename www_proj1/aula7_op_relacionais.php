<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula 7 - Op. Relacionais!</title>
</head>
<body>
 <div>
     <?php 
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br/>";
        $r = ($tipo == "s") ? $n1+n2 : $n1*$n2;
        echo "O resultado será $r"; //digitar ?a=5&b=3&op=m (m=mult. e s=soma etc...) na url do browser do localhost para testar!

        $a = 3;
        $b = "3";
        $r = ($a === $b) ? "SIM" : "NÃO"; //terceiro "=" certifica e se o tipo é o mesmo
        echo "<br/> As variáveis A e B são identicas? $r"; //output: NÃO

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1+$nota2) / 2;
        echo "<br/> A média entre $nota1 e $nota2 é $media <br/>";
        echo "<br/> A situação do aluno é " . (($n<6)? "Reprovado" : "Aprovado");
        /*$sit = ($n<6)? "Reprovado" : "Aprovado";
        echo "<br/> A situação do aluno é $sit";*/ //esse comentário foi utilizado antes do ex acima descomentado

        #Operadores Lógicos (and, or ||, xor, &&, Not)
        $ano = $_GET["an"];
        $idade = 2018 - $ano;
        echo "<br/> Quem nasceu em $ano tem idade de $idade anos!";
        $tipo = ($idade>=18 && $idade<=65)?"Obrigatório":"NÃO Obrigatório";
        echo "<br/> E dessa forma seu voto é $tipo";
     ?>

 </div>   
</body>
</html>