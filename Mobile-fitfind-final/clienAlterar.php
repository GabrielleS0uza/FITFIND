<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<?php
	
	include_once("conexao.php");
	
	if($_POST)
	{   
		$id = $_POST['txtID'];
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
		
		
	
	$sql = $conn->prepare("update cliente set
	       nome_cliente = :nome_cliente,
		   cpf_cliente = :cpf_cliente,
		   genero_cliente = :genero_cliente,
		   nascimento_cliente = :nascimento_cliente,
	       rua_cliente = :rua_cliente,
		   bairro_cliente = :bairro_cliente,
		   cidade_cliente = :cidade_cliente,
		   estado_cliente = :estado_cliente,
		   cep_cliente = :cep_cliente,
		   obs_cliente = :obs_cliente,
	       status_cliente = :status_cliente,
		   email_cliente = :email_cliente,
		   telefone_cliente = :telefone_cliente,
		   senha_cliente = :senha_cliente
	       where codigo_cliente = :codigo_cliente
			");
		
	
	$sql->execute(array(
	':codigo_cliente' =>$id,	
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
	':senha_cliente'=>$senha,
	':telefone_cliente'=>$telefone		

	));
	
		
	if($sql->rowCount() == 1)
	{
		echo "<p>Dados alterados com sucesso!</p>";
		echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";	
	}
		
	}
	else 
	{
		header("Location:fornecedor.php");
	}

	?>
	
	<a href="fornecedor.php" class="btn btn-dark">Voltar</a>
</body>
</html>