<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>FitFind</title>
	<link rel="stylesheet" href="estilo-ana.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>	
	<?php include_once("conexao.php") ?>
	<?php include_once("sessaoControle.php") ?>		
</head>

<body class="coloe">

	<div class="container"style="background-color: white">
		<div class="row" >
			<div class="col-10 mt-2" >
				<b style="font-size: 18px">Minha conta</b>
			</div>
			
			<div class="col-2 mt-2" >
				<a class="m" href="" >
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z"/>
					</svg>
				</a>
			</div>
		
		</div>
		<hr>
		<div class="row" >
			<div class="col-12 mt-2" ><p style="color: #B47CD4;font-size: 17px;">Olá <?php echo($clienteLogadoNome) ?></p> </div>
		</div>	
	</div>
	
	<div class="row mt-3"><b style="margin-left: 10px;">Minha conta</b></div>
	<div class="container mt-1"style="background-color: white">
		<div class="row">
		<hr>
		<div class="col-11 mt-1">
			<p><a class="mouse none" href="perfilDados.php" style="font-size:15px;" >
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/></svg>
			Meus dados</a></p>
		</div>
		<hr>
	</div>
	
	<div class="row" >
		<div class="col-11 mt-1"><p ><a class="mouse none" href="" style="font-size:15px;">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
			Meus pedidos</a></p>
		</div>
		<hr>
	</div>
	
	<div class="row" >
		<div class="col-11 mt-1"><p ><a class="mouse none" href="" style="font-size:15px;">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>	
			Endereços</a></p>
		</div>
		<hr>
	</div>
		
	<div class="row" >
		<div class="col-12 mt-1  border-bottom"><p ><a class="mouse none" href="" style="font-size:15px;">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/></svg>
			Redefinição de senha</a></p> 
		</div>
	</div>
		

	

	
		<div class="row mt-3"><b style="margin-left: 10px;">Outros serviços</b></div>
<div class="container mt-1"style="background-color: white">

		<div class="row" >
			<hr>	
		<div class="col-12 mt-1  border-bottom"><p ><a class="mouse none" href="" style="font-size:15px;">
			
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
  <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
</svg>
			
			Sustentabilidade</a></p>
		</div>
		
	</div>
		</div>
		
			<div class="row mt-3"><b style="margin-left: 10px;">Suporte</b></div>
<div class="container mt-1"style="background-color: white">
	<div class="row" >
		<hr>
		<div class="col-12 border-bottom"><p ><a class="mouse none" href="reclamacaoCliente.php" style="font-size:15px;">
			
			
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
  <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
</svg>
			
			Fale conosco</a></p>
		</div>
		
	</div>
</div>

<div class="row" >
		<div class="col-12 mt-2" > <a class="mouse none" href="TelaPrincipal.php" style="font-size:17px;color: #B47CD4; margin-left: 10px ">
			<b>Sair</b></a> </div>
		</div>	
	<br>
	<br>

        <?php include_once("Menu.php"); ?>

	
	
	

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</body>
</html>