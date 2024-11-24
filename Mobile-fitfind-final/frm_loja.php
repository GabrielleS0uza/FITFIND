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
							
								<h3 class="gradient text-gradient" style="font-family: 'Open Sans', sans-serif; font-weight: 600; text-align: center">Cadastrar-se</h3>	
			<form action="" method="post" class="">
				<h4 class="pt-2 gradient text-gradient" style="font-family: 'Open Sans', sans-serif; font-weight: 500; text-align: center">Dados da Empresa</h4>
				
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
					<div class="col-sm-12">
						<label for="txtNome">Nome da Loja</label>
						<input type="text" name="txtNome" id="txtNome" class="form-control mb-2">
					</div>
				</div>	
				
				<div class="row mb-2">
					<div class="col-sm-12">
						<label for="txtAtv">Atividade da Loja</label>
						<input type="text" name="txtAtv" id="txtAtv" class="form-control">
					</div>
				</div>

				<div class="row mb-2">
					<div class="col-sm-4">
						<label for="txtTelefone1">Telefone 1</label>
						<input type="tel" name="txtTelefone1" id="txtTelefone1" class="form-control">
					</div>
					<div class="col-sm-4">
						<label for="txtTelefone2">Telefone 2</label>
						<input type="tel" name="txtTelefone2" id="txtTelefone2" class="form-control">
					</div>
					<div class="col-sm-4">	
						<label for="txtStatus">Status do contrato</label>
							<select name="txtStatus" id="txtStatus" class="form-select" class="form-control">
								<option >Ativo</option>
								<option >Inativo</option>
							</select>
					</div>
				</div>	
				
				<div class="row mb-2">
					<div class="col-sm-8">
						<label for="txtEmail">Email</label>
						<input type="text" name="txtEmail" id="txtEmail" class="form-control">
					</div>
					<div class="col-sm-4">
						<label for="txtSenha">Senha</label>
						<input type="password" name="txtSenha" id="txtSenha" class="form-control">
					</div>
				</div>
					
				
					
				<div class="row mb-2">
					<div class="col-sm-7">
						<label for="txtEnd">Endereço</label>
						<input type="text" name="txtEnd" id="txtEnd" placeholder="Informe Endereço" class="form-control">
					</div>
					<div class="col-sm-5">
						<label for="txtCep">CEP</label>
						<input type="number" name="txtCep" id="txtCep" class="form-control">						
					</div>
				</div>

				<div class="row">
					<div class="col-sm-5">
						<label for="txtBairro">Bairro</label>
						<input type="text" name="txtBairro" id="txtBairro" placeholder="Informe Bairro" class="form-control">		
					</div>
					<div class="col-sm-5">
						<label for="txtCidade">Cidade</label>
						<input type="text" name="txtCidade" id="txtCidade" placehoCidadelder="Informe Cidade" class="form-control">
					</div>
					<div class="col-sm-2">
						<label for="txtEstado">Estado</label>
							<select name="txtEstado" id="txtEstado" class="form-control">
								<option>AC</option>
								<option>AL</option>
								<option>AM</option>
								<option>AP</option>
								<option>BA</option>
								<option>CE</option>
								<option>DF</option>
								<option>ES</option>
								<option>GO</option>
								<option>MA</option>
								<option>MT</option>
								<option>MS</option>
								<option>MG</option>
								<option>PA</option>
								<option>PB</option>
								<option>PR</option>
								<option>PE</option>
								<option>PI</option>
								<option>RJ</option>
								<option>RN</option>
								<option>RS</option>
								<option>RO</option>
								<option>RR</option>
								<option>SC</option>
								<option>SP</option>
								<option>SE</option>
								<option>TO</option>
							</select>
					</div>
				</div>
					
				 <br>
				
				<h4 class="gradient text-gradient" style="font-family: 'Open Sans', sans-serif; font-weight: 500; text-align: center">Dados do Diretor</h4>
				 
				
				<div class="row mb-2">
					<div class="col-sm-8">
						<label for="txtDiretor">Diretor(a)</label>
						<input type="text" name="txtDiretor" id="txtDiretor" class="form-control mb-2">
					</div>
					<div class="col-sm-4">
						<label for="txtCPF">CPF</label>
						<input type="number" name="txtCPF" id="txtCPF" class="form-control">
					</div>
				</div>	
				
				<div class="row mb-5">
					<div class="col-sm-8">
						<label for="txtEmailR">Email</label>
						<input type="text" name="txtEmailR" id="txtEmailR" class="form-control">
					</div>
					<div class="col-sm-4">
						<label for="txtTelefoneR">Telefone</label>
						<input type="tel" name="txtTelefoneR" id="txtTelefoneR" class="form-control">
					</div>
				</div>
				
				 
				
				<button name="btoSalvar" class="btn gradient form-control" style="background-color: #BC7ED8; color: white; font-weight: 700;" formaction="loja_cadastrar.php">Cadastrar</button>				
			</form>
		</section>
	
	<script src="js/bootstrap.bundle.js"></script>

			
	
</body>
</html>			