<?php include_once("carrinho-informacoes.php");?>

<?php 
	echo('
		<div class="col-5">
			<div class="sacola">Detalhes do seu carrinho</div>
			<hr>
			<div class="detalhes">
				<p><b>Local da entrega</b></p>
				<hr>
				<p>
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt icon-entrega" viewBox="0 0 16 16">
					  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
					  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
					<span class="mx-1">CEP: </span><span>'.$cep_cliente.'</span>
				</p>
				<p>
					'.$rua_cliente.' - '.$bairro_cliente.' / '.$cidade_cliente.' / '.$estado_cliente.'
				</p>
			</div>

			<div class="detalhes1">
				<p><b>Resumo da compra:</b></p>
				<div class="row">
					<div class="col-2">
						<p><b>TOTAL</b></p>
					</div>
					<div class="col-7"><hr></div>
					<div class="col-3 text-resumo">
						R$ <span id="subtotal">'.$valorTotal.'</span>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-6">
								<p><b>Itens na sacola:</b> '.$quantItens.' itens</p>
							</div>
							<div class="col-6">
								<p><b>	Quantidade de produtos:</b> '.$quantProduto.'</p>
							</div>
						</div>
					</div>
					

					<a href="principal.php">
						<button formaction="principal.php" class="btn btn-continuar-comprando" style="background-color: #EFEFEF; border: solid 2px black;">Continuar comprando</button>
					</a>
				</div>
			</div>
		</div>
		');

?>




