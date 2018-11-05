<?php
	//conectando-se com BD MYSQL com a classe PDO
	$username = 'karolinibarbosa';
	$login = '';
	$con = new PDO('mysql:host=localhost;dbname=vendas',$username, $login);
	
	if(isset($_POST['fornecedor'])) // isset - verifica se a variável $_POST[] existe
	{
		$fornecedor= $_POST['fornecedor'];
	}
		if(isset($_POST['telefone']))
	{
		$telefone =  ($_POST['telefone']);
	}
	if(isset($_POST['endereco']))
	{
		$endereco =  ($_POST['endereco']);
	}
	if(isset($_POST['bairro']))
	{
		$bairro =  ($_POST['bairro']);
	}
	if(isset($_POST['rua']))
	{
		$rua =  ($_POST['rua']);
	}
	if(isset($_POST['cep']))
	{
		$cep =  ($_POST['cep']);
	}
	if(isset($_POST['cnpj']))
	{
		$cnpj =  ($_POST['cnpj']);
	}
	

	
	$stmt = $con->prepare("INSERT INTO fornecedor(
													nm_fornecedor,
													nr_telefone,
													nm_endereco,
													nm_bairro,
													nm_rua,
													nr_cep,
													nr_cnpj)
													
											
													
											
													
														VALUES('$fornecedor',
																'$telefone',
																'$endereco',
																'$bairro',
																'$rua',
																'$cep',
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