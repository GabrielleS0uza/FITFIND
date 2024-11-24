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
			$plano = $_POST["txtPlano"];
			$valor = $_POST["txtValor"];
			$status = $_POST["txtStatus"];
			$dataC = $_POST["txtDataC"];
			$dataV = $_POST["txtDataV"];
			$pag = $_POST["txtPag"];
			$obs = $_POST["txtObs"];
			
		
	$sql = $conn->prepare("insert into contrato (codigo_loja,plano_contrato,datamensalidade_contrato,valor_contrato,datacontratacao_contrato,datavencimento_contrato,status_contrato,obs_contrato)
	values
	(:codigo_loja,:plano_contrato,:datamensalidade_contrato,:valor_contrato,:datacontratacao_contrato,:datavencimento_contrato,:status_contrato,:obs_contrato)");
		
		$sql->execute(array(
			':codigo_loja'=>$idLoja,
			':plano_contrato'=>$plano,
			':datamensalidade_contrato'=>$pag,
			':valor_contrato'=>$valor,
			':datacontratacao_contrato'=>$dataC,
			':datavencimento_contrato'=>$dataV,
			':status_contrato'=>$status,
			':obs_contrato'=>$obs
		));
	
		if($sql->rowCount()==1)
		{
			echo("<p>Dados cadastrados com sucesso</p>");
			echo("<p>ID Gerado - ".$conn->lastInsertId()."</p>");
		}
	}
	else
	{
		header("localhost:frm_ocntrato.php");		
	}
	
	?>
	
	<a class="btn btn-dark" href="frm_contrato.php">Voltar</a>
	
</body>
</html>