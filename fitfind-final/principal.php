<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>FitFind</title>
	<link rel="stylesheet" href="script.css">	
	<link rel="stylesheet" href="estilo-ana.css" type="text/css" >	
	
</head>

<body>
	
	<?php include_once('conexao.php');?>
	
	<?php include_once("paginaPrincipal_topo_gabi.php"); ?>
	
	<!-- Carousel -->
		<div id="demo" class="carousel slide" data-bs-ride="carousel">

		  <!-- Indicators/dots -->
		  <div class="carousel-indicators">
			<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
		  </div>

		  <!-- The slideshow/carousel -->
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="modelos/img3.png" alt="banner1" class="d-block img1" style="width:100%">
			  <div class="carousel-caption">
			
				
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="modelos/img02.png" alt="banner2" class="d-block img1" style="width:100%">
			  <div class="carousel-caption">
				
			  </div> 
			</div>
			<div class="carousel-item">
			  <img src="modelos/img01.png" alt="banner3" class="d-block img1" style="width:100%">
			  <div class="carousel-caption">
				
			  </div>  
			</div>
		  </div>
			
			 <!-- Left and right controls/icons -->
		  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </button>
			</div>

	
	<div class="form4"></div>
	
<div class="container-fluid">
    <div class="row">
      <div class="col-xxl bg-white text-dark p-4" style="margin-left: 10px"><img src="icones/caminhao.png" width="50"> <b class="titu p-2" style="margin-left:5px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">Frete Fixo Brasil</b></div>
		
      <div class="col-xxl bg-white text-dark p-4" style="margin-left: 10px"><img src="icones/banco.png" width="50"> <b class="titu p-2" style="margin-left:5px"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">Pagamento de fatura</b></div>
		
      <div class="col-xxl bg-white text-dark p-4" style="margin-left: 10px"><img src="icones/recarrega.png" width="50"><b class="titu p-2" style="margin-left:5px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal3">Troca em até 45 dias</b></div>
		
      <div class="col-xxl bg-white text-dark p-4" style="margin-left: 10px"><img src="icones/cartoes-de-credito.png" width="50"><b class="titu p-2" style="margin-left:5px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal4">Parcele em até 6x</b></div>
		
	  <div class="col-xxl bg-white text-dark p-4" style="margin-left: 10px"><img src="icones/loja-de-compras.png" width="50"><b class="titu p-2" style="margin-left:1px">Compre no site e loja</b></div>
    </div>  
  </div>
</div>
	
	<!-- The Modal -->
<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title tit">Frete Fixo</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        A promoção frete fixo para todo Brasil é realizado na primeira compra ou um valor superior a R$20,00.
      </div>
    </div>
  </div>
</div>	
	
	
	<!-- The Modal -->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title tit">Pagamento em fatura</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        O pagamento em fatura poderá ser feito através dos aplicativos, sites e bancos. Assim você pode pagar no conforto da sua casa.
      </div>
    </div>
  </div>
</div>
	
	
		<!-- The Modal -->
<div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title tit">Troca em até 45 dias </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       Se você realizou uma compra pelo nosso aplicativo e queira efetuar uma troca, o prazo será de 45 dias após a data de recebimento do produto.
      </div>
    </div>
  </div>
</div>	
	
	<div class="modal" id="myModal4">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title tit">Parcela em até 6x sem juros</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      Aproveite as condições especiais de parcelamento em até 6 vezes sem juros, válida para compras realizadas com o cartão, com parcela miníma de R$15,90.
      </div>
    </div>
  </div>
