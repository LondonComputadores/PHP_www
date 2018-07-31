<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula 6b - Atribuição!</title>
</head>
<body>
 <div>
     <?php 
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior é " . $atual--; // o código mostra pra ambos o mesmo ano pq o operador deveria ser antes da variável concatenada . $atual como no exemplo abaixo:
        echo "<br/> O ano atual é $atual e o ano anterior é " . --$atual;

        #Referência entre variáveis (NORMAL)
        
        $a = 3;
        $b = $a;
        $b += 5; // aqui é o mesmo que 3+5 (3 de $a que foi recebido por $b e que é ele == a ele mesmo + 5 == 8)
        echo "<br/> A variável A vale $a"; // output: 3
        echo "<br/> A variável B vale $b"; // output: 8

        #Referência entre variáveis (COM REFERÊNCIA "&")

        $a = 3;
        $b = &$a; // aqui o "&" dá a referência de valor de "$b" à "$a"
        $b += 5; 
        echo "<br/> A variável A vale $a agora com a referência &";//output: 8 
        echo "<br/> A variável B vale $b ainda"; //output: 8

        $x = "abc";
        $$x = "def";
        echo "<br/> O conteúdo da variável X é: $x";
        echo "<br/> A variável ABC criada recebeu o valor: $abc";
        
     ?>

 </div>   
</body>
</html>