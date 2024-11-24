<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<link href="estilo.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>


	<?php include_once("lojaPesq.php"); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="titulo">Formulário de Cadastro da Loja</h1>
			<hr>
		
			<form action="" method="post" class="form-control" id="frmLoja">
				<h4 class="pt-2">Dados da Empresa</h4>
				<hr>
				<div class="row mb-2">
					<div class="col-sm-3">
						<label for="txtId">ID</label>
						<input type="number" name="txtId" id="txtId" class="form-control" value="<?php echo ($lojaLogadoID) ?>" readonly>
					</div>
					
					
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<label for="txtData">Data de Cadastro</label>
						<input type="date" name="txtData" id="txtData" class="form-control" value="<?php echo ($datacadastro_loja)?>" readonly>
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-sm-12">
						<label for="txtNome">Nome da Loja</label>
						<input type="text" name="txtNome" id="txtNome" class="form-control mb-2" value="<?php echo ($nome_loja) ?>">
					</div>
				</div>	
				
				<div class="row mb-2">
					<div class="col-sm-12">
						<label for="txtAtv">Atividade da Loja</label>
						<input type="text" name="txtAtv" id="txtAtv" class="form-control" value="<?php echo ($atividade_loja) ?>">
					</div>
				</div>

				<div class="row mb-2">
					<div class="col-sm-4">
						<label for="txtTelefone1">Telefone 1</label>
						<input type="tel" name="txtTelefone1" id="txtTelefone1" class="form-control"  value="<?php echo ($telefone01_loja) ?>">
					</div>
					<div class="col-sm-4">
						<label for="txtTelefone2">Telefone 2</label>
						<input type="tel" name="txtTelefone2" id="txtTelefone2" class="form-control" value="<?php echo ($telefone02_loja) ?>">
					</div>
					<div class="col-sm-4">	
						<label for="txtStatus">Status do contrato</label>
							<select name="txtStatus" id="txtStatus" class="form-select" class="form-control">
								<option value="Ativo" <?php if($status_loja == "Ativo"){echo "selected";}?> >Ativo</option>
								<option value="Inativo" <?php if($status_loja == "Inativo"){echo "selected";}?> >Inativo</option>
							</select>
					</div>
				</div>	
				
				<div class="row mb-2">
					<div class="col-sm-8">
						<label for="txtEmail">Email</label>
						<input type="text" name="txtEmail" id="txtEmail" class="form-control" value="<?php echo ($email_loja) ?>" >
					</div>
					<div class="col-sm-4">
						<label for="txtSenha">Senha</label>
						<input type="password" name="txtSenha" id="txtSenha" class="form-control" value="<?php echo ($senha_loja) ?>">
					</div>
				</div>
					
				
					
				<div class="row mb-2">
					<div class="col-sm-9">
						<label for="txtEnd">Endereço</label>
						<input type="text" name="txtEnd" id="txtEnd" placeholder="Informe Endereço" class="form-control" value="<?php echo ($endereco_loja) ?>">
					</div>
					<div class="col-sm-3">
						<label for="txtCep">CEP</label>
						<input type="number" name="txtCep" id="txtCep" class="form-control" value="<?php echo ($cep_loja) ?>">						
					</div>
				</div>

				<div class="row">
					<div class="col-sm-5">
						<label for="txtBairro">Bairro</label>
						<input type="text" name="txtBairro" id="txtBairro" placeholder="Informe Bairro" class="form-control" value="<?php echo ($bairro_loja) ?>">		
					</div>
					<div class="col-sm-5">
						<label for="txtCidade">Cidade</label>
						<input type="text" name="txtCidade" id="txtCidade" placehoCidadelder="Informe Cidade" class="form-control" value="<?php echo ($cidade_loja) ?>">
					</div>
					<div class="col-sm-2">
						<label for="txtEstado">Estado</label>
							<select name="txtEstado" id="txtEstado" class="form-control">
								<option value="AC" <?php if($estado_loja == "AC"){echo "selected";}?>>AC</option>
								<option value="AL" <?php if($estado_loja == "AL"){echo "selected";}?>>AL</option>
								<option value="AM" <?php if($estado_loja == "AM"){echo "selected";}?>>AM</option>
								<option value="AP" <?php if($estado_loja == "AP"){echo "selected";}?>>AP</option>
								<option value="BA" <?php if($estado_loja == "BA"){echo "selected";}?>>BA</option>
								<option value="CE" <?php if($estado_loja == "CE"){echo "selected";}?>>CE</option>
								<option value="DF" <?php if($estado_loja == "DF"){echo "selected";}?>>DF</option>
								<option value="ES" <?php if($estado_loja == "ES"){echo "selected";}?>>ES</option>
								<option value="GO" <?php if($estado_loja == "GO"){echo "selected";}?>>GO</option>
								<option value="MA" <?php if($estado_loja == "MA"){echo "selected";}?>>MA</option>
								<option value="MT" <?php if($estado_loja == "MT"){echo "selected";}?>>MT</option>
								<option value="MS" <?php if($estado_loja == "MS"){echo "selected";}?>>MS</option>
								<option value="MG" <?php if($estado_loja == "MG"){echo "selected";}?>>MG</option>
								<option value="PA" <?php if($estado_loja == "PA"){echo "selected";}?>>PA</option>
								<option value="PB" <?php if($estado_loja == "PB"){echo "selected";}?>>PB</option>
								<option value="PR" <?php if($estado_loja == "PR"){echo "selected";}?>>PR</option>
								<option value="PE" <?php if($estado_loja == "PE"){echo "selected";}?>>PE</option>
								<option value="PI" <?php if($estado_loja == "PI"){echo "selected";}?>>PI</option>
								<option value="RJ" <?php if($estado_loja == "RJ"){echo "selected";}?>>RJ</option>
								<option value="RN" <?php if($estado_loja == "RN"){echo "selected";}?>>RN</option>
								<option value="RS" <?php if($estado_loja == "RS"){echo "selected";}?>>RS</option>
								<option value="RO" <?php if($estado_loja == "RO"){echo "selected";}?>>RO</option>
								<option value="RR" <?php if($estado_loja == "RR"){echo "selected";}?>>RR</option>
								<option value="SC" <?php if($estado_loja == "SC"){echo "selected";}?>>SC</option>
								<option value="SP" <?php if($estado_loja == "SP"){echo "selected";}?>>SP</option>
								<option value="SE" <?php if($estado_loja == "SE"){echo "selected";}?>>SE</option>
								<option value="TO" <?php if($estado_loja == "TO"){echo "selected";}?>>TO</option>
							</select>
					</div>
				</div>
					
				<hr>
				
				<h4>Dados do Diretor</h4>
				<hr>
				
				<div class="row mb-2">
					<div class="col-sm-8">
						<label for="txtDiretor">Diretor(a)</label>
						<input type="text" name="txtDiretor" id="txtDiretor" class="form-control mb-2" value="<?php echo ($diretor_loja) ?>">
					</div>
					<div class="col-sm-4">
						<label for="txtCPF">CPF</label>
						<input type="number" name="txtCPF" id="txtCPF" class="form-control" value="<?php echo ($cpfRepresentante_loja) ?>">
					</div>
				</div>	
				
				<div class="row mb-8">
					<div class="col-sm-8">
						<label for="txtEmailR">Email</label>
						<input type="text" name="txtEmailR" id="txtEmailR" class="form-control" value="<?php echo ($emailRepresentante_loja) ?>">
					</div>
					<div class="col-sm-4">
						<label for="txtTelefoneR">Telefone</label>
						<input type="tel" name="txtTelefoneR" id="txtTelefoneR" class="form-control" value="<?php echo ($telefoneRepresentante_loja) ?>" >
					</div>
				</div>
				
				<hr>
				
				<button name="btoSalvar" class="btn-success btn" id="btoAlterar">Alterar</button>				
			</form>

	<div id="resposta"></div>
	
	<script src="js/bootstrap.bundle.js"></script>
	<script src="jquery-3.6.0.js"></script>
			
	<script src="loja.js"></script>
			
</body>
</html>
