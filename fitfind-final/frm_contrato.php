<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<link rel="stylesheet" href="estiloForm.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="script.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet"> 
</head>

<body>

<main class="main-content mt-0 ps">
		<section class="min-vh-100 mb-8">
			
			<div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://images.pexels.com/photos/10458835/pexels-photo-10458835.jpeg');">
				<span class="mask bg-gradient-dark opacity-6"></span>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5 text-center mx-auto">
							<h1 class="text-white mb-2 mt-5">Bem vindo!</h1>
							<p class="text-lead text-white">Crie uma conta para usar nossos serviços.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row mt-lg-n10 mt-md-n11 mt-n10">
					<div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
						<div class="cartao z-index-0">


<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="gradient text-gradient" style="font-family: 'Open Sans', sans-serif; font-weight: 600; text-align: center">Contrato</h1>
			<hr>
			<form action="" method="post" class="">
				<!--<div class="row mb-2">
					<div class="col-sm-3">
						<label for="txtId">ID</label>
						<input type="number" name="txtId" id="txtId" class="form-control">
					</div>
					<div class="col-sm-5"></div>
					<div class="col-sm-4">
						<label for="txtData">Data de Cadastro</label>
						<input type="date" name="txtData" id="txtData" class="form-control">
					</div>
				</div>-->
				
				<div class="row mb-2">
					<div class="col-sm-4">
						<label for="txtIdLoja">ID da Loja</label>
						<input type="number" name="txtIdLoja" id="txtIdLoja" class="form-control" readonly value="<?php echo $_GET['idLoja']?>">
					</div>
					<div class="col-sm-8">
						<label for="txtNome">Nome da Loja</label>
						<input type="text" name="txtNome" id="txtNome" class="form-control mb-2">
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-sm-4">
						<label for="txtPlano">Plano</label>
							<select name="txtPlano" id="txtPlano" class="form-select" class="form-control">
								<option>Plano Basico</option>
								<option>Plano Entrega</option>
							</select>
					</div>
					<div class="col-sm-4">
						<label for="txtValor">Valor a Pagar</label>
						<input type="text" name="txtValor" id="txtValor" class="form-control">
					</div>
					<div class="col-sm-4">	
						<label for="txtStatus">Status</label>
							<select name="txtStatus" id="txtStatus" class="form-select" class="form-control">
								<option >Ativo</option>
								<option >Inativo</option>
							</select>
					</div>
					<!--<div class="col-sm-3">
						<label for="btoContrato"></label><br>
						<button name="btoContrato" class="btn-default form-control mb-2">Contrato</button>
					</div>-->
				</div>
					
				<div class="row mb-2">
					<div class="col-sm-4">
						<label for="txtDataC">Data do Contrato</label>
						<input type="date" name="txtDataC" id="txtDataC" class="form-control  mb-2">
					</div>
					<div class="col-sm-4">
					<label for="txtDataV">Data de Vencimento</label>
					<input type="date" name="txtDataV" id="txtDataV" class="form-control">
					</div>
					<div class="col-sm-4">
						<label for="txtPag">Data de Pagamento</label>
							<select name="txtPag" id="txtPag" class="form-select" class="form-control mb-2">
								<option>Todo dia 5</option>
								<option>Todo dia 10</option>
								<option>Todo dia 15</option>
								<option>Todo dia 20</option>
							</select>
					</div>
				</div>
					
					<label for="txtObs">Observação</label>
					<textarea class="form-control mb-2" rows="5" id="txtObs" name="txtObs"></textarea></textarea>
					
				<hr>
				
			</form>

	
	<script src="js/bootstrap.bundle.js"></script>
