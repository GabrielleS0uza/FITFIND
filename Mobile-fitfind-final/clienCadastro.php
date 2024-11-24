<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../estilo.css">
<link rel="stylesheet" href="../css/bootstrap.css">
	
</head>

<body>
	<?php 
	include_once("conexao.php");
	
	if($_POST)
	{
		$nome = $_POST['txtNome'];
		$cpf = $_POST['txtCpf'];
		$genero = $_POST['txtGenero'];
		$nascimento = $_POST['txtNascimento'];
	 	$endereco = $_POST['txtEndereço'];
		$bairro = $_POST['txtBairro']; 
		$cidade = $_POST['txtCidade']; 
		$uf = $_POST['txtUF'];
		$cep = $_POST['txtCep'];
		$email = $_POST['txtEmail'];
		$telefone = $_POST['txtTelefone']; 
		$obs = $_POST['txtObs'];
		$status = $_POST['txtStatus'];
		$senha = $_POST['txtSenha'];
		

	$sql = $conn->prepare("insert into cliente
	(nome_cliente, cpf_cliente, genero_cliente, nascimento_cliente, rua_cliente, bairro_cliente, 
     cidade_cliente, estado_cliente, cep_cliente, obs_cliente, status_cliente, email_cliente, telefone_cliente, senha_cliente
	)
	values   
	(:nome_cliente, :cpf_cliente, :genero_cliente, :nascimento_cliente, :rua_cliente, :bairro_cliente, 
     :cidade_cliente, :estado_cliente, :cep_cliente, :obs_cliente, :status_cliente, :email_cliente, :telefone_cliente, :senha_cliente)
	");
	
	$sql->execute(array(
	':nome_cliente'=>$nome,
	':cpf_cliente'=>$cpf,	
	':genero_cliente'=>$genero,
	':nascimento_cliente'=>$nascimento,
	':rua_cliente'=>$endereco,
	':bairro_cliente'=>$bairro,
	':cidade_cliente'=>$cidade,
	':estado_cliente'=>$uf,
	':cep_cliente'=>$cep,
	':obs_cliente'=>$obs,
	':status_cliente'=>$status,		
	':email_cliente'=>$email,
	':telefone_cliente'=>$telefone,
	':senha_cliente'=>$senha
	));
	
		
	if($sql->rowCount() == 1)
	{
		echo "<p>Dados cadastrados com sucesso!</p>";
		echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";	
	}
		
	}
	else 
	{
		header("Location:cliente.php");
	}

	if($_POST && isset($_POST['txtTela']))
	{ 
		if($_POST)						
		{
			$sql = $conn->query("select * from cliente where email_cliente = '".$login."' and senha_cliente = '".$senha."'");

			foreach($sql as $linha){
				$usuariologado = $linha['email_cliente'];
				session_start();

				$_SESSION['clienteSistemaID'] = $linha['codigo_cliente'];
				$_SESSION['clienteSistemaLogin'] = $linha['email_cliente'];
				$_SESSION['clienteSistemaNome'] = $linha['nome_cliente'];
				$_SESSION['tipo'] = 'cliente';
			}
		}					
		
		$tela = $_POST['txtTela'];
		if($tela = 'm'){
			header("Location:entrar.php");
			
	}
	
	}
	?>
	
	<a href="cliente.php" class="btn btn-dark">Voltar</a>
	
	
	
</body>
</html>