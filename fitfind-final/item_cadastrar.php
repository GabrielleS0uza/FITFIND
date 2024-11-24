<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	
	<?php
	
	//print_r($_POST);
	//exit;
	
		include_once("conexao.php");
	
		if($_POST)
		{
			$idCliente = $_POST["txtIdCliente"];
			$idLoja = $_POST["txtIdLoja"];
			$idProduto = $_POST["txtIdProduto"];
			$tamanho = $_POST["txtTamanho"];
			$quantidade = $_POST["txtQuant"];
			$valor = $_POST["txtValor"];
			$valortotal = $_POST["calculo"];
			$status = "Andamento";
			
			
		
			$sql = $conn->prepare("insert into item
			(
				codigo_cliente, codigo_loja, codigo_produto,tamanho_item, qtd_item, valor_item, valortotal_item, status_item
			)
			value
			(
				:codigo_cliente, :codigo_loja, :codigo_produto,:tamanho_item, :qtd_item, :valor_item, :valortotal_item, :status_item
			)");

				$sql->execute(array(
					':codigo_cliente'=>$idCliente,
					':codigo_loja'=>$idLoja,
					':codigo_produto'=>$idProduto,
					':qtd_item'=>$quantidade,
					':tamanho_item'=>$tamanho,
					':valor_item'=>$valor,
					':valortotal_item'=>$valortotal,
					':status_item'=>$status
				));

					if($sql->rowCount()==1)
					{
						echo("<p>Dados cadastrados com sucesso</p>");
						echo("<p>ID Gerado - ".$conn->lastInsertId()."</p>");
					}
				}
		else
		{
			header("localhost:frm_reclame.php");		
		}

	?>
</body>
</html>