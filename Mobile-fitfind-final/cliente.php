<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<link href="estilo-ana.css" rel="stylesheet">
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
							<p class="text-lead text-white">Crie uma conta de graça para usar nossos serviços.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row mt-lg-n10 mt-md-n11 mt-n10">
					<div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
						<div class="cartao z-index-0">
							
								<h3 class="gradient text-gradient" style="font-family: 'Open Sans', sans-serif; font-weight: 600; text-align: center">Cadastrar-se</h3>
								<form action="" method="post"  class="" enctype="multipart/form-data">

								<!--	<p></p>
								<div class="row">
									<div class="col-sm-8" >
										<p><label for="txtID">ID</label><br>
										<input type="number" placeholder="Informe ID:" class="form-control" name="txtID" id="txtID" ></p>
									</div>

									<div class="col-sm-4" >	 
									<p><label for="txtData">Data de Cadastro</label><br>
									<input type="date"  name="txtData" id="txtData" class="form-control"></p>
									</div>
								</div>-->

								<div class="row">
								<div class="col-sm-12" >	
								<p><label for="txtNome">Nome</label><br>
								<input type="text" placeholder="Informe o nome:" name="txtNome" id="txtNome" class="form-control"></p></div>
								</div>

								<div class="row">

								<div class="col-sm-4" >	
								<p><label for="txtCpf"> CPF</label><br>
								<input type="number" class="form-control" name="txtCpf" id="txtCpf" ></p>
								</div>	

								<div class="col-sm-4" >
								<p> <label for="txtGenero">Gênero </label><br>
								<select name="txtGenero" id="txtGenero" class="form-control">
								<option value="F">Fem</option>
								<option value="M">Masc</option>
								<option value="O">Outros</option>
								</select></p></div>	

								<div class="col-sm-4" >	 
								<p><label for="txtNascimento">Nascimento</label><br>
								<input type="date"  name="txtNascimento" id="txtNascimento" class="form-control"></p>
								</div>	

								</div>

								<div class="row">
								<div class="col-sm-12" >	
								<p><label for="txtEndereço">Endereço</label><br>
								<input type="text" placeholder="Informe o endereço:" name="txtEndereço" id="txtEndereço" class="form-control"></p></div>

								</div>

								<div class="row">	
								<div class="col-sm-5" >	
								<p><label for="txtBairro">Bairro</label><br>
								<input type="text" placeholder="Informe o bairro:" name="txtBairro" id="txtBairro" class="form-control"></p></div>	
								<div class="col-sm-4" >	
								<p><label for="txtCidade">Cidade</label><br>
								<input type="text" placeholder="Informe a cidade:" name="txtCidade" id="txtCidade" class="form-control"></p></div>

								<div class="col-sm-3" >	
								<label for="txtUF">UF</label>

								<select name="txtUF" id="txtUF" class="form-control">
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">>Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul </option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul </option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina </option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
								<option value="DF">Distrito Federal </option></select>
								</div>  
								</div>

								<div class="row">

								<div class="col-sm-6" >	
								<p><label for="txtCep"> CEP</label><br>
								<input type="number" class="form-control" name="txtCep" id="txtCep" ></p>
								</div>	

								<div class="col-sm-6" >
								<p><label for="txtTelefone">Telefone</label><br>
								<input type="number" class="form-control" name="txtTelefone" id="txtTelefone" ></p>
								</div>

								</div>	

								<div class="row">
								<div class="col-sm-12" >
								<p> <label for="txtStatus">Status: </label><br>
								<select name="txtStatus" id="txtStatus" class="form-control">
								<option value="Ativo">Ativo</option>
								<option value="Inativo">Inativo</option>
								</select></p></div></div>

								<div class="row">
								<div class="col-sm-12" >	
								<p><label for="txtObs">Observação</label><br>
								<textarea name="txtObs" id="txtObs" cols="30" rows="5" class="form-control" ></textarea></p></div></div>
									
								<div class="row">
									<div class="col-sm-6" >	
								<p><label for="txtEmail">Email</label><br>
								<input type="text" placeholder="Informe o email:" name="txtEmail" id="txtEmail" class="form-control" ></p></div>
									<div class="col-sm-6">
										<label for="txtSenha">Senha</label>
										<input type="password" id="txtSenha" name="=txtSenha" class="form-control">
									</div>
									
								</div>
									
								<!--<hr>-->





								<div>
								<button type="submit" formaction="clienCadastro.php" class="btn gradient form-control" style="background-color: #BC7ED8; color: white; font-weight: 700;">Cadastrar</button>
								<!--<br>
								<br>-->
								<!--<button type="submit" formaction="clienAlterar" class="btn gradient2 form-control" style="background-color: #BC7ED8; color: white; font-weight: 700;">Alterar</button> -->

								</div>


								</form>	
								
						
						</div>
					</div>
				</div>
			</div>
			
		</section>
	
	</main>
	
	
	
</body>
</html>