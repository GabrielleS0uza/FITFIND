<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="script.css">	
	<link rel="stylesheet" href="estilo-ana.css" type="text/css" >	
	
</head>

<body>
	
	<?php include_once("paginaPrincipal_topo_gabi.php") ?>
	<body style="background-color: #F8F9FA; font-family: 'Montserrat', 'sans-serif';">
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10"></div>
			<div class="col-sm-2">
			
				<div class="dropdown">
					<button type="button" class="btn butao dropdown-toggle" data-bs-toggle="dropdown">
						Ordenar Por: 
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="listaProdutos.php?ordem=nome">Nome</a></li>
						<li><a class="dropdown-item" href="listaProdutos.php?ordem=data">Data de Cadastro</a></li>
						<li><a class="dropdown-item" href="listaProdutos.php?ordem=preco">Preço</a></li>
					</ul>
				</div>
			
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
			
				
				<a href="#demo" class="btn butao" data-bs-toggle="collapse">Filtros: </a> <hr>
				<div id="demo" class="collapse">
					<div class="col-sm-12 btn">Algum Filtro Aí</div> <hr>
					<div class="col-sm-12 btn">Algum Filtro Aí</div> <hr>
					<div class="col-sm-12 btn">Algum Filtro Aí</div> <hr>
					<div class="col-sm-12 btn">Algum Filtro Aí</div> <hr>
					<div class="col-sm-12 btn">Algum Filtro Aí</div>
				</div>
				
			</div>
			
			<div class="col-sm-9">
				<?php include_once("produtos.php")?>
			</div>
	
		</div>
	</div>
		
		<?php 
	
			include_once("rodape.php");
	?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	
	
	
	
</body>
</html>