<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastrar - Contrato</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="script.css">
</head>

<body>
	
	<?php
	
		include_once("conexao.php");
	
		if($_POST)
		{
			$idLoja = $_POST["txtIdLoja"];
			$tipo = $_POST["txtTipo"];
			$tela = $_POST["txtTela"];
			$mensagem = $_POST["txtMeng"];

			
		
			$sql = $con->prepare("insert into reclamacaoloja
			(
				codigo_loja, tipo_reclame, tela_reclame, mensagem_reclame
			)
			values
			(
				:codigo_loja, :tipo_reclame, :tela_reclame, :mensagem_reclame
			)");

				$sql->execute(array(
					':codigo_loja'=>$idLoja,
					':tipo_reclame'=>$tipo, 
					':tela_reclame'=>$tela, 
					':mensagem_reclame'=>$mensagem
				));

				if($sql->rowCount()==1)
				{
					echo("<p>Dados cadastrados com sucesso</p>");
					echo("<p>ID Gerado - ".$con->lastInsertId()."</p>");
				}
		}
		else
		{
			header("localhost:frm_reclame.php");		
		}

	?>
	
	<a class="btn btn-dark" href="frm_reclameLoja.php">Voltar</a>
	
</body>
</html>