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
									<div class="col-7">
										<div class="produto_finalizar">
											<div class="row">
												<div class="col-3">
													<img src="img/'. $linha['codigo_produto'].'/'.$linha['img_produto'].'" alt="Imagem do produto" class="img-finalizar">
												</div>
												<div class="col-9">
													<div class="row mb-3">
														<div class="col-8">
															<p class="informacao-finalizar">'.$linha['nome_produto'].' - '.$linha['tamanho_item'].'</p>
														</div>
														<div class="col-4 btn-voltar-finalizar">
															<a href="sacola-compras.php">
																<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-circle icon-finalizar" viewBox="0 0 16 16">
																  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
																</svg>
															</a>
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
															<p class="vend-entr">Valor Unitário: <span id="valor">'.$linha['valor_produto'].'</span></p> 
														</div>
														<div class="col-4">

														</div>
													</div>
													<div class="row">
														<div class="col-8">
															<p class="vend-entr">Quantidade de produto: R$<span id="valor">'.$linha['qtd_item'].'</span></p> 
														</div>
														<div class="col-4">
															<p><b>Subtotal: R$ '.$linha['valortotal_item'].'</b></p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="lembretes-finalizar border-finalizar">
											<div class="row">
												<div class="col-12 importante-finalizar">
													<b>INFORMAÇÕES IMPORTANTES</b>
												</div>
											</div>
											<div class="row">
												<div class="col-6 border-troca-finalizar importante-finalizar01 color-finalizar">
													Troca em até 45 dias
												</div>
												<div class="col-6 importante-finalizar01 color-finalizar">
													Parcela em até 6x
												</div>
											</div>
											<div class="row">
												<div class="col-6 border-troca01-finalizar importante-finalizar02">
													O pagamento em fatura poderá ser feito através dos aplicativos, sites e bancos. Assim você pode pagar no conforto da sua casa.
												</div>
												<div class="col-6 importante-finalizar02">
													Se você realizou uma compra pelo nosso aplicativo e queira efetuar uma troca, o prazo será de 45 dias após a data de recebimento do produto.
												</div>
											</div>
										</div>
									</div>
									<div class="col-5">
										<div class="resumo-pedido">
											<div class="cupom">
												<form action="" method="post">
													<p class="cupom-desconto">
														<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-ticket-perforated icon-entrega" viewBox="0 0 16 16">
														  <path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z"/>
														  <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z"/>
														</svg>
														<span class="mx-1"><b>Cupom de Desconto</b></span>
													</p>
													<div class="container">
														<div class="row">
															<div class="col-9">
																<input type="text" class="form-control">
															</div>
															<div class="col-3">
																<button type="button" class="btn btn-dark">Adicionar</button>
															</div>
														</div>
													</div>
												</form>
											</div>
											<hr>
											<div class="container">
												<p><b>Resumo da compra</b></p>

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
													<div class="col">
														<p>Total</p>
													</div>
													<div class="col-6"><hr></div>
													<div class="col-3 valores">
														R$ <span id="total"></span>
													</div>
												</div>
												<div class="row mt-3">
													<div class="col-5">
														<a href="item_alterar.php?iditem='.$_GET['iditem'].'">
															<button type="submit" class="btoSacolaFinalizar btn-dark">Finalizar</button>
														</a>
													</div>
													<div class="col-1"></div>
													<div class="col-6">
														<a href="principal.php">
															<button formaction="principal.php" class="btn btn-continuar-finalizar" style="background-color: #EFEFEF; border: solid 2px black;">Continuar comprando</button>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					');
			}
		}
	?>	
	
<!--	formaction="item_alterar.php?iditem='.$_GET['iditem'].'"-->
	
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