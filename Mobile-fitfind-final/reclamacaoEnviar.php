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
		$codigoLoja = $_POST['txtIDLoja'];
		$codigoCliente = $_POST['txtIDCliente'];
		$tipo = $_POST['txtTipo'];
		$mensagem = $_POST['txtMensagem'];
	

	$sql = $conn->prepare("insert into reclamacaocliente
	(codigo_loja, codigo_cliente, tipo_reclame, mensagem_reclame
	)
	values   
	(:codigo_loja, :codigo_cliente, :tipo_reclame, :mensagem_reclame)
	");
	
	$sql->execute(array(
	':codigo_loja'=>$codigoLoja,
	':codigo_cliente'=>$codigoCliente,	
	':tipo_reclame'=>$tipo,
	':mensagem_reclame'=>$mensagem
	));
	
		
	if($sql->rowCount() == 1)
	{
		echo "<p>Dados cadastrados com sucesso!</p>";
		echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";	
	}
		
	}
	else 
	{
		header("Location:reclamacaoCliente.php");
	}

	?>
	
	<a href="reclamacaoCliente.php" class="btn btn-dark">Voltar</a>
	
	
	
</body>
</html>