<?php
	//conectando-se com BD MYSQL com a classe PDO
	$username = 'karolinibarbosa';
	$login = '';
	$con = new PDO('mysql:host=localhost;dbname=vendas',$username, $login);
	
	if(isset($_POST['loja'])) // isset - verifica se a variável $_POST[] existe
	{
		$loja= $_POST['loja'];
	}
		if(isset($_POST['endereco']))
	{
		$endereco =  ($_POST['endereco']);
	}
	if(isset($_POST['loja']))
	{
		$loja =  ($_POST['loja']);
	}
	if(isset($_POST['telefone']))
	{
		$telefone =  ($_POST['telefone']);
	}
	if(isset($_POST['cnpj']))
	{
		$cnpj =  ($_POST['cnpj']);
	}
	
	$stmt = $con->prepare("INSERT INTO loja(
													nm_loja,
													nm_endereco,
													nr_loja,
													nr_telefone,
													nr_cnpj)
													
											
													
											
													
														VALUES('$loja',
																'$endereco',
																'$loja',
																'$telefone',
																'$cnpj')");

if ($stmt -> execute())
	{
	echo	"Cadastro efetuado sucesso!";
	}
	else
	{
	echo	"Erro ao cadastrar seus dados!";
	}
?>