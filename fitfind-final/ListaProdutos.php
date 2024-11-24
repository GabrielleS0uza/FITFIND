<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FitFind</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="script.css">	
	<link rel="stylesheet" href="estilo-ana.css" type="text/css">	
	
</head>

<body>
	
	<?php include_once("conexao.php");?>
	
	<?php include_once("paginaPrincipal_topo_gabi.php"); ?>
	
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
						<li><a class="dropdown-item" href="listaProdutos.php?ordem=nome" id="nome">Nome</a></li>
						<li><a class="dropdown-item" href="listaProdutos.php?ordem=data" id="data">Data de Cadastro</a></li>
						<li><a class="dropdown-item" href="listaProdutos.php?ordem=preco" id="preco">Preço</a></li>
					</ul>
				</div>
			
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
			
				
				<a href="#demo" class="btn butao" data-bs-toggle="collapse">Filtros:</a> <hr>
				<div id="demo" class="collapse">
					<a href="listaProdutos.php?filtro=1"><div class="col-sm-12 btn" id="fem" >Feminino</div></a> <hr>
					<a href="listaProdutos.php?filtro=2"><div class="col-sm-12 btn" id="masc" >Masculino</div></a> <hr>
					<a href="listaProdutos.php?filtro=3"><div class="col-sm-12 btn" id="inf" >Infantil</div></a> <hr>
					<a href="listaProdutos.php?filtro=4"><div class="col-sm-12 btn" id="esp" >Esportivo</div></a> <hr>
					<a href="listaProdutos.php?filtro=5"><div class="col-sm-12 btn" id="mar" >Marcas</div></a> <hr>
					<a href="listaProdutos.php"><div class="col-sm-12 btn">Limpar</div></a>
				</div>
				
			</div>
			
			<div class="col-sm-9">
				<?php include_once("produtos.php");?>
			</div>
	
		</div>
	</div>
		
		<?php include_once("rodape.php");?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	
	<script src="js/bootstrap.bundle.js"></script>
	
	
</body>
</html>