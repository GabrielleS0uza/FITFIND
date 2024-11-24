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

	<?php 
			
		$sql = $conn->query("select * from item inner join cliente on item.codigo_cliente = cliente.codigo_cliente inner join produto on item.codigo_produto = produto.codigo_produto inner join loja on item.codigo_loja = loja.codigo_loja where codigo_item=".$_GET['iditem']);

		if($sql->rowCount()>0)
		{	

			foreach($sql as $linha)

			{
				echo('		
					<div class="container finalizar-pedido">
						<div class="row">
							<div class="col-12">
								<input hidden type="text" name="txtId" id="txtId" class="form-control" value="'.$linha['codigo_item'].'">
								<p class="sacola">Detalhe do item</p>
								<hr>
								<div class="row">
									<div class="produto_finalizar">
										<div class="row">
											<div class="col-4 p-0">
												<img src="img/'. $linha['codigo_produto'].'/'.$linha['img_produto'].'" alt="Imagem do produto" class="img-sacola">
											</div>
											<div class="col-8">
												<div class="row">
													<div class="col-9">
														<p class="informacao-finalizar">'.$linha['nome_produto'].' - '.$linha['tamanho_item'].'</p>
													</div>
													<div class="col-3 btn-voltar-finalizar">
														<a href="sacola_compras.php">
															<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle icon-finalizar" viewBox="0 0 16 16">
																<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
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
													<div class="col-8">
														<span class="vend-entr">Entregue: Fit Find</span>
													</div>
												</div>
												<div class="row">
													<div class="col-8">
														<span class="vend-entr">Valor Unitário: <span id="valor">'.$linha['valor_produto'].'</span></span> 
													</div>
													<div class="col-4">
														<b>Subtotal</b>
													</div>
												</div>
												<div class="row">
													<div class="col-8">
														<p class="vend-entr">Qtd do produto: <span id="valor">'.$linha['qtd_item'].'</span></p> 
													</div>
													<div class="col-4">
														<p><b>R$'.$linha['valortotal_item'].'</b></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row mb-4">
									<div class="resumo-pedido">
										<div class="cupom">
											<form action="" method="post">
												<p class="cupom-desconto">
													<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-ticket-perforated icon-entrega" viewBox="0 0 16 16">
														<path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z"/>
														<path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z"/>
													</svg>
													<span class="mx-1"><b>Cupom de Desconto</b></span>
												</p>
												<div class="row">
													<div class="col-8">
														<input type="number" class="form-control" name="txtCupom" id="txtCupom">
													</div>
													<div class="col-3">
														<a href="">
															<button type="submit" class="btn btn-dark" formaction="item_alterar_cupom.php?iditem='.$_GET['iditem'].'">Adicionar</button>
														</a>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="row">
										<p><b>Resumo da compra</b></p>
									</div>
									<div class="row">
										<div class="col-2">
											<p>Subtotal</p>
										</div>
										<div class="col-7"><hr></div>
										<div class="col-3 valores">
											R$ <span id="subtotal">'.$linha['valortotal_item'].'</span>
										</div>
									</div>

									<div class="row">
										<div class="col-2">
											<p>Cupom</p>
										</div>
										<div class="col-7"><hr></div>
										<div class="col-3 valores">
											R$ <span id="cupom">'.$linha['cupom_item'].'</span>
										</div>
									</div>

									<div class="row">
										<div class="col-3">
											<p>Economizou</p>
										</div>
										<div class="col-6"><hr></div>
										<div class="col-3 valores">
											<span id="economizou"></span>%
										</div>
									</div>

									<div class="row">
										<div class="col-2">
											<p>Total</p>
										</div>
										<div class="col-7"><hr></div>
										<div class="col-3 valores">
											R$ <span id="total"></span>
										</div>
									</div>
								</div>
								<div class="row mt-3 mb-4">
									<div class="col-4">
										<a href="item_alterar.php?iditem='.$_GET['iditem'].'">
											<button class="btoSacolaFinalizar btn-dark">Finalizar</button>
										</a>
									</div>
									<div class="col-1"></div>
									<div class="col-7">
										<a href="principal.php">
											<button formaction="principal.php" class="btn-continuar">Continuar comprando</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					');
			}
		}
	?>	

	<?php include_once("Menu.php");?>

	
	<?php include_once("rodape.php");?>
	
	<script>
	console.log("Entrei no JS");

	var subtotal = parseFloat(document.getElementById('subtotal').innerHTML);
	var cupom = parseFloat(document.getElementById('cupom').innerHTML);		
	var economizou = document.getElementById('economizou');
	var calculo01;

	calculo01 = (cupom / subtotal) * 100;

	economizou.innerHTML = calculo01.toFixed(2);
		
	console.log(calculo01.toFixed(2));
	
	var total = document.getElementById('total');
	var calculo02;	
		
	calculo02 = subtotal - cupom;

	total.innerHTML = (calculo02.toFixed(2));
		
	console.log(calculo02.toFixed(2));
	
		
	</script>
	
	<script src="js/bootstrap.bundle.js"></script>
	<script src="item_script.js"></script>

</body>
</html>