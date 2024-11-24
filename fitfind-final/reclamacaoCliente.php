<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<link href="estilo.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
	<div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1 class="tit">Reclamação do cliente</h1>
               
				
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
			
				<p><div class="row">
			<div class="col-sm-6" >
		  		<p><label for="txtIDLoja">Código da loja</label><br>
				<input type="number" placeholder="Informe ID:" class="form-control" name="txtIDLoja" id="txtIDLoja" ></p>
			</div>
			
			<div class="col-sm-6" >
		  		<p><label for="txtIDCliente">Código do cliente</label><br>
				<input type="number" placeholder="Informe ID:" class="form-control" name="txtIDCliente" id="txtIDCliente" ></p>
			</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12" >
		 <label for="txtTipo">Tipo: </label><br>
			   <select name="txtTipo" id="txtTipo" class="form-control">
					<option value="Entrega">Entrega</option>
					<option value="Lentidão">Lentidão</option>
				    <option value="Qualidade">Qualidade</option>
			   </select>
				</div>
			</div>
			
			 <p><div class="row">
			<div class="col-sm-12" >	
		<label for="txtMensagem">Mensagem</label><br>
		<textarea name="txtMensagem" id="txtMensagem" cols="30" rows="5" class="form-control" ></textarea></p></div></div>
			<hr>
			
			
			<div>
			<button type="submit" formaction="reclamacaoEnviar.php" class="btn btn-success">Enviar</button>
		 	</div>
			
			
</body>
</html>