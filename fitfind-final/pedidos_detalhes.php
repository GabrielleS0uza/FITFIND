<?php
	try
    {
		if(isset($_GET['idPedidos'])){
			
			$sql = $conn->query("select * from item inner join cliente on item.codigo_cliente = cliente.codigo_cliente inner join produto on item.codigo_produto = produto.codigo_produto where codigo_item =".$_GET['idPedidos']);
				
			if($sql->rowCount() == 1 )
			{
				foreach($sql as $linha)
				{
					if($linha['status_item'] == 'Aberto'){
					echo('
						<div class="container">
							<div class="row">
								<div class="col-12 mt-2">
									<div class="bloco-pedidos-cliente pb-3 mb-2">
										<div class="row red-pedidos">
											<b>Confirme o pedido para ver os dados do cliente</b>
										</div>
										<div class="row">
											<span>As informações do cliente está oculta até que o pedido seja confirmado.</span>
										</div>
									</div>
									<div class="bloco-pedidos-cliente mb-2">
										<div class="row">
											<div class="col-10 grey-pedidos">
												<span>
													Cliente
												</span>
											</div>
											<div class="col-2">
												<div class="status-pedidos-pendente01 status-pedidos-fonte">
													Pendente
												</div>
											</div>
										</div>
										<div class="row">
											<span>'.$linha['nome_cliente'].'</span>
										</div>
										<div class="row">
											<p> <span class="grey-pedidos">Codigo: #</span>'.$linha['codigo_item'].'</p>
										</div>
									</div>
									<div class="bloco-pedidos-cliente pb-3 mb-2">
										<div class="row">
											<span class="grey-pedidos mb-1">Endereço de entrega</span>
										</div>
										<div class="row">
											<span>Cep: <span class="red-pedidos">Ocultado</span></span>
										</div>
										<div class="row">
											<span><span class="red-pedidos"> Ocultado - Ocultado,</span> '.$linha['cidade_cliente'].' - '.$linha['estado_cliente'].'</span>
										</div>
									</div>
									<div class="bloco-pedidos-cliente pb-3 mb-2 ">
										<div class="row">
											<span class="grey-pedidos mb-2">Itens do pedido</span>
										</div>
										<div class="row">
											<div class="col-3 border-pedidos">
												<span>Quantidade</span>	
												<div class="row">
													<span>'.$linha['qtd_item'].'</span>
												</div>
											</div>
											<div class="col-5 border-pedidos">
												<span>Item</span>
												<div class="row">
													<span>'.$linha['nome_produto'].'</span>
												</div>
											</div>
											<div class="col-2">
												<span>Total</span>
												<div class="row">
													<span>R$ <span>'.$linha['valortotal_item'].'</span></span>
												</div>
											</div>
											<div class="col-2 p-0">
												<a href="pedido_alterar_confirmado.php?idPedidos='.$_GET['idPedidos'].'">
													<button class="btn btn-pedidos">Confirmar</button>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					');
					}
					if($linha['status_item'] == 'Confirmado'){
					echo('
						<div class="container">	
							<div class="row">
								<div class="col-12 mt-2">
									<div class="bloco-pedidos-cliente mb-2">
										<div class="row">
											<div class="col-9 grey-pedidos">
												<span>
													Cliente
												</span>
											</div>
											<div class="col-3">
												<div class="status-pedidos-confirmado01 status-pedidos-fonte">
													Confirmado
												</div>
											</div>
										</div>
										<div class="row">
											<span>'.$linha['nome_cliente'].'</span>
										</div>
										<div class="row">
											<p> <span class="grey-pedidos">Codigo: #</span>'.$linha['codigo_item'].'</p>
										</div>
									</div>
									<div class="bloco-pedidos-cliente pb-3 mb-2">
										<div class="row">
											<span class="grey-pedidos mb-1">Endereço de entrega</span>
										</div>
										<div class="row">
											<span>'.$linha['cep_cliente'].'</span>
										</div>
										<div class="row">
											<span>'.$linha['rua_cliente'].' - '.$linha['bairro_cliente'].', '.$linha['cidade_cliente'].' - '.$linha['estado_cliente'].'</span>
										</div>
									</div>
									<div class="bloco-pedidos-cliente pb-3 mb-2">
										<div class="row">
											<span class="grey-pedidos mb-2">Itens do pedido</span>
										</div>
										<div class="row">
											<div class="col-2 border-pedidos">
												Quantidade
												<div class="row">
													<span>'.$linha['qtd_item'].'</span>
												</div>
											</div>
											<div class="col-6 border-pedidos">
												Itens
												<div class="row">
													<span>'.$linha['nome_produto'].'</span>
												</div>
											</div>
											<div class="col-2 border-pedidos">
												Tamanho
												<div class="col-2">
													<span>'.$linha['tamanho_produto'].'</span>
												</div>
											</div>
											<div class="col-2">
												Valor
												<div class="row">
													<span>'.$linha['valortotal_item'].'</span>
												</div>
											</div>
										</div>
									</div>
									<div class="bloco-pedidos-cliente pb-3 mb-2">
										<div class="row">
											<span class="grey-pedidos mb-2">Pagamento</span>
										</div>
										<div class="row">
											<div class="col-3 green-pedidos">
												Total
												<div class="row">
													<span>R$ '.$linha['valortotal_item'].'</span>
												</div>
											</div>
											<div class="col-2"></div>
											<div class="col-7">
												<a href="pedido_alterar_finalizado.php?idPedidos='.$_GET['idPedidos'].'" class="green-pedidos">
													<b>Ao CLICAR AQUI o pedido será finalizado (Os itens foram enviados ao correio)</b>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					');
					}
					if($linha['status_item'] == 'Finalizado'){
					echo('
						<div class="container">
							<div class="row">
								<div class="col-12 mt-2">
									<div class="bloco-pedidos-cliente pb-3 mb-2">
										<div class="row green-pedidos">
											<b>O pedido foi finalizado</b> 
										</div>
										<div class="row">
											<span>Aqui você verá as informações dos pedidos de seus clientes</span>
										</div>
									</div>
									<div class="bloco-pedidos-cliente mb-2">
										<div class="row">
											<div class="col-10 grey-pedidos">
												<span>
													Cliente
												</span>
											</div>
											<div class="col-2">
												<div class="status-pedidos-finalizado01 status-pedidos-fonte">
													Finalizado
												</div>
											</div>
										</div>
										<div class="row">
											<span>'.$linha['nome_cliente'].'</span>
										</div>
										<div class="row">
											<p> <span class="grey-pedidos">Codigo: #</span>'.$linha['codigo_item'].'</p>
										</div>

									</div>
									<div class="bloco-pedidos-cliente pb-3 mb-2">
										<div class="row">
											<span class="grey-pedidos mb-1">Endereço de entrega</span>
										</div>
										<div class="row">
											<span>'.$linha['cep_cliente'].'</span>
										</div>
										<div class="row">
											<span>'.$linha['rua_cliente'].' - '.$linha['bairro_cliente'].', '.$linha['cidade_cliente'].' - '.$linha['estado_cliente'].'</span>
										</div>
									</div>
									<div class="bloco-pedidos-cliente pb-3 mb-2">
										<div class="row">
											<span class="grey-pedidos mb-2">Itens do pedido</span>
										</div>
										<div class="row">
											<div class="col-2 border-pedidos">
												Quantidade
												<div class="row">
													<span>'.$linha['qtd_item'].'</span>
												</div>
											</div>
											<div class="col-6 border-pedidos">
												Itens
												<div class="row">
													<span>'.$linha['nome_produto'].'</span>
												</div>
											</div>
											<div class="col-2 border-pedidos">
												Tamanho
												<div class="col-2">
													<span>'.$linha['tamanho_produto'].'</span>
												</div>
											</div>
											<div class="col-2 green-pedidos">
												Total
												<div class="row">
													<span>'.$linha['valortotal_item'].'</span>
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
			}
		}
	}
	catch(PDOException $e)
    {
        echo "Erro: ".$e->getMessage();
    }
?>


