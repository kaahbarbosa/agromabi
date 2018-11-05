<?php
	//conectando-se com BD MYSQL com a classe PDO
	$username = 'karolinibarbosa';
	$login = '';
	$con = new PDO('mysql:host=localhost;dbname=vendas',$username, $login);
	
	if(isset($_POST['produto'])) // isset - verifica se a variável $_POST[] existe
	{
		$produto= $_POST['produto'];
	}
		if(isset($_POST['validade']))
	{
		$validade=  ($_POST['validade']);
	}
			if(isset($_POST['produto']))
	{
		$produto =  ($_POST['produto']);
	}
	if(isset($_POST['marca']))
	{
		$marca =  ($_POST['marca']);
	}
	if(isset($_POST['produto']))
	{
		$produto =  ($_POST['produto']);
	}
		if(isset($_POST['produto']))
	{
		$produto =  ($_POST['produto']);
	}
			if(isset($_POST['tipo_produto']))
	{
		$tipo_produto=  ($_POST['tipo_produto']);
	}
	
	
	$stmt = $con->prepare("INSERT INTO produto(
													nm_produto,
													dt_validade,
													vl_produto,
													nm_marca,
													ds_produto,
													ds_tipo_produto)
											
													
											
													
														VALUES('$produto',
																'$validade',
																'$produto,
																'$marca',
																'$produto,
																'$tipo_produto)");

if ($stmt -> execute())
	{
	echo	"Cadastro efetuado sucesso!";
	}
	else
	{
	echo	"Erro ao cadastrar seus dados!";
	}
?>