<?php
	//conectando-se com BD MYSQL com a classe PDO
	$username = 'karolinibarbosa';
	$login = '';
	$con = new PDO('mysql:host=localhost;dbname=vendas',$username, $login);
	
	if(isset($_POST['pedido'])) // isset - verifica se a variável $_POST[] existe
	{
		$pedido= $_POST['pedido'];
	}
		if(isset($_POST['pedido']))
	{
		$pedido=  ($_POST['pedido']);
	}
	if(isset($_POST['pedido']))
	{
		$pedido =  ($_POST['pedido']);
	}
	
	$stmt = $con->prepare("INSERT INTO pedido(
													nm_pedido,
													ds_pedido,
													vl_pedido)
											
													
											
													
														VALUES('$pedido',
																'$pedido',
																'$pedido')");

if ($stmt -> execute())
	{
	echo	"Cadastro efetuado sucesso!";
	}
	else
	{
	echo	"Erro ao cadastrar seus dados!";
	}
?>