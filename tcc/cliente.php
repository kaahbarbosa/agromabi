<?php
	//conectando-se com BD MYSQL com a classe PDO
	$username = 'karolinibarbosa';
	$login = '';
	$con = new PDO('mysql:host=localhost;dbname=vendas',$username, $login);
	
	if(isset($_POST['nome'])){
		$nome = $_POST['nome'];
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	if(isset($_POST['senha'])){
		$senha = $_POST['senha'];
	}
	if(isset($_POST['confirmacaosenha'])){
		$confirmacaosenha = $_POST['confirmacaosenha'];
	}
	if(isset($_POST['cpf'])){
		$cpf = $_POST['cpf'];
	}
	if(isset($_POST['cep'])){
		$cep = $_POST['cep'];
	}
	if(isset($_POST['rua'])){
		$rua = $_POST['rua'];
	}
	if(isset($_POST['estado'])){
		$estado = $_POST['estado'];
	}
	if(isset($_POST['numero'])){
		$numero = $_POST['numero'];
	}
	if(isset($_POST['cidade'])){
		$cidade = $_POST['cidade'];
	}
	if(isset($_POST['bairro'])){
		$bairro = $_POST['bairro'];
	}
	if(isset($_POST['nascimento'])){
		$nascimento = $_POST['nascimento'];
	}
	
	$stmt = $con->prepare("INSERT INTO cliente(		nm_completo,
													ds_email,
													ds_senha,
													ds_confirmacaosenha,
													cd_cpf,
													cd_cep,
													nm_rua,
												    sg_estado,
													nr_casa,
													nm_cidade,
													nm_bairro,
													dt_nascimento)
														VALUES('$nome',
																'$email',
																'$senha',
																'$confirmacaosenha',
																'$cpf',
															    '$cep',
																'$rua',
																'$estado',
																'$numero ',
																'$cidade',
																'$bairro',
																'$nascimento')");
																

if ($stmt -> execute())
	{
	echo	"Cadastro efetuado sucesso!";
	}
	else
	{
	echo	"Erro ao cadastrar seus dados!";
	}
?>