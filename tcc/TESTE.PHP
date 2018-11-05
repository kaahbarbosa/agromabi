<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Cadastro</title>
	<style>
		#textn{
			width: 405px;
		}
		body{
			text-align: center;
			background-color: blue; 
		}
		label {
			display: inline-block;
			width: 55px;
		}

		* {
			margin: 0;
			padding: 0;
		}

		body {
			font-family: sans-serif;
			padding: 2em;
		}
	</style>
	
</head>
<body>
	<form action="formulario.php" method="POST">
	<fieldset>
		<legend>Cadastro</legend>
		<label for="nome">Nome:</label>
		<input type="text" name="nome" placeholder="Digite seu Nome" id="textn"><br>
		<label for="cpf">CPF:</label>
	 	<input type="number" name="cpf" placeholder="Digite seu CPF" size="11" maxlength="11">
	 	<label for="cnpj">CNPJ:</label>
		<input type="number" name="cnpj" placeholder="Digite seu CNPJ" size="15" maxlength="15"><br>
		<label for="rg">RG:</label>
		<input type="number" name="rg" placeholder="Digite seu RG">
		<label for="ie">I.E.:</label>
	 	<input type="number" name="ie" placeholder="Digite sua Inscrição Estadual"><br>
		<label for="telefone">Telefone:</label>
	 	<input type="number" name="telefone" placeholder="Digite seu Telefone">
		<label for="email">E-Mail:</label>
		<input type="email" name="email" placeholder="Digite seu E-Mail" class="form-control><br>
		<label for="cep">CEP:</label>
		<input type="number" name="cep" placeholder="Digite seu CEP" id="cep"><input type="button" name="buscarCEP" value="Buscar" onclick="pesquisacep(cep.value);"><br>
		<label for="rua">Rua:</label>
	 	<input type="text" name="rua" placeholder="Digite o Nome da sua Rua" id="rua">
	 	<label for="numero">Número:</label>
		<input type="number" name="numero" placeholder="Digite o Número"><br>
		<label for="bairro">Bairro:</label>
		<input type="text" name="bairro" placeholder="Digite sua Bairro" id="bairro">
		<label for="cidade">Cidade:</label>
	 	<input type="text" name="cidade" placeholder="Digite seu Cidade" id="cidade"><br>
		<label for="estado">Estado:</label>
		<select name="estado" id="uf">
				<option>Acre (AC)</option>
				<option>Alagoas (AL)</option>
				<option>Amapá (AP)</option>
				<option>Amazonas (AM)</option>
				<option>Bahia (BA)</option>
				<option>Ceará (CE)</option>
				<option>Distrito Federal (DF)</option>
				<option>Espírito Santo (ES)</option>
				<option>Goiás (GO)</option>
				<option>Maranhão (MA)</option>
				<option>Mato Grosso (MT)</option>
				<option>Mato Grosso do Sul (MS)</option>
				<option>Minas Gerais (MG)</option>
				<option>Pará (PA) </option>
				<option>Paraíba (PB)</option>
				<option>Paraná (PR)</option>
				<option>Pernambuco (PE)</option>
				<option>Piauí (PI)</option>
				<option>Rio de Janeiro (RJ)</option>
				<option>Rio Grande do Norte (RN)</option>
				<option>Rio Grande do Sul (RS)</option>
				<option>Rondônia (RO)</option>
				<option>Roraima (RR)</option>
				<option>Santa Catarina (SC)</option>
				<option>São Paulo (SP)</option>
				<option>Sergipe (SE)</option>
				<option>Tocantins (TO)</option>
		</select>
	</fieldset>
	<input type="submit" name="cadastrar" value="Cadastrar">
	<input type="reset" name="limpar" value="Limpar">
	</form>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{
      background-image: url('img/fundoa.jpg');
      color: white;
    }
    table{
      float: left;

    }
  	#nome{
  		width: 600px; 
  	}
  	#cpf{
  		width: 300px;
  	}
  	#cnpj{
  		width: 300px;
  	}
  	#email{
  		width: 450px;
  	}
    #uf{
      width: 50px;
    }
    #cep{
      width: 150px;
    }
    #rg{
      width: 300px;
    }
    #rua{
      width: 300px;
    }
    #ie{
      width: 300px
    }
    #telefone{
      width: 300px
    }
    #numero{
      width: 150px;
    }
    #bairro{
      width: 150px;
    }
    #cidade{
      width: 300px;
    }
  	#box{
		  height: 500px;
      border-radius: 10px;
  	}

  </style>
  <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
   
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {
 
            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    }
   
 function validaCPF(cpf)
  {
    var numeros, digitos, soma, i, resultado, digitos_iguais;
    digitos_iguais = 1;
    if (cpf.length < 11)
          return false;
    for (i = 0; i < cpf.length - 1; i++)
          if (cpf.charAt(i) != cpf.charAt(i + 1))
                {
                digitos_iguais = 0;
                break;
                }
    if (!digitos_iguais)
          {
          numeros = cpf.substring(0,9);
          digitos = cpf.substring(9);
          soma = 0;
          for (i = 10; i > 1; i--)
                soma += numeros.charAt(10 - i) * i;
          resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
          if (resultado != digitos.charAt(0))
                return false;
          numeros = cpf.substring(0,10);
          soma = 0;
          for (i = 11; i > 1; i--)
                soma += numeros.charAt(11 - i) * i;
          resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
          if (resultado != digitos.charAt(1))
                return false;
          return true;
          }
    else
        return false;
  }

  </script>
   
  </script>
   </head>
