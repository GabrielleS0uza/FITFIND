<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="script.css">
	<title>Produto</title>
	<link href="css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilo-ana.css">	
	<link href="css/dataTables.bootstrap5.min.css">
	<link href="css/bootstrap.css">
	<style>
		.radio-custom:checked ~ label {
		 background-color:#DBDBDB;
			
		}
	
		
	}
	</style>
</head>

<body>
	
	<?php  include_once("conexao.php"); ?>
	
	<?php include_once("paginaPrincipal_topo_gabi.php")?>
	
	<?php 
	session_start();
		$clienteLogadoID = $_SESSION['clienteSistemaID'];
		$clienteLogadoLogin = $_SESSION['clienteSistemaLogin'];
		$clienteLogadoNome = $_SESSION['clienteSistemaNome']; 
	?>
	
	<?php
	
		$sql = $conn->query("select * from produto where codigo_produto=".$_GET['prod']);
		
		foreach($sql as $linha)
		
		{	

			echo '
			<div class="container margins">
				<div class="row">
					<div class="col-12">
						<form action="" method="post" id="FRM_item">
							<div class="row">	
								
								<input hidden type="text" name="txtIdCliente" id="txtIdCliente" class="form-control" value="'.$clienteLogadoID.'">
								<input hidden type="text" name="txtIdLoja" id="txtIdLoja" class="form-control" value="'.$linha['codigo_loja'].'">
								<input hidden type="text" name="txtIdProduto" id="txtIdProduto" class="form-control" value="'.$linha['codigo_produto'].'">
								<input hidden type="text" name="txtValor" id="txtValor" class="form-control" value="'.$linha['valor_produto'].'">
								<input hidden type="text" id="calculo">
								
								<div class="col-sm-6 ">
									<div class="caminho-produto">'. $linha['categoria_produto'].'/'.$linha['tipo_produto'].'</div>
									<div class="img-produto center margin-tp">
										<img src="img/'. $linha['codigo_produto'].'/'.$linha['img_produto'].'" alt="" class="img-produto01">
									</div>
								</div>
								<div class="col-sm-6 fonte">
									<div class=" mx-5 margin-tp-produto">
										<div class="titulo011 ">
											<p>'.$linha['nome_produto'].'</p>
										</div>
										<hr class="horizontal dark mt-0 mb-2">
										<div class="Sub ">
											<p>Vendido e entregue por lojas parceiras da Fit Find</p>
										</div>
										<div mt-5 >
											<b class="precoProduto  margin-bt mt-5">R$ '.$linha['valor_produto'].'</b>
										</div>
										<div class="tamanho-produto">
											<div>
												<form>
													<div class="row margin-bt mt-3" >
														<div class="col-6">
															<p>Escolha seu tamanho:</p>
															<div class="input-group">
																<div class="text-group-field pickup-day " style="margin-left: 1px;">
																	<div class="" >
																		<input id="pickup-1" class="radio-custom input-group-field" name="txtTamanho" type="radio" style="display:none" value="P">
																		<label for="pickup-1" class="tamanho02 status-padding">P</label>
																	</div>			
																</div>

																<div class="text-group-field pickup-day ">
																	<div class=""  style="margin-left: 10px;">
																		<input id="pickup-2" class="radio-custom input-group-field" name="txtTamanho" type="radio" style="display:none" value="M">
																		<label for="pickup-2" class="tamanho02 status-padding" >M</label>
																	</div>			
																</div>

																<div class="text-group-field pickup-day ">
																	<div class=" "  style="margin-left: 10px;">
																		<input id="pickup-3" class="radio-custom input-group-field" name="txtTamanho" type="radio" style="display:none" value="G">
																		<label for="pickup-3" class="tamanho02 status-padding">G</label>
																	</div>			
																</div>

																<div class="text-group-field pickup-day ">
																	<div class=""  style="margin-left: 10px;">
																		<input id="pickup-4" class="radio-custom input-group-field" name="txtTamanho" type="radio" style="display:none" value="GG">
																		<label for="pickup-4" class="tamanho02 status-padding">GG</label>
																	</div>			
																</div>
															</div>
														</div>
														<div class="col-6 position">
															<p>Quantidade:</p>
															<button type="submit" class="btoQuant btn-dark position-quant-menos" id="btnMenos">-</button>
															<input type="number" name="txtQuant" id="txtQuant" onchange="test()" class="quant-center">
															<button type="submit" class="btoQuant btn-dark position-quant-mais" id="btnMais">+</button>
														</div>
													</div>
												</form>
											</div>
										</div>

										<a class="btn mb-1 button02 margin-bt mt-5" href="sacola_compras.php">VER O CARRINHO DE COMPRAS</a>
										
									
										<button class="btn mb-3 button01 margin-bt mt-3" id="btnCadastro">ADICIONE NA SACOLA</button>

										<div class="descricao-produto margin-bt mt-4">
											Descrição
											<hr class="horizontal dark mb-3  mt-3">
											<p>'.$linha['desc_produto'].'</p>
										</div>
									</div>
								</form>	
							</div>
						</div>
					</div>
				</div>
			</div>
			';
		}
	
	
	?>

	
	<script src="js/bootstrap.bundle.js"></script>
	
	<?php 
		include_once("rodape.php");
	?>
	
	<script>
		
	document.getElementById('txtQuant').value = 1;
		
	var quantidade = parseInt(document.getElementById('txtQuant').value);
	var valor = parseFloat(document.getElementById('txtValor').value);
	var calculo = document.getElementById('calculo');
	var total;

	total = valor;

	calculo.value = total;

	console.log(total);
		
	$("#btnMais").click(function(){
		console.log("Cliquei no btn Mais");
		
		
		document.getElementById('txtQuant').value ++;
		
		
		var quantidade = parseInt(document.getElementById('txtQuant').value);
		var valor = parseFloat(document.getElementById('txtValor').value);
		var calculo = document.getElementById('calculo');
		var total;

		total = valor * quantidade;

		calculo.value = total;

		console.log(total);
			
	})
		
	$("#btnMenos").click(function(){
	console.log("Cliquei no btn Menos");


	document.getElementById('txtQuant').value --;


	var quantidade = parseInt(document.getElementById('txtQuant').value);
	var valor = parseFloat(document.getElementById('txtValor').value);
	var calculo = document.getElementById('calculo');
	var total;

	total = valor * quantidade;

	calculo.value = total;

	console.log(total);
			
	})
		
		
	</script>
	

	<script>var myCollapse = document.getElementById('myCollapse')
		var bsCollapse = new bootstrap.Collapse(myCollapse, {
		  toggle: false
		})
	</script>
	<script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
	<script src="item_script.js"></script>
	
	
</body>
</html>