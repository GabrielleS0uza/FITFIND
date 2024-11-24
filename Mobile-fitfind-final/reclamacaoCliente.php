<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Documento sem título</title>
	<link href="estilo.css" rel="stylesheet">
		<link href="estilo-ana.css" rel="stylesheet">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="coloe">


            <div class="container">
      			<div class="row">
               <div class="col-12 mt-3"> <b class="tit" style="font-size: 25px; text-align: center;">Reclamação do cliente</b></div>
               
			</div>	
			</div>	
	
	
			
	
	        <div class="  container rounded border mt-4" style="background-color: white">         
            <div class="row">
            <div class="col-6 mt-2" >
                  <label for="txtID">ID</label>
                <input type="number" placeholder="Informe ID:" class="form-control border border-1" name="txtID" id="txtID" >
            </div>
				
				     <div class="col-6 mt-2" >     
                <label for="txtData">Data de Cadastro</label>
                <input type="date"  name="txtData" id="txtData" class="form-control border border-1">
            </div>
				
			   </div>
				
				
				 <div class="row mt-3">
            <div class="col-6" >
                  <label for="txtIDLoja">Código da loja</label>
                <input type="number" placeholder="Informe ID:" class="form-control border border-1" name="txtIDLoja" id="txtIDLoja" >
            </div>
            
            <div class="col-6" >
                  <label for="txtIDCliente">Código do cliente</label>
                <input type="number" placeholder="Informe ID:" class="form-control border border-1" name="txtIDCliente" id="txtIDCliente" >
            </div>
            </div>
				
				<div class="row mt-3">
                <div class="col-12" >
         <label for="txtTipo">Tipo: </label><br>
               <select name="txtTipo" id="txtTipo" class="form-control border border-1">
                    <option value="Entrega">Entrega</option>
                    <option value="Lentidão">Lentidão</option>
                    <option value="Qualidade">Qualidade</option>
               </select>
                </div>
            </div>
			
			 <div class="row mt-3">
            <div class="col-12" >    
        <label for="txtMensagem">Mensagem</label><br>
        <textarea name="txtMensagem" id="txtMensagem" cols="30" rows="5" class="form-control border border-1" ></textarea></div></div>
          <br>
            
				   <div>
            <button type="submit" formaction="reclamacaoEnviar.php" class="enviar rounded border border-1">Enviar</button>
             </div>
			
				<br>
			
			  </div>

	
        <?php include_once("Menu.php"); ?>

	
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	
</body>
</html>