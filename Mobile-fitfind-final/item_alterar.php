<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alterar - Item</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="script.css">
</head>

<body>
		
		<?php
	
		include_once("conexao.php");
	
		if($_GET)
		{
			$id_item = $_GET['iditem'];
			$status_item = "Aberto";
		
			try
			{	
				$sql = $conn->prepare("update item set
					status_item = :status_item 
					where codigo_item = :codigo_item");

				$sql->execute(array(
					'codigo_item'=>$id_item,
					'status_item'=>$status_item

				));

			if($sql->rowCount()==1)
				{
					echo("<p>Dados alterados com sucesso</p>");
				}
			}
			
			catch(PDOException $e)
			{
				echo("Erro".$e->getMessage());
			}
		}
		else
		{
			header("localhost:frm_reclame.php");		
		}

	?>
	
</body>
</html>