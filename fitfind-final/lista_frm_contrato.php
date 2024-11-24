<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="script.css">
</head>

<body>
	
	<?php include_once("conexao.php");?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
	<?php 

		try{

			$sql = $conn->query("select * from contrato where codigo_loja = ".$lojaLogadoID);

			if($sql->rowCount()>0)
			{				
				
				foreach($sql as $linha)
				{
					echo('
					<div class="row">
						<div class="col-12 mt-2">
							<a href="principal_parceiro.php?tela=Contrato&idContrato='.$linha['codigo_contrato'].'">
								<div class="row bloco-contrato">
									<div class=" col-2 circulo-contrato">
										<div class="id-contrato">'.$linha['codigo_contrato'].'</div>
									</div>
									<div class="col-7">
										<div class="loja-contrato">'.$lojaLogadoNome.'</div> 
										<div class="status-contrato">Status: '.$linha['status_contrato'].'</div>
									</div>
									<div class="col-2 seta">
										<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-right icon-contrato" viewBox="0 0 16 16">
										  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
										</svg>
									</div>
								</div>
							</a>
						</div>
					</div>
					');
				}
			}
		}


		catch(PDOException $e)
		{
			echo("Erro".$e->getMessage());
		}
	
	?>
			</div>
			<div class="col-sm-9">
				<?php include_once("frm_contrato_geren.php"); ?>
			</div>
		</div>
	</div>

<script src="js/bootstrap.bundle.js"></script>	

</body>
</html>

<!--

<div class="container">
		<div class="row">
			<div class="col-3 mt-2">
				<a href="contrato_informacoes.php"></a>
				<div class="row bloco-contrato">
					<div class=" col-2 circulo-contrato">
						<div class="id-contrato">2</div>
					</div>
					<div class="col-7">
						<div class="loja-contrato">Teste</div> 
						<div class="status-contrato">Status: Ativo</div>
					</div>
					
					<div class="col-2 seta">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chevron-right icon-contrato" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
						</svg>
					</div>
				</div>
			</div>
			<div class="col-9">
			</div>
		</div>
	</div>
-->




