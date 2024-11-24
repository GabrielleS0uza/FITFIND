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
	<link rel="stylesheet" href="estilo-ana.css" type="text/css" >	
	<link href="css/dataTables.bootstrap5.min.css">
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
	
		$sql = $conn->query("select * from produto where codigo_produto=".$_GET['prod']);
		
		foreach($sql as $linha)
		
		{	

			echo '
			<div class="container margins">
				<div class="row">	
					<div class="col-sm-6 ">
						<div class="caminho-produto">'. $linha['categoria_produto'].'/'.$linha['tipo_produto'].'</div>
						<div class="img-produto center margin-tp">
							<img src="img/'. $linha['codigo_produto'].'/'.$linha['img_produto'].'" width="170" alt="" class="img-produto01">
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
						
								<div >
							

									<form>
									 <div class="row margin-bt mt-3" >
								
					  <p>Escolha seu tamanho:</p>
					<div class="input-group">
						<div class="text-group-field pickup-day " style="margin-left: 1px;">
   							<div class="" >
       						<input id="pickup-1" class="radio-custom input-group-field" name="fav_language" type="radio" style="display:none">
       						<label for="pickup-1" class="tamanho02 status-padding">'.$linha['tamanho_produto'].'</label>
     					</div>			
					</div>
		
						<div class="text-group-field pickup-day ">
   							<div class=""  style="margin-left: 10px;">
       						<input id="pickup-2" class="radio-custom input-group-field" name="fav_language" type="radio" style="display:none">
       						<label for="pickup-2" class="tamanho02 status-padding" >M</label>
     					</div>			
					</div>
					
					<div class="text-group-field pickup-day ">
   							<div class=" "  style="margin-left: 10px;">
       						<input id="pickup-3" class="radio-custom input-group-field" name="fav_language" type="radio" style="display:none">
       						<label for="pickup-3" class="tamanho02 status-padding">G</label>
     					</div>			
					</div>
					
					<div class="text-group-field pickup-day ">
   							<div class=""  style="margin-left: 10px;">
       						<input id="pickup-4" class="radio-custom input-group-field" name="fav_language" type="radio" style="display:none">
       						<label for="pickup-4" class="tamanho02 status-padding">GG</label>
     					</div>			
					</div>
								
									  </div>
									</div>
									</form>
								</div>
							</div>
							
							
							<button class="btn mb-1 button02 margin-bt mt-5">ADICIONE NA SACOLA</button> 
						
							
							<button class="btn mb-3 button01 margin-bt mt-3">COMPRAR</button> 
							<div class="descricao-produto margin-bt mt-4">
								Descrição
								<hr class="horizontal dark mb-3  mt-3">
								<p>'.$linha['desc_produto'].'</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			';
		}
	
	
	?>
	
	

<!--
	<div class="container">
			 
		<div class="row" style="margin-left: 5px"></div> 	 
			 
		<div class="row">
			<div class="col-md-12 p-2">
				<div class=" p-2 text-center" id="margint">
					<h4> CONFIRA A NOSSA NOVA COLEÇÃO</h4> 
				</div>	
			</div>
			 
			<div class="col-md-3  text-center p-3" style="margin-left: 0px">
				<img src="modelos/modelo7.jpg"  width="300">
				<p><b>Cores clássicas</b>-Conjuntos encantadores a partir de $119,90</p>
				<a href="" style="color: black;">
					<u>Comprar</u>
				</a>
			</div>

			<div class="col-md-3 text-center p-3" style="margin-left: 0px">
				<img src="modelos/modelo5.jpg" width="300">
				<p><b>Elegância</b>-Casaco a partir de $299,90</p>
				<a href="" style="color: black;">
					<u>Comprar</u>
				</a>
			</div>

			<div class="col-md-3 text-center p-3" style="margin-left: 0px">
				<img src="modelos/modelo8.jpg"  width="300">
				<p><b>Despojado</b>-Camisa jeans a partir de $129,90</p>
				<a href="" style="color: black;">
					<u>Comprar</u>
				</a>
			</div>

			<div class="col-md-3 text-center p-3" style="margin-left: 0px">
				<img src="modelos/modelo9.jpg"  width="300">
				<p><b>Ousados</b>-Camiseta a partir de $69,90</p>
				<a href="" style="color: black;">
					<p>Comprar</p>
				</a> 
			</div> 
		</div>
	 </div>
-->
	
	<script>var myCollapse = document.getElementById('myCollapse')
var bsCollapse = new bootstrap.Collapse(myCollapse, {
  toggle: false
})</script>
	<script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
	
	
</body>
</html>