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
		<div class="row mt-5">
			<div class="col-2"></div>
				<div class="col etapas">
					<div class="cir">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-check icon-etapas on" viewBox="0 0 16 16">
						  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
						  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
						</svg>
					</div>
					<p class="">Identificação</p>
				</div>
				<div class="col-1 linha-etapa mt-4"></div>
				<div class="col etapas">
					<div class="cir">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bag-plus icon-etapas" viewBox="0 0 16 16">
						  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
						  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
						</svg>
					</div>
					<p>Sua Sacola</p>
					
				</div>
				<div class="col-1 linha-etapa mt-4"></div>
				<div class="col etapas">
					<div class="cir">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-coin icon-etapas01" viewBox="0 0 16 16">
						  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
						  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
						</svg>
					</div>
					<p>Pagamento</p>
				</div>
				<div class="col-1 linha-etapa mt-4"></div>
				<div class="col etapas">
					<div class="cir">
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-check2-all icon-etapas01" viewBox="0 0 16 16">
						  <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
						  <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
						</svg>
					</div>
					<p>Confirmação</p>
				</div>
			<div class="col-2"></div>
		</div>
	
		<div class="row mt-5 mb-5"	>
			<div class="col-7 pedidos">
				<div class="sacola">Sacola de compras</div>
				<hr>
		
	<?php 
		$sql = $conn->query("select * from item inner join produto on item.codigo_produto = produto.codigo_produto inner join loja on item.codigo_loja = loja.codigo_loja where codigo_cliente = ".$clienteLogadoID);
		
		if($sql->rowCount()>0)
		{	

			foreach($sql as $linha)

			{	
				echo '
					<form action="" method="post">
						<div class="itens">
							<div class="row">
								<input hidden type="text" name="txtId" id="txtId" class="form-control" value="'.$linha['codigo_item'].'">
								<div class="col-3">
									<img src="img/'. $linha['codigo_produto'].'/'.$linha['img_produto'].'" alt="Imagem do produto" class="img-sacola">
								</div>
								<div class="col-9">
									<div class="row mb-3">
										<div class="col-8">
											<p class="informacao-sacola">'.$linha['nome_produto'].' - P</p>
										</div>
										<div class="col-4">
											<p class="informacao-sacola"><b>R$ '.$linha['valortotal_item'].'</b></p>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<p class="vend-entr">Vendida por: '.$linha['nome_loja'].'</p>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<p class="vend-entr">Entregue por: Fit Find</p>
										</div>
									</div>
									<div class="row">
										<div class="col-8">
											<p class="vend-entr">Valor Unitário R$<span id="valor">'.$linha['valor_produto'].'</span></p> 
										</div>
										<div class="col-4">
											
										</div>
									</div>
									<div class="row mt-2">
										<div class="col-6 top">
											
											<a id="btnExcluir" href="item_excluir.php">
												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-trash3 icon-item" viewBox="0 0 16 16">
												  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
												</svg>
												Excluir da sacola
											</a>
										</div>								
										<div class="col-2"></div>
										
										<div class="col-4">
											<a href="">
												<button type="submit" class="btoFinalizar btn-dark" formaction="suporte.php?iditem='.$linha['codigo_item'].'">Finalizar</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				';
			}
		}
	?>
	
		</div>
			
		<?php include_once("carrinho-detalhes.php");?>
					
			
		<div class="col-5"></div>
	</div>
</div>

	<?php include_once("rodape.php");?>
	
	<script src="js/bootstrap.bundle.js"></script>
	<script src="item_script.js"></script>
	
</body>
</html>