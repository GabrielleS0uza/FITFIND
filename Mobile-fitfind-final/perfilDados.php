<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Documento sem título</title>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="estilo2.css">
	<link rel="stylesheet" href="estilo-ana.css">
</head>
	
	<body class="coloe">
		
	<main class="main-content mt-0 ps">
		<section class="min-vh-100 mb-8">
	
	<?php include_once("sessaoControle.php") ?>	
	<?php include_once("clienPesquisar.php"); ?>	
	<div class="container">
		<div class="row mt-lg-n10 mt-md-n11 mt-n10">
		<div class="col-xl-6 col-lg-7 col-md-9 mx-auto">
		<div class="cartao z-index-0">
							
	<h3 class="tit mt-2" style="font-family: 'Open Sans', sans-serif; font-weight: 600; text-align: center">Meus dados</h3>
	<form action="" method="post"  class="" enctype="multipart/form-data"  id="frmDados" >

		<div class="row">
		<div class="col-sm-8" >
		<p><label for="txtID"></label><br>
		<input type="number" placeholder="Informe ID:" class="form-control" name="txtID" id="txtID" value="<?php echo ($clienteLogadoID) ?>" ></p>
		</div>
		</div>

	<div class="row">
		<div class="col-sm-12" >	
		<p><label for="txtNome">Nome</label><br>
		<input type="text" placeholder="Informe o nome:" name="txtNome" id="txtNome" class="form-control" value="<?php echo ($nome_cliente) ?>"></p></div>
	</div>

	<div class="row">

		<div class="col-sm-4" >	
		<p><label for="txtCpf"> CPF</label><br>
		<input type="text" class="form-control" name="txtCpf" id="txtCpf" value="<?php echo ($cpf_cliente) ?>"></p>
	</div>	

	<div class="col-sm-4" >
		<p> <label for="txtGenero">Gênero </label><br>
			<select name="txtGenero" id="txtGenero" class="form-control" >
			<option value="F" <?php if($genero_cliente == "F"){echo "selected";}?>>Fem</option>
			<option value="M" <?php if($genero_cliente == "M"){echo "selected";}?>>Masc</option>
			<option value="O" <?php if($genero_cliente == "O"){echo "selected";}?>>Outros</option>
			</select></p></div>	

	<div class="col-sm-4" >	 
	<p><label for="txtNascimento">Nascimento</label><br>
	<input type="date"  name="txtNascimento" id="txtNascimento" class="form-control" value="<?php echo ($nascimento_cliente) ?>"></p>
	</div>	

	</div>

	<div class="row">
		<div class="col-sm-6" >
		<p><label for="txtTelefone">Telefone</label><br>
		<input type="text" class="form-control" name="txtTelefone" id="txtTelefone" value="<?php echo ($telefone_cliente) ?>"></p>
	</div>

	</div>	

						
	<div class="row">
		<div class="col-sm-6" >	
		<p><label for="txtEmail">Email</label><br>
		<input type="text" placeholder="Informe o email:" name="txtEmail" id="txtEmail" class="form-control" value="<?php echo ($email_cliente) ?>"></p></div>
					
	</div>
									
				
		
		<!--<hr>-->
