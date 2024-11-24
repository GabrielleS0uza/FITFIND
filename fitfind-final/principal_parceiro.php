<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="script.css">
	<title>Principal</title>
	<link href="css/dataTables.bootstrap5.min.css" rel="stylesheet">

	<link href="css/dataTables.bootstrap5.min.css">
</head>

<body>
	
	<?php include_once("sessaoControle.php");?>
	<?php 
	if($_SESSION['tipo'] != "parceiro"){
		header("Location:login.php");
	}
	?>
	<div class="container-fluid cor">
		<div class="row">
			
			<div class="col-sm-2 menu">
				<?php include_once("principal_menu.php") ?>			
			</div>
			
			<div class="col-sm-10">
				<div class="row">
					<?php include_once("principal_topo.php") ?>
				</div>
				<div class="row p-4 mb-0">
					<?php 			
					if($_GET && isset($_GET['tela']))
					{
						if($_GET['tela']=="Pedidos")
						{
							include_once("pedidos_lista.php");
						}
						elseif($_GET['tela']=="Perfil")
						{
							include_once("perfil_loja.php");
						}
						elseif($_GET['tela'] == "Dados")
						{
							include_once("frm_loja_geren.php");
						}
						elseif($_GET['tela'] == "Reclame")
						{
							include_once("frm_reclameLoja_fabio01.php");
						}
						elseif($_GET['tela'] == "Produto")
						{
							include_once("frm_produto.php");
						}
						elseif($_GET['tela'] == "Contrato")
						{
							include_once("lista_frm_contrato.php");
						}
						elseif($_GET['tela']=="Pesq")
						{
							include_once("produtoPesq.php");
						}
						else
						{	
							include_once("principal_home.php");
						}
					}
					else
						{
							echo ("Abrir a tela ".$_GET['tela']);
						}
					?>
				</div>
			</div>	
		</div>
	</div>
	
	<script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
	
	<script>
		var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
		var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		  return new bootstrap.Popover(popoverTriggerEl,{html: true})
		})		
	</script>
	
	
	
</body>
</html>