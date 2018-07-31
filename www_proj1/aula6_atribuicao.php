<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Aula 6 - Atribuição!</title>
</head>
<body>
 <div>
     <?php 
        $preco = $_GET["p"];
        /*echo "O preço do produto é R$ $preco<br/>";*/ // colocar o valor pela barra url do navegador ?p=1500.00 > enter
        echo "O preço do produto é R$ " . number_format($preco,2);
        $preco = $preco + ($preco * 10 / 100); // tbm poderia ser $preco += $preco * 10 /100; assim mesmo fora dos ().
        echo "<br/> O novo preço com 10% de taxa é R$ " . number_format($preco,2); // number_format serve para passar o valor em formato de moeda, nesse caso, o Real com 2 casas após a vírgula.

     ?>

 </div>   
</body>
</html>