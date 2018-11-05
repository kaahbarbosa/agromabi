
<meta charset="UTF-8">
<?php
     $conexao = new PDO ('mysql:host=localhost;dbname=meuproduto', "karolinibarbosa","");
     
     $select = $conexao -> prepare ("SELECT * FROM produtos");
     $select->execute();
     $fetch = $select->fetchAll();
     
      foreach ($fetch as $produto ) {
    
        echo 'Nome do produto: '.$produto['nome'].'<a> 
            Quantidade: '.$produto ['quantidade'].'<a>
            Preço: R$ '.number_format($produto['preco'],2,",",",").'
            <a href="carrinho.php?add=carrinho&id='.$produto ['id'].'">adicionar ao carrinho </a>
            <br/>';
            
            
    }
    ?>