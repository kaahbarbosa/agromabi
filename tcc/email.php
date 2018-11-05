<?php
	Ini_set('display_errors',1);
	
	Error_reporting(E_ALL);
	
	$from = $_POST['email'];
	
	$to = 'karolinibarbosa018@gmail.com';
	
	$subject = 'Assunto do email';
	
	$message = $_POST['conteudo'];
	
	$header = "De:".$_POST['nome'];
	
	Mail($to, $subject, $message, $header);
	
	echo "Mensagem de e-mail enviada";

?>