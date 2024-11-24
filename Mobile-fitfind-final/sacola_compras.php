<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Documento sem título</title>
	<link rel="stylesheet" href="script.css">
	<link rel="stylesheet" href="estiloo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
	
	<?php include_once("conexao.php");?>
	
	<?php 
	session_start();
		$clienteLogadoID = $_SESSION['clienteSistemaID'];
		$clienteLogadoLogin = $_SESSION['clienteSistemaLogin'];
		$clienteLogadoNome = $_SESSION['clienteSistemaNome']; 
	?>
	
	<?php include_once("paginaPrincipal_topo_gabi.php");?>
	
	<div class="container">
		<div class="row sacola mb-3">Sacola de compras	
		</div>
		<div class="row mb-3 border-top-sacola">
	<?php 
		$sql = $conn->query("select * from item inner join produto on item.codigo_produto = produto.codigo_produto inner join loja on item.codigo_loja = loja.codigo_loja where (status_item='Andamento') and codigo_cliente = ".$clienteLogadoID);
		
		if($sql->rowCount()>0)
		{	

			foreach($sql as $linha)

			{	
				echo ('
					<form action="" method="post">
						<div class="mt-4">
							<div class="row border-sacola pb-4">
								<input hidden type="text" name="txtId" id="txtId" class="form-control" value="'.$linha['codigo_item'].'">
								<div class="col-4 p-0">
									<img src="img/'. $linha['codigo_produto'].'/'.$linha['img_produto'].'" alt="Imagem do produto" class="img-sacola">
								</div>
								<div class="col-8 padding-sacola">
									<div class="row">
										<div class="col-9">
											<p class="informacao-sacola">'.$linha['nome_produto'].' - '.$linha['tamanho_item'].'</p>
										</div>
										<div class="col-3">
											<a id="btnExcluir" href="item_excluir.php">
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
												<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
												<path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<span class="vend-entr">Vendido por: '.$linha['nome_loja'].'</span>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<span class="vend-entr">Entregue por: Fit Find</span>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-6">
											<p class="informacao-sacola"><b>R$ '.$linha['valortotal_item'].'</b></p></div>
										<div class="col-6">
											<button type="submit" class="btoFinalizar btn-dark" formaction="suporte.php?iditem='.$linha['codigo_item'].'">Finalizar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				');
			}
		}
	?>
	</div>
</div>
<div class="container">
	<div class="row mt-4">
		<?php include_once("carrinho-detalhes.php");?>
	</div>
</div>

	<?php include_once("Menu.php");?>
	
	<script src="js/bootstrap.bundle.js"></script>
	<script src="item_script.js"></script>
	
</body>
</html>