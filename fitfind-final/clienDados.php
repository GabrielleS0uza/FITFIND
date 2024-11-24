<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<link href="estilo.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
	<?php include_once("clienPesquisar.php"); ?>
	
	<div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1 class="tit">Cadastro de cliente</h1>
               
				
		<form action="" method="post"  class="form-control" enctype="multipart/form-data">
			
					
		<p><div class="row">
			<div class="col-sm-8" >
		  		<p><label for="txtID">ID</label><br>
				<input type="number" placeholder="Informe ID:" class="form-control" name="txtID" id="txtID" ></p>
			</div>
		
		
			
				 <div class="col-sm-4" >	 
		 <p><label for="txtData">Data de Cadastro</label><br>
				<input type="date"  name="txtData" id="txtData" class="form-control"></p>
			</div>
			</div>
			
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
				
				 <div class="col-sm-4" >	
				<p><label for="txtCep"> CEP</label><br>
			<input type="number" class="form-control" name="txtCep" id="txtCep" ></p>
			 </div>	
				
				<div class="col-sm-4" >	
					<p><label for="txtEmail">Email</label><br>
					<input type="text" placeholder="Informe o email:" name="txtEmail" id="txtEmail" class="form-control" ></p></div>
				
					<div class="col-sm-4" >
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
			<hr>
			
			
			
			
			
	<div>
					<button type="submit" formaction="clienCadastro.php" class="btn btn-outline-success">Cadastrar</button>
					<button type="submit" formaction="clienAlterar" class="btn btn-outline-secondary">Alterar</button>
					<button type="submit" formaction="cliente.php" class="btn btn-outline-warning">Limpar</button> 
					
		 		</div>
			
			
					</form>	
				</div>	
			<div class="col-sm-3"></div> 
        </div>
      </div>
	
	
</body>
</html>