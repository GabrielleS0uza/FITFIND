<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
	<?php 
	include_once("conexao.php");
	
	if($_POST)
	{   
		$id = $_POST['txtID'];
		
		
	
	$sql = $conn->prepare("delete from produto	
			
			where codigo_produto = :codigo_produto
			");
	
	$sql->execute(array(
	':codigo_produto' =>$id
	
	));
	
		
	if($sql->rowCount() == 1)
	{
		echo "<p>Dados excluidos com sucesso!</p>";
		echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";	
	}
		
	}
	else 
	{
		header("Location:produto.php");
	}

	?>
	
	<a href="produto.php" class="btn btn-dark">Voltar</a>
</body>
</html>