<body>

<div class="container">
  <h2>Cadastro</h2>
  <form action="cadastroCliente.php" method="POST" enctype="multipart/form-data">
    <fieldset id="box">
      <table cellspacing="10">
        <tr>
          <td>
            <label for="nome">Nome:</label>
          </td>
          <td>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu Nome" name="nome"><br>
          </td>
        <td>
          <label for="Senha">Senha:</label>
          <input type="password" class="form-control" maxilength"8" id="numero" placeholder="Digite sua senha" name="numero"><br>
        </td>
        <td>
          <label for="Confirma Senha">Confirma Senha:</label>
          <input type="password" class="form-control" maxilength"8" id="numero" placeholder="Confirme sua senha" name="numero"><br>
        </td>
        </tr>
        <tr>
          <td>
            <label for="cpf">CPF:</label>      
          </td>
          <td>
            <input type="number" class="form-control" id="cpf" placeholder="Digite seu CPF" name="cpf" maxlength="11" "format ###.###.###-##"><br>      
          </td>
          <td>
            <label for="rg">RG:</label>      
          </td>
          <td>
            <input type="number" class="form-control" id="rg" placeholder="Digite seu RG" name="rg"><br>      
          </td>
        </tr>
        <tr>
          <td>
            <label for="telefone">Telefone:</label>
          </td>
          <td>
            <input type="number" class="form-control" id="telefone" placeholder="Digite seu Telefone" name="telefone"><br>
          </td>
          <td>
            <label for="email">Email:</label>
          </td>
          <td>
            <input type="email" class="form-control" id="email" placeholder="Digite seu E-Mail" name="email"><br>
          </td>
        </tr>
        <tr>
          <td>
            <label for="cep">CEP:</label>
          </td>
          <td>
            <input type="number" class="form-control" id="cep" placeholder="Digite seu CEP" name="cep" maxlength="9"><button type="button" class="btn btn-default" id="but2" name="buscarCEP" onclick="pesquisacep(cep.value);">Buscar</button><br><br> 
          </td>
          <td>
            <label for="rua">Rua:</label>
          </td>
          <td>
            <input type="text" class="form-control" id="rua" placeholder="Digite sua Rua" name="rua"><br><br>
          </td>
        </tr>
        <tr>
          <td>
            <label for="numero">Número:</label>
          </td>
          <td>
            <input type="number" class="form-control" id="numero" placeholder="Digite seu Número" name="numero"><br>
          </td>
          <td>
            <label for="bairro">Bairro:</label>
          </td>
          <td>
            <input type="text" class="form-control" id="bairro" placeholder="Digite seu Bairro" name="bairro"><br>
          </td>
        </tr>
        <tr>
          <td>
            <label for="cidade">Cidade:</label>
          </td>
          <td>
            <input type="text" class="form-control" id="cidade" placeholder="Digite sua Cidade" name="cidade"><br>
          </td>
          <td>
            <label for="estado">Estado:</label>
          </td>
          <td>
            <input type="text" class="form-control" id="uf" placeholder="UF" name="estado" maxlength="2"><br>
          </td>
        </tr>
        <tr>
          <td>
            <label for="file">Arquivo:</label>
          </td>
          <td>
            <input type="file" name="foto"><br>
          </td>
        </tr>
      </table>
    <div class="checkbox">
    </div>
    	<input type="button" value="Enviar" class="btn btn-default" name="Enviar " id="but" /> 
    <button type="reset" onclick="validaCPF(cpf) class="btn btn-default" id="but">Limpar</button>
   <script>function checa(){     if (document.nome_do_form.campoCPF.value!=""){         document.nome_do_form.submit();    }else{        alert("O campo CPF não pode ficar vazio");}}</script>
    </fieldset>  
  </form>
