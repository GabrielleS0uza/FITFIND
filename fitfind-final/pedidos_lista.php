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
			<div class="col-sm-4 scroll-pedidos">
	<?php 

		try{

			$sql = $conn->query("select * from item inner join cliente on item.codigo_cliente = cliente.codigo_cliente where NOT (status_item='Andamento') and codigo_loja = ".$lojaLogadoID);
			
			if($sql->rowCount() > 0)
			{					
				foreach($sql as $linha)
				{
					if($linha['status_item'] == 'Aberto'){
						echo('
						<div class="row">
							<div class="col-12 mt-2">
								<a href="principal_parceiro.php?tela=Pedidos&idPedidos='.$linha['codigo_item'].'">
									<div class="row bloco-pedidos">
										<div class="col-8">
											<div class="loja-pedidos">'.$linha['nome_cliente'].'</div> 
											<div class="status-contrato">Código do pedido: #'.$linha['codigo_item'].'</div>
										</div>
										<div class="col-4">
											<div class="status-pedidos-pendente status-pedidos-fonte">
												Pendente
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						');
					}
					if($linha['status_item'] == 'Confirmado'){
						echo('
						<div class="row">
							<div class="col-12 mt-2">
								<a href="principal_parceiro.php?tela=Pedidos&idPedidos='.$linha['codigo_item'].'">
									<div class="row bloco-pedidos">
										<div class="col-8">
											<div class="loja-pedidos">'.$linha['nome_cliente'].'</div> 
											<div class="status-contrato">Código do pedido: #'.$linha['codigo_item'].'</div>
										</div>
										<div class="col-4">
											<div class="status-pedidos-confirmado status-pedidos-fonte">
												Confirmado
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						');
					}
					if($linha['status_item'] == 'Finalizado'){
						echo('
						<div class="row">
							<div class="col-12 mt-2">
								<a href="principal_parceiro.php?tela=Pedidos&idPedidos='.$linha['codigo_item'].'">
									<div class="row bloco-pedidos">
										<div class="col-8">
											<div class="loja-pedidos">'.$linha['nome_cliente'].'</div> 
											<div class="status-contrato">Código do pedido: #'.$linha['codigo_item'].'</div>
										</div>
										<div class="col-4">
											<div class="status-pedidos-finalizado status-pedidos-fonte">
												Finalizado
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						');
					}
				}
			}
		}


		catch(PDOException $e)
		{
			echo("Erro".$e->getMessage());
		}
	
	?>
			</div>
			<div class="col-sm-8" style="margin-bottom: ">
				<?php include_once("pedidos_detalhes.php"); ?>
			</div>
		</div>
	</div>
	
	
	

<script src="js/bootstrap.bundle.js"></script>	

</body>
</html>