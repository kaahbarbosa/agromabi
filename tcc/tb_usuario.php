 <?php
	//conectando-se com BD MYSQL com a classe PDO
	$username = 'karolinibarbosa';
	$login = '';
	$con = new PDO('mysql:host=localhost;dbname=vendas',$username, $login);
	
	if(isset($_POST['login'])) // isset - verifica se a variável $_POST[] existe
	{
		$login = $_POST['login'];
	}
		if(isset($_POST['senha']))
	{
		$senha =  ($_POST['senha']);
	}
	if(isset($_POST['cd_usuario']))
			$cd_usuario =  ($_POST['cd_usuario']);
	
		$stmt = $con->prepare("INSERT INTO tb_usuario(
													login,
													senha,
													cd_usuario)
											
													
											
													
														VALUES('$login',
																'$senha'
															    '$cd_usuario' )");

if ($stmt -> execute())
	{
	echo	"Cadastro efetuado sucesso!";
	}
	else
	{
	echo	"Erro ao cadastrar seus dados!";
	}
?>