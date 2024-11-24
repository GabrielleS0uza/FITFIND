<?php include_once("contrato_informacoes.php");?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="titulo">Formulário de Cadastro do Contrato</h1>
			<hr>
			<form action="" method="post" class="form-control" id="FRM_contrato">
				<div class="row mb-2">
					<div class="col-sm-3">
						<label for="txtId">ID</label>
						<input type="number" name="txtId" id="txtId" class="form-control"value="<?php echo ($codigo_contrato)?>" disabled>
					</div>
					<div class="col-sm-5"></div>
					<div class="col-sm-4">
						<label for="txtData">Data de Cadastro</label>
						<input type="date" name="txtData" id="txtData" class="form-control"value="<?php echo ($datacadastro_contrato)  ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-sm-4">
						<label for="txtIdLoja">ID da Loja</label>
						<input type="number" name="txtIdLoja" id="txtIdLoja" class="form-control" value="<?php echo ($lojaLogadoID)  ?>" disabled>
					</div>
					<div class="col-sm-8">
						<label for="txtNome">Nome da Loja</label>
						<input type="text" name="txtNome" id="txtNome" class="form-control mb-2" value="<?php echo ($lojaLogadoNome) ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-sm-3">
						<label for="txtPlano">Plano</label>
							<select name="txtPlano" id="txtPlano" class="form-select" class="form-control"value="<?php echo ($plano_contrato)  ?>" disabled>
								<option>Plano Basico</option>
								<option>Plano Entrega</option>
							</select>
					</div>
					<div class="col-sm-3">
						<label for="txtValor">Valor a Pagar</label>
						<input type="text" name="txtValor" id="txtValor" class="form-control"value="<?php echo ($valor_contrato)  ?>" disabled>
					</div>
					<div class="col-sm-3">	
						<label for="txtStatus">Status do contrato</label>
							<select name="txtStatus" id="txtStatus" class="form-select" class="form-control" value="<?php echo ($status_contrato)  ?>" disabled>
								<option >Ativo</option>
								<option >Inativo</option>
							</select>
					</div>
					<div class="col-sm-3">
						<label for="btoContrato"></label><br>
						<button name="btoContrato" class="btn-default form-control mb-2">Contrato</button>
					</div>
				</div>
					
				<div class="row mb-2">
					<div class="col-sm-4">
						<label for="txtDataC">Data do Contrato</label>
						<input type="date" name="txtDataC" id="txtDataC" class="form-control  mb-2" value="<?php echo ($datacontratacao_contrato)  ?>" disabled>
					</div>
					<div class="col-sm-4">
					<label for="txtDataV">Data de Vencimento</label>
					<input type="date" name="txtDataV" id="txtDataV" class="form-control" value="<?php echo ($datavencimento_contrato)  ?>" disabled>
					</div>
					<div class="col-sm-4">
						<label for="txtPag">Data de Pagamento</label>
							<select name="txtPag" id="txtPag" class="form-select" class="form-control mb-2" value="<?php echo ($datamensalidade_contrato)  ?>" disabled>
								<option>Todo dia 5</option>
								<option>Todo dia 10</option>
								<option>Todo dia 15</option>
								<option>Todo dia 20</option>
							</select>
					</div>
				</div>
					
					<label for="txtObs">OBS</label>
					<textarea class="form-control mb-2" rows="5" id="txtObs" name="txtObs" value="<?php echo ($obs_contrato)  ?>" disabled></textarea>
					
				<hr>

<!--				<button name="btoSalvar" class="btn-success btn" id="btnCadastro">Cadastrar</button>				-->
			</form>
	<div id="resposta"></div>
	
	<script src="js/bootstrap.bundle.js"></script>
		
	<script src="js/jquery-3.5.1.js"></script>
		
		
	<script src="contrato_script.js"></script>	
		
