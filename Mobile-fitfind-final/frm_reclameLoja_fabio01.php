<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="titulo">Formulário de Reclamação</h1>
			<hr>
			<form action="" method="post" class="form-control" id="frmReclame">
				<div class="row mb-2">
					<div class="col-sm-3">
						<label for="txtId">ID</label>
						<input type="number" name="txtId" id="txtId" class="form-control">
					</div>
					<div class="col-sm-5"></div>
					<div class="col-sm-4">
						<label for="txtData">Data de Cadastro</label>
						<input type="date" name="txtData" id="txtData" class="form-control">
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-sm-4">
						<label for="txtIdLoja">ID da Loja</label>
						<input type="number" name="txtIdLoja" id="txtIdLoja" class="form-control" value="<?php echo ($lojaLogadoID) ?>" readonly>
					</div>
					<div class="col-sm-8">
						<label for="txtNome">Nome da Loja</label>
						<input type="text" name="txtNome" id="txtNome" class="form-control mb-2" value="<?php echo ($lojaLogadoNome) ?>" disabled>
					</div>
				</div>
				
				<!--<div class="row mb-2">
					<div class="col-sm-8">
						<label for="txtEmail">Email</label>
						<input type="text" name="txtEmail" id="txtEmail" class="form-control">
					</div>
					<div class="col-sm-4">
						<label for="txtTelefone">Telefone 1</label>
						<input type="tel" name="txtTelefone" id="txtTelefone" class="form-control">
					</div>
				</div>-->
				
				<div class="row mb-2">
					<div class="col-sm-4">
						<label for="txtTipo">Tipo de chamado</label>
							<select name="txtTipo" id="txtTipo" class="form-select" class="form-control mb-2">
								<option value="LENTO">Lentidão</option>
								<option value="TRAVA">Travamento</option>
								<option value="OUTROS">Outros</option>
							</select>
					</div>
					<div class="col-sm-4">
						<label for="txtTela">Tela</label>
							<select name="txtTela" id="txtTela" class="form-select" class="form-control mb-2">
								<option value="HOME">Home</option>
								<option value="PEDIDO">Pedido</option>
								<option value="PRODUTO">Produtos</option>
								<option value="LOGIN">Login</option>
							</select>
					</div>
				</div>
					
					<label for="txtMeng">Descrição do Problema</label>
					<textarea class="form-control mb-2" rows="5" id="txtMeng" name="txtMeng"></textarea></textarea>
					
				<hr>

				<button name="btoSalvar" id="btoSalvar" class="btn-success btn">Enviar</button>				
			</form>
		<div id="resposta" style="display: none;"></div>
	
	<script src="js/jquery-3.5.1.js"></script>
		
	<script>
		
		console.log("Passou por aq, Fabio01");
		
		debuga = $('#resposta');	

		function carregando(datas)
		{
			debuga.empty().html('Carregando...');
		}

		function sucesso(datas)
		{
			debuga.empty().html('<pre>'+datas+'</pre>');
			$('#txtID').val($('#idGerado').text());
		}

		function errosend(datas)
		{
			debuga.empty().html('Erro ao enviar os dados.');
		}
		
		enviar = $('#frmReclame');
		action = '';
		
		$.ajaxSetup({
			type:		'POST',
			beforeSend:	carregando,
			error:		errosend,
			success:	sucesso
		})
		
		enviar.submit(function(){
			return false;
		})
		
		$("#btoSalvar").click(function(){
			console.log("Clicou no botão cadastrar.")
			
			action = 'reclame_cadastrar_fabio.php';
			
			$.ajax({
				url:	action,
				data:{
					txtIdLoja: $("#txtIdLoja").val(),
					txtTipo: $("#txtTipo").val(),
					txtTela: $("#txtTela").val(),
					txtMeng: $("#txtMeng").val()
				}
			})
		})
		
	</script>