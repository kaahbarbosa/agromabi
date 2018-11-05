<?php
//conectando-se com BD MYSQL com a classe PDO
	$username = 'karolinibarbosa';
	$login = $_POST['email'];
	$senha = $_POST['senha'];
	$con = new PDO('mysql:host=localhost;dbname=vendas',$username, $login);
	
$sql = "SELECT * FROM `cliente` WHERE ds_email='$login' and ds_senha='$senha'";
    $resultado = $con->query($sql);
	
    $dado = $resultado->fetch(PDO::FETCH_OBJ);

	var_dump($resultado->rowCount());
	
	if($resultado->rowCount()>0)		
	{	
	session_start();
	$_SESSION['nome']=$dado->nm_completo;
	$_SESSION['id']=$dado->cd_cliente;
	//redirecionar aqui a pagina de login header
	header('Location: index.1.html');
	}
	
	//fornecedor *****
	$sql = "SELECT * FROM `cliente` WHERE ds_email='$login' and ds_senha='$senha'";
    $resultado = $con->query($sql);
	
    $dado = $resultado->fetch(PDO::FETCH_OBJ);

	var_dump($resultado->rowCount());
	
	if($resultado->rowCount()>0)		
	{	
	session_start();
	$_SESSION['nome']=$dado->nm_completo;
	$_SESSION['id']=$dado->cd_cliente; 
	//redirecionar aqui a pagina de login
	}