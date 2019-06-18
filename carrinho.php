<?php
   //Avisando o PHP que vamos trabalhar com sessoões.
   session_starl();
  
   //Adicionar ao carrinho
   if(isset($GET["adicionar"])) {
       $temp = array("produto" => "Celular Motorola",
                     "preço" => 1000.00,
                     "quantidade" => 1,
                     "total" => 1000.00);

       $_SESSION['carrinho'][] = $temp;   
   }

   //Referência a váriavel de "sessão carrinho".
   //na váriavel local "carrinho"
   $carrinho = $_SESSION['carrinho'];

   //Obtendo a quantidade de produtos que estão no carrinho
   //usando a função count.
   $total_produtos = count($carrinho);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Carrinho de Compras </title>
    <link href="main.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <div id="corpo">
        <h1>Produtos no Carrinho</h1>
        <table>
            <thead>
                <tr>
                   <th>Produto</th>
                   <th>Qunatidade</th>
                   <th>Preço</th>
                   <th>Total</th>
                </th>
            </thead>
            <tbody>
             <!--Percorrendo o array de produtos com
                 estrutura for !-->
             <?php  for($i=0; $i<=$total_produtos; $i++): ?>
             <tr>
                <td><?=$carrinho[$i]['produto'] ?></td>
                <td><?=$carrinho[$i]['qtd'] ?></td>
                <td><?=$carrinho[$i]['preco'] ?></td>
                <td><?=$carrinho[$i]['total'] ?></td>
            </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    </div> 
</body>
</html>










             









    
















