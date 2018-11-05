<meta charset="UTF-8">
<?php
session_start();

if (!isset($_SESSION['itens']))
{
    $_SESSION['itens'] = array();
}

if(isset($_GET['add']) && $_GET['add'] == "carrinho")
{
    $idProduto = $_GET['id'];
    
    if(!isset ($_SESSION['itens'] [$idproduto]))
    {
        $_SESSION['itens']  [$idProduto] = 1;
    }else{
        $_SESSION['itens']  [$idProduto] += 1;
    }
        
if(count ($_SESSION['itens']) == 0){
     echo 'Carrinho Vazio <br><a href="index.php">adiocionar itens</a>';
}else{      
       $_SESSION['dados']= array();
    
      foreach ($_SESSION ['itens'] as $idProduto => $quantidade ){
      $conexao = new PDO ('mysql:host=localhost;dbname=meuproduto', "karolinibarbosa","");
      $select = $conexao-> prepare ("SELECT * FROM produtos WHERE id=?");  
      $select->bindParam(1,$idProduto);
      $select-> execute();
      $produtos = $select ->fetchAll();
      $total = $quantidade * $produtos[0]['preco'];
      echo
        'Nome: '.$produtos[0]["nome"].'<br/>
        Preco: '.number_format($produtos[0]["preco"],2,",",".").'<br/>
        Quantidade: '.$produtos[0]['quantidade'].'<br/>
        Total: '.number_format($total,2,",",".").'<br/>
        <a href="remover.php?remover=carrinho&id='.$idProduto.'">Remover<a/>
          <hr/><br><br><br> 
          ';
     
      array_push(
        $_SESSION['dados'],
        array(
        'id_produto' => $idProduto,
        'quantidade' => $produtos[0]['quantidade'],
        'preco'=> $produtos[0]['preco'],    
        'total' => $total   
        )
        );
     
}
 echo '<a href="finalizar.php"> Finalizar pedido <a/>';
}
}
?>