</div>	
	
	
	<div class="form2"></div>

	<!--DESTAQUES-->

	<?php
	
		$sql = $conn->query("select * from produto where destaque_produto=1");
		
		
		echo("
		
		<div class='container'>
			<div class='row' style='margin-left: 5px'></div> 	 

			<div class='row'>
				<div class='col-md-12 p-2'>
					<div class='p-2 text-center' id='margint'>
						<h4> CONFIRA A NOSSA NOVA COLEÇÃO</h4> 
					</div>	
				</div>
		
		");
				
	
	
		foreach($sql as $linha)
		{	

				echo("<div class='col-md-3  text-center p-3' style='margin-left: 0px'>");
					echo("<img src='img/".$linha['codigo_produto']."/".$linha['img_produto']."' width='300' alt='teste'>");
					echo("<p><b>Cores clássicas</b>- ".$linha['nome_produto']." a partir de $".$linha['valor_produto']."</p>");
					echo("<a href='produto.php?prod=". $linha['codigo_produto']."' style='color: black;''>");
						echo("<u>Comprar</u>");
					echo("</a>");
				echo("</div>");
			
		}
			echo("</div>");
		echo("</div>");

	?>
	
	
	<!--FINAL-->
	 
       <div class="container p-2">
			 
			 <div class="row" style="margin-left: 5px">	
			</div> 	 
			 
		 <div class="row">
		  <div class="col-md-12 p-2">
			  <div class=" p-2 text-center" id="margint">
			<h4 >LUTANDO POR UMA MODA MAIS SUSTENTÁVEL</h4> 
				</div>	
					</div>
	
			
		<div class="col-md-12  text-center p-3" style="margin-left: 0px"><img src="modelos/sust.png"  width="1100"></div> 
      	
          

		 </div>
		</div>
 
	<!-- TENDENCIA -->
	
	<?php
	
		$sql = $conn->query("select * from produto where tendencia_produto=1");
		
		
		echo('
		
		<div class="container">

			<div class="row" style="margin-left: 5px"></div> 	 

			<div class="row">
				<div class="col-md-12 p-2">
					<div class=" p-2 text-center" id="margint">
						<h4 >TENDÊNCIAS DA VEZ</h4> 
					</div>	
				</div>
		
		');
				
	
	
		foreach($sql as $linha)
		{	

				echo('<div class="col-md-3  text-center p-3" style="margin-left: 0px">');
					echo("<img src='img/".$linha['codigo_produto']."/".$linha['img_produto']."' width='300' alt='teste'>");
					echo('<p>'.$linha['nome_produto'].' a partir de $'.$linha['valor_produto'].'</p>');
					echo('<a href="produto.php?prod='. $linha['codigo_produto'].'" style="color: black;">');
						echo('<u>Comprar</u>');
					echo("</a>");
				echo("</div>");
			
		}
			echo("</div>");
		echo("</div>");

	?>
	
	<!--FINAL-->
			 
      <div class="container-fluid">
			 
			 <div class="row" style="margin-left: 5px">	
			</div> 	 
			 
		 <div class="row">
		  <div class="col-md-12 p-2">
			  <div class=" p-2 text-center" id="margint">
			<h4 >PEÇAS PARA TODAS AS IDADES</h4> 
				</div>	
					</div>
	
			
		<div class="col-md-3  text-center p-3" style="margin-left: 0px"><img src="modelos/titulo.png"  width="300"></div> 
      	 <div class="col-md-4  text-center p-3" style="margin-left: 0px"><img src="modelos/moda.png"  width="400"></div>
		
		
			
		 <div class="col-md-4 text-center p-3" style="margin-left: 0px"><img src="modelos/moda1.png" width="520"></div>
		
          

		 </div>
		</div>
	<br>
	<br>
	<br>
	
	<?php 
	
		include_once("rodape.php");
	?>
	
	 
	 
	 
	<script>
		function funcao1()
		{
		alert("<b class='tit'>Frete Fixo</b><p>A promoção frete fixo para todo Brasil é realizado na primeira compra ou com um valor superior a $20,00</p>");

		}
	</script>
	
		<!--Js Bootstrap-->
	<script src="js/bootstrap.bundle.js"></script>
	
	
</body>
</html>