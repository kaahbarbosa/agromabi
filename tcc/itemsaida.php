<?php
	//conectando-se com BD MYSQL com a classe PDO
	$username = 'karolinibarbosa';
	$login = '';
	$con = new PDO('mysql:host=localhost;dbname=vendas',$username, $login);
	
	if(isset($_POST['item_saida'])) // isset - verifica se a variável $_POST[] existe
	{
		$item_saida= $_POST['item_saida'];
	}
		if(isset($_POST['produto']))
	{
		$produto =  ($_POST['produto']);
	}
	if(isset($_POST['produto']))
	{
		$produto =  ($_POST['produto']);
	}
	if(isset($_POST['lote']))
	{
		$lote =  ($_POST['lote']);
	}
	if(isset($_POST['quantidade']))
	{
		$quantidade =  ($_POST['quantidade']);
	}
	if(isset($_POST['produto']))
	{
		$produto =  ($_POST['produto']);
	}

	
	$stmt = $con->prepare("INSERT INTO item_saida(
													dt_item_saida,
													nm_produto,
													vl_produto,
													nr_lote,
													nr_quantidade,
													ds_produto)
													
											
													
											
													
														VALUES('$item_saida',
																'$produto',
																'$produto',
																'$lote',
																'$quantidade',
																'$produto')");

if ($stmt -> execute())
	{
	echo	"Cadastro efetuado sucesso!";
	}
	else
	{
	echo	"Erro ao cadastrar seus dados!";
	}
?>