<div class="row">
			<div class="col-sm-12" >	
			<p><label for="txtEndereço">Endereço</label><br>
			<input type="text" placeholder="Informe o endereço:" name="txtEndereço" id="txtEndereço" class="form-control" value="<?php echo ($rua_cliente) ?>"></p></div>

		</div>

	<div class="row">	
		<div class="col-sm-5" >	
		 <p><label for="txtBairro">Bairro</label><br>
		<input type="text" placeholder="Informe o bairro:" name="txtBairro" id="txtBairro" class="form-control" value="<?php echo ($bairro_cliente) ?>"></p></div>	
		<div class="col-sm-4" >	
		<p><label for="txtCidade">Cidade</label><br>
		<input type="text" placeholder="Informe a cidade:" name="txtCidade" id="txtCidade" class="form-control" value="<?php echo ($cidade_cliente) ?>"></p></div>

			<div class="col-sm-3" >	
				<label for="txtUF">UF</label>

				<select name="txtUF" id="txtUF" class="form-control">
								<option value="AC" <?php if($estado_cliente == "AC"){echo "selected";}?>>AC</option>
								<option value="AL" <?php if($estado_cliente == "AL"){echo "selected";}?>>AL</option>
								<option value="AM" <?php if($estado_cliente == "AM"){echo "selected";}?>>AM</option>
								<option value="AP" <?php if($estado_cliente == "AP"){echo "selected";}?>>AP</option>
								<option value="BA" <?php if($estado_cliente == "BA"){echo "selected";}?>>BA</option>
								<option value="CE" <?php if($estado_cliente == "CE"){echo "selected";}?>>CE</option>
								<option value="DF" <?php if($estado_cliente == "DF"){echo "selected";}?>>DF</option>
								<option value="ES" <?php if($estado_cliente == "ES"){echo "selected";}?>>ES</option>
								<option value="GO" <?php if($estado_cliente == "GO"){echo "selected";}?>>GO</option>
								<option value="MA" <?php if($estado_cliente == "MA"){echo "selected";}?>>MA</option>
								<option value="MT" <?php if($estado_cliente == "MT"){echo "selected";}?>>MT</option>
								<option value="MS" <?php if($estado_cliente == "MS"){echo "selected";}?>>MS</option>
								<option value="MG" <?php if($estado_cliente == "MG"){echo "selected";}?>>MG</option>
								<option value="PA" <?php if($estado_cliente == "PA"){echo "selected";}?>>PA</option>
								<option value="PB" <?php if($estado_cliente == "PB"){echo "selected";}?>>PB</option>
								<option value="PR" <?php if($estado_cliente == "PR"){echo "selected";}?>>PR</option>
								<option value="PE" <?php if($estado_cliente == "PE"){echo "selected";}?>>PE</option>
								<option value="PI" <?php if($estado_cliente == "PI"){echo "selected";}?>>PI</option>
								<option value="RJ" <?php if($estado_cliente == "RJ"){echo "selected";}?>>RJ</option>
								<option value="RN" <?php if($estado_cliente == "RN"){echo "selected";}?>>RN</option>
								<option value="RS" <?php if($estado_cliente == "RS"){echo "selected";}?>>RS</option>
								<option value="RO" <?php if($estado_cliente == "RO"){echo "selected";}?>>RO</option>
								<option value="RR" <?php if($estado_cliente == "RR"){echo "selected";}?>>RR</option>
								<option value="SC" <?php if($estado_cliente == "SC"){echo "selected";}?>>SC</option>
								<option value="SP" <?php if($estado_cliente == "SP"){echo "selected";}?>>SP</option>
								<option value="SE" <?php if($estado_cliente == "SE"){echo "selected";}?>>SE</option>
								<option value="TO" <?php if($estado_cliente == "TO"){echo "selected";}?>>TO</option>				
				
				</select>
										</div>  
										

		<div class="row">

			<div class="col-sm-5" >	
				<p><label for="txtCep"> CEP</label><br>
				<input type="text" class="form-control" name="txtCep" id="txtCep" value="<?php echo ($cep_cliente) ?>"></p>
				</div>	
			
			<div class="col-sm-4">
			<label for="txtSenha">Senha</label>
			<input type="password" id="txtSenha" name="txtSenha" class="form-control" value="<?php echo ($senha_cliente) ?>">
			</div>
		</div>	
		<div class="row">
		  <div class="col-sm-12" >
			<p> <label for="txtStatus">Status: </label><br>
				<select name="txtStatus" id="txtStatus" class="form-control">
				<option value="Ativo" <?php if($status_cliente == "Ativo"){echo "selected";}?>>Ativo</option>
				<option value="Inativo" <?php if($status_cliente == "Inativo"){echo "selected";}?>>Inativo</option>
				</select></p></div></div>

		<div class="row">
				<div class="col-sm-12" >	
				<p><label for="txtObs">Observação</label><br>
				<textarea name="txtObs" id="txtObs" cols="30" rows="5" class="form-control" ><?php echo ($obs_cliente) ?></textarea></p></div></div>


<div>
	<button type="submit" formaction="perfilDados.php" class="btn gradient form-control mt-3" style="background-color: #BC7ED8; color: white; font-weight: 700;">pesquisar</button>
	
	<button type="submit" formaction="clienAlterar.php" id="btoAlterar" class="btn gradient form-control mt-3" style="background-color: #BC7ED8; color: white; font-weight: 700;">Alterar</button>
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
		
	
	<script src="js/bootstrap.bundle.js"></script>
	<script src="jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	
</body>
</html>