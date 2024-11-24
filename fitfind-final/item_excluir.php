<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="script.css">
</head>

<body>
		
		<?php
	
		include_once("conexao.php");
	
		if($_POST)
		{
			$codigo_item = $_POST["txtId"];
		
			try
			{	
				$sql = $conn->prepare("delete from item
				where codigo_item = :codigo_item");

				$sql->execute(array(
					'codigo_item'=>$codigo_item
				));

				if($sql->rowCount()==1)
				{
					echo("<p>Dados excluidos com sucesso</p>");
				}
			}
			
			catch(PDOException $e)
			{
				echo("Erro".$e->getMessage());
			}
		}
	?>
	
</body>
</html>