<?php include_once("prodPesquisar.php"); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="titulo">Formulário de Cadastro dos Produtos</h1>

			<form action="" method="post"  class="form-control" enctype="multipart/form-data" id="frmProduto">

				<p><div class="row">
					<div class="col-sm-6" >
						<p><label for="txtID">ID</label><br>
						<input type="number" placeholder="Informe ID:" class="form-control" name="txtID" id="txtID" readonly></p>
					</div>


					<div class="col-sm-2 text-center">
						<label for=""></label><br>
						<p><button type="submit" class="form-control" id="btoPesq" formaction="principal_parceiro.php?tela=Perfil">&#128269;</button></p>
					</div>

					<div class="col-sm-4" >
						<p><label for="txtIDloja">ID da Loja</label><br>
						<input type="number" placeholder="Informe ID:" class="form-control" name="txtIDloja" id="txtIDloja" readonly value="<?php echo $lojaLogadoID ?>"></p>
					</div>	
				</div>
				
				<div class="row">
					<div class="col-sm-3">
						<label for="txtImagem" class="form-label">Imagem</label><br>
						<input type="file" id="txtImagem" name="txtImagem" placeholder="Envie a Foto" class="form-control" value="<?php echo $img; ?>">
					</div>
					<div class="col-sm-4">
						<label for="txtCaminhoImg" class="form-label">Caminho Imagem</label><br>
						<input type="" id="txtCaminhoImg" name="txtCaminhoImg" placeholder="Sem Foto" class="form-control" value="<?php echo $img_produto; ?>" readonly>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12" >	
						<p><label for="txtNome">Nome</label><br>
						<input type="text" placeholder="Informe o nome:" name="txtNome" id="txtNome" class="form-control" value="<?php echo $nome_produto ?>"</input></p>
					</div>
				</div>
					
				<img src=" <?php
					if($_GET && isset($_GET['produto'])){
						echo('img/'.$_GET['produto'].'/'.$img_produto);
					}
					  ?>" alt="" id="imagem" style="max-height: 300px">
				
				<div class="row">
					<div class="col-sm-8" >	
						<p><label for="txtDescricao">Descrição</label><br>
						<input type="text" placeholder="Informe a descrição:" name="txtDescricao" id="txtDescricao" class="form-control" value=" <?php echo($desc_produto)?>"></p>
					</div>

					<div class="col-sm-4" >
						<p><label for="txtValor">Valor</label><br>
						<input type="text" class="form-control" name="txtValor" id="txtValor" step=".01" value="<?php echo $valor_produto ?>"></p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6" >
					  <p><label for="txtTamanho">Tamanho: </label><br>
						<select name="txtTamanho" id="txtTamanho" class="form-control">
								<option value="PP"
								<?php if($tamanho_produto == "PP"){echo "selected";}?>>PP</option>
								<option value="P"
								<?php if($tamanho_produto == "P"){echo "selected";}?>>P</option>
								<option value="M"
								<?php if($tamanho_produto == "M"){echo "selected";}?>>M</option>
								<option value="G"
								<?php if($tamanho_produto == "G"){echo "selected";}?>>G</option>
								<option value="GG"
								<?php if($tamanho_produto == "GG"){echo "selected";}?>>GG</option>
								<option value="XGG"
								<?php if($tamanho_produto == "XGG"){echo "selected";}?>>XGG</option>
						</select></p>
					</div>

					<div class="col-sm-6" >
						<label for="txtStatus">Status: </label><br>
						   <select name="txtStatus" id="txtStatus" class="form-control">
								<option value="Em estoque"
								<?php if($status_produto == "Em estoque"){echo "selected";}?>> Em estoque</option>
								<option value="Em falta" 
								<?php if($status_produto == "Em falta"){echo "selected";}?>>Em falta</option>
						   </select>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6" >
						<p><label for="txtCategoria">Categoria: </label><br>
							<select name="txtCategoria" id="txtCategoria" class="form-control">
								<option value="1"
								<?php if($categoria_produto == "1"){echo "selected";}?>>Feminino</option>
								<option value="2"
								<?php if($categoria_produto == "2"){echo "selected";}?>>Masculino</option>
								<option value="3"
								<?php if($categoria_produto == "3"){echo "selected";}?>>Infantil</option>
								<option value="4"
								<?php if($categoria_produto == "4"){echo "selected";}?>>Esportivo</option>
								<option value="5"
								<?php if($categoria_produto == "5"){echo "selected";}?>>Marcas</option>
							</select></p>
					</div>

					<div class="col-sm-6" >
						<p><label for="txtTipo">Tipo</label><br>
							<select name="txtTipo" id="txtTipo" class="form-control">
								<option value="1"
								<?php if($tipo_produto == "1"){echo "selected";}?>>Blusas e Camisetas</option>
								<option value="2"
								<?php if($tipo_produto == "2"){echo "selected";}?>>Casaco</option>
								<option value="3"
								<?php if($tipo_produto == "3"){echo "selected";}?>>Conjuntos</option>
								<option value="4"
								<?php if($tipo_produto == "4"){echo "selected";}?>>Calças</option>
								<option value="5"
								<?php if($tipo_produto == "5"){echo "selected";}?>>Saias</option>
								<option value="6"
								<?php if($tipo_produto == "6"){echo "selected";}?>>Vestidos</option>
								<option value="7"
								<?php if($tipo_produto == "7"){echo "selected";}?>>Blazers</option>
								<option value="8"
								<?php if($tipo_produto == "8"){echo "selected";}?>>Macacão</option>
								<option value="9"
								<?php if($tipo_produto == "9"){echo "selected";}?>>Moletom</option>
							</select></p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12" >	
						<p><label for="txtObs">Observação</label><br>
						<textarea name="txtObs" id="txtObs" cols="30" rows="5" class="form-control"><?php echo($obs_produto)?></textarea></p>
					</div>
				</div>

				<div>
					<button type="submit" formaction="prodAlterar.php" id="btoAlterar" class="btn btn-outline-secondary">Alterar</button>
					<button type="submit" formaction="prodExcluir.php" id="btoExcluir" class="btn btn-outline-danger">Excluir</button>	
					<div id="btoLimpar" class="btn btn-outline-warning">Limpar</div>	
				</div>
				
			</form>
			<div id="resposta"></div>
		</div>	
	</div>
