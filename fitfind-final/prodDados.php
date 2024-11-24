<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<meta>
	<link rel="stylesheet" href="Estilo.css">
<link rel="stylesheet" href="css/bootstrap.css">	
</head>

<body>
	<div class="container">
	<div class="row">
	<?php 
	include_once("conexao.php");
	
	try
	{
		$sql = $conn->query("select * from produto");
		foreach($sql as $dados)
		{   echo'<div class="col-sm-4 est">';
			echo"<pre>";
			print_r($dados);
			echo"</pre>";
		 
		 echo '<img src="imagem/'.$dados['codigo_produto']."/".$dados['img_produto'].'">';
			echo"</div>";
		}
		
	}
	catch(PDOException $e)
	{
	 echo $e->getMessage();
	}
	?>
		<a href="produto.php" class="btn btn-white">voltar</a>
	</div></div>
</body>
</html>