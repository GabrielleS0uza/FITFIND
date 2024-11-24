
	
	<div class="container">
	<div class="row">
	<?php 
	
	include_once("conexao.php");
	
	$codigo_produto	= '';
	$codigo_loja = '';
	$nome_produto = '';
	$desc_produto = '';
	$valor_produto = '';
	$categoria_produto = '';
	$tamanho_produto = '';
	$status_produto = '';
	$tipo_produto = '';
	$obs_produto = '';
	$img_produto = '';
		
	try
	{
		if($_GET && isset($_GET['ordem']))
		{
			if($_GET['ordem'] == "nome")
			{
				$sql = $conn->query("select * from produto order by nome_produto");
			}
			else if($_GET['ordem'] == "data")
			{
				$sql = $conn->query("select * from produto order by cadastro_produto DESC");
			}
			else if($_GET['ordem'] == "preco")
			{
				$sql = $conn->query("select * from produto order by valor_produto");
			}
		}
		else if($_GET && isset($_GET['filtro']))
		{
			if($_GET['filtro'] == '1')
			{
				$sql = $conn->query("select * from produto WHERE categoria_produto = 1");
			}
			else if($_GET['filtro'] == '2')
			{
				$sql = $conn->query("select * from produto WHERE categoria_produto = 2");
			}
			else if($_GET['filtro'] == '3')
			{
				$sql = $conn->query("select * from produto WHERE categoria_produto = 3");
			}
			else if($_GET['filtro'] == '4')
			{
				$sql = $conn->query("select * from produto WHERE categoria_produto = 4");
			}
			else if($_GET['filtro'] == '5')
			{
				$sql = $conn->query("select * from produto WHERE categoria_produto = 5");
			}
		}
		else
		{
			$sql = $conn->query("select produto.*, loja.nome_loja from produto
																  inner join loja on produto.codigo_loja = loja.codigo_loja
				");
		}
		
		foreach($sql as $linha)
			{	
				echo 
				'<div class="col-md-6 col-lg-4 col-xl-3 p-4"> 
					<div class="produto card">
						<img src="img/'. $linha['codigo_produto'].'/'.$linha['img_produto'].'" alt="" class="imagem">

						<br>
						<h5 style="padding: 1px; font-size: 15px">'.$linha['nome_produto'].'</h5>

						<p>'.$linha['nome_loja'].'</p>
						
						<p class="preco"> R$ '.$linha['valor_produto'].'</p>
						<a href="produto.php?prod='. $linha['codigo_produto'].'" style="text-decoration: none">
							<div class="botao"> COMPRAR </div>
						</a>
						
						
						
					</div>
				</div>';
			}
		
		
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	
	/*<p>'.$linha['codigo_produto'].'</p>*/
	
	
	?>
	<!--</div>	
	</div>
	
	'<div class="col-sm-3 produto rounded"> 
		
		<h3>
		$nome_produto
		</h3>
		
		<br>
		<hr>
		
		<img src="img/
		$linha['codigo_produto']
		/
		$linha['img_produto']" alt="">
		
		<p class="preco">
		$linha['valor_produto']
		</p>
	
		<p>
		$linha['status_produto']
		</p>
	</div>'-->
	