</div>

</body> 
</html>

<?php

	
	function isCpf($cpf){
		$cpf = preg_replace("/[^0-9]/", "", $cpf);

		$digitoUm = 0;
		$digitoDois = 0;

		for($i = 0, $x = 10; $i <= 8; $i++, $x--){
			$digitoUm += $cpf[$i] * $x;
		}
		for ($i = 0, $x = 11; $i <= 9; $i++, $x--){
			if(str_repeat($i, 11) == $cpf){
				return false;
			}
			$digitoDois += $cpf[$i] * $x;
		}

		$calculoUm  = (($digitoUm%11) <2) ? 0 : 11-($digitoUm%11);
		$calculoDois = (($digitoDois%11) <2) ? 0 : 11-($digitoDois%11);
		if($calculoUm <> $cpf[9] || $calculoDois <> $cpf[10]){
			return false;
		}
		return true;
	}
		$cpf = '111.444.777-35';
		if (isCpf($cpf)){
			echo 'CPF valido';
		}else{
			echo 'CPF invalido';
		}
?>

 <?php
	//conectando-se com BD MYSQL com a classe PDO
	$con = new PDO("mysql:host=localhost;dbname=vendas","karolinibarbosa","");
	if(isset($_POST['nome'])) // isset - verifica se a variável $_POST[] existe
	{
		$nome = $_POST['nome'];
	}
		if(isset($_POST['email']))
	{
		$email =  ($_POST['email']);
	}
	if(isset($_POST['cpf']))
	{
		$cpf =  ($_POST['cpf']);
	}
	if(isset($_POST['cep']))
	{
		$cep =  ($_POST['cep']);
	}
	if(isset($_POST['rua']))
	{
		$rua =  ($_POST['rua']);
	}
	if(isset($_POST['estado']))
	{
		$estado =  ($_POST['estado']);
	}
	if(isset($_POST['numero']))
	{
		$numero =  ($_POST['numero']);
	}
		if(isset($_POST['cidade']))
	{
		$cidade =  ($_POST['cidade']);
	}
	if(isset($_POST['bairro']))
	{
		$bairro =  ($_POST['bairro']);
	}

	if(isset($_POST['nascimento']))
	{
		$nascimento =  ($_POST['nascimento']);
	}
	
	

	
	$stmt = $con->prepare("INSERT INTO cliente(
													nm_nome,
													nm_email,
													cd_cpf,
													cd_cep,
													nm_rua,
													sg_estado,
													nr_numero,
													nm_cidade,
													nm_bairro,
													dt_nascimento)
											
														VALUES('$nome',
																'$email',
																'$cpf',
																'$cep',
																'$rua',
																'$estado',
																'$numero',
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