</div>

<?php 

	if($_GET && isset($_GET['produto']))
	{
		echo '<script> var cod = '.$_GET["produto"].'; </script>';
	}

?>

<script src="js/jquery-3.5.1.js"></script>
<script>
	
	document.getElementById("txtID").value = cod;
	console.log(cod);
	
	//debuga = $('#resposta');
//	enviar = $('#frmProduto');
//	
//	function carregando(datas)
//	{
//		debuga.empty().html('Carregando...');
//	}
//	
//	function sucesso(datas)
//	{
//		debuga.empty().html('<pre>'+datas+'</pre>');
//		$('#txtID').val($('#idGerado').text());
//	}
//	
//	function sucessoPesquisa(datas){
//        debuga.empty().html(datas);
//        $("#txtID").val($("#idProduto").text());
//
//        $("#txtNome").val($("#nomeProduto").text());
//        $("#txtDesc").val($("#descProduto").text());
//		$("#txtValor").val($("#valorProduto").text());
//		$("#txtData").val($("#dataProduto").text());
//		$("#txtQtd").val($("#qtdProduto").text());
//		$("#txtCategoria").val($("#categoriaProduto").text());
//        $("#txtStatus").val($("#statusProduto").text());
//        $("#txtObs").val($("#obsProduto").text());
//    }
//	
//	function errosend(datas)
//	{
//		debuga.empty().html('Erro ao enviar os dados.');
//	}
//	
//	enviar.submit(function(){
//		return false;
//	})
//	
//	$.ajaxSetup({
//		type:		'POST',
//		beforeSend:	carregando,
//		error:		errosend,
//		success:	sucesso
//	})
//	
//	$("#btoAlterar").click(function(){
//		console.log("Cliquei no botão btoAlterar");
//		
//		action = 'prodAlterar.php';
//		$.ajax({
//			url:	action,
//			data:{
//				txtID:	$("#txtID").val(),
//				txtIDloja: $("#txtIDloja").val,
//				txtNome: $("#txtNome").val(),
//				txtDescricao: $("#txtDescricao").val(),
//				txtImg: $("#base64Code").val(),
//				txtValor: $("#txtValor").val(),
//				txtTamanho: $("#txtTamanho").val(),
//				txtQtd: $("#txtQtd").val(),
//				txtTipo: $("#txtTipo").val(),
//				txtCategoria: $("#txtCategoria").val(),
//				txtStatus: $("#txtStatus").val(),
//				txtObs: $("#txtObs").val()
//			}
//		})
//	})
//	
//	$("#btoPesquisar").click(function(){
//		console.log("Cliquei no botão btoPesquisar");
//		
//		action = 'produto_pesquisar.php';
//		
//		$.ajax({
//			url:	action,
//			data:{
//				txtID:	$("#txtID").val()
//			},
//			success:sucessoPesquisa
//		})
//	})
//	
//	$("#btoExcluir").click(function(){
//		console.log("Cliquei no botão btoExcluir");
//		
//		action = 'produto_excluir.php';
//		
//		$.ajax({
//			url:	action,
//			data:{
//				txtID:	$("#txtID").val()
//			}
//		})
//		
//		$("#txtID").val("");
//        $("#txtNome").val("");
//		$("#txtDescricao").val("");
//        $("#txtImg").val("");
//        $("#txtCategoria").val("");
//        $("#txtValor").val("");
//		$("#txtQtd").val("");
//		$("#txtTamanho").val("");
//		$("#txtTipo").val("");
//        $("#txtStatus").val("");
//        $("#txtObs").val("");
//	})
//	
	$("#btoLimpar").click(function(){
		console.log("Cliquei no botão btoLimpar");
		
		$("#txtID").val("");
        $("#txtNome").val("");
		$("#txtDescricao").val("");
        $("#txtImg").val("");
        $("#txtCategoria").val("");
        $("#txtValor").val("");
		$("#txtQtd").val("");
		$("#txtTamanho").val("");
		$("#txtTipo").val("");
        $("#txtStatus").val("");
        $("#txtObs").val("");
		$("#txtImagem").val("");
		$("#txtCaminhoImg").val("");
		document.getElementById("imagem").src = "";
	})
//	
//	$("#btoPesq").click(function(){
//		location.href  = "principal_parceiro.php?tela=Perfil";
//	})
	
	
	
	
</script>