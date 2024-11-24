<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FitFind</title>
</head>

	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet"> 
	
<body>

	<?php 
	
		ob_start();
		
	
		include_once("conexao.php");
		
		$usuariologado = "";
		$tentouentrar = 0;
	
		if($_POST)
		{
			$tentouentrar = 1;
			
			$login = $_POST['txtLogin'];
			$senha = $_POST['txtSenha'];
		}
	?>
	
	
	
		
	<div class="container">	
		<div class="row">
		
			
			<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
			<div class="col-sm-12 topo"></div>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><span style="font-family: 'Open Sans'">Cliente</span></button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><span style="font-family: 'Open Sans'">Parceiro</span></button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
					
					<div class="card-body">
						<form action="" method="post" class="">

							<br>

							<h3 style="color: #BC7ED8; font-weight: 700" class="font-weight-bold text-gradient gradient">Bem Vindo!</h3>
							<p style="color: gray">Use seu e-mail e senha para entrar.</p>

							<div class="row">

								<div class="col-sm-12">
									<label for="txtLogin" style="color: #BC7ED8" class="label"><b>Login</b></label>
									<input type="text" name="txtLogin" id="txtLogin" class="controleform">
								</div>

							</div>
							<br>
							<div class="row">

								<div class="col-sm-12">
									<label for="txtSenha" style="color: #BC7ED8" class="label"><b>Senha</b></label>
									<input type="password" name="txtSenha" id="txtSenha" class="controleform">
								</div>

							</div>
							<br>

							<button formaction="login.php?tela=cliente" style="background-color: #BC7ED8; color: white; font-weight: 700;" class="form-control gradient"><span style="font-size: 0.75rem">ENTRAR</span></button>

							<br>

							<p style="text-align: center; color: gray; font-weight: 600">Não tem uma conta? <a href="cliente.php" style="text-decoration: none"><span style="color: #BC7ED8" class="gradient text-gradient">Criar uma conta</span></a></p>

							<?php 

							if($_POST)
								if($_GET['tela'] == "cliente")
							{
							$sql = $conn->query("select * from cliente 
								where
									login_cliente = '".$login."' and
									senha_cliente = '".$senha."'");

								foreach($sql as $linha)
								{
									$usuariologado = $linha['login_cliente'];
									session_start();

									$_SESSION['clienteSistemaID'] = $linha['codigo_cliente'];
									$_SESSION['clienteSistemaLogin'] = $linha['login_cliente'];
									$_SESSION['clienteSistemaNome'] = $linha['nome_cliente'];
									$_SESSION['tipo'] = 'cliente';
								}
							}
							?>


						</form>
					</div>
					
					</div>
					<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
					
						<div class="card-body">
						<form action="" method="post" class="">
						
						<br>
						
						<h3 style="color: #BC7ED8; font-weight: 700" class="font-weight-bold text-gradient gradient">Bem Vindo!</h3>
							<p style="color: gray">Use seu e-mail e senha para entrar.</p>

							<div class="row">

								<div class="col-sm-12">
									<label for="txtLogin" style="color: #BC7ED8" class="label"><b>Login</b></label>
									<input type="text" name="txtLogin" id="txtLogin" class="controleform">
								</div>

							</div>
							<br>
							<div class="row">

								<div class="col-sm-12">
									<label for="txtSenha" style="color: #BC7ED8" class="label"><b>Senha</b></label>
									<input type="password" name="txtSenha" id="txtSenha" class="controleform">
								</div>

							</div>
							<br>
						
						<button formaction="login.php?tela=parceiro" class="form-control gradient" style="background-color: #BC7ED8; color: white; font-weight: 700;"><span style="font-size: 0.75rem">ENTRAR</span></button>
						
						<br>
						
						<p style="text-align: center; color: gray; font-weight: 600">Não tem uma conta? <a href="frm_loja.php" style="text-decoration: none"><span style="color: #BC7ED8" class="text-gradient gradient">Criar uma conta</span></a></p>
						
						<?php 
						
						if($_POST)
						{
							if($_GET['tela'] == "parceiro")
							{
							
								$sql = $conn->query("select * from loja 
										where
											email_loja = '".$login."' and
											senha_loja = '".$senha."'");

								foreach($sql as $linha)
								{
									$usuariologado = $linha['email_loja'];
									session_start();

									$_SESSION['lojaSistemaID'] = $linha['codigo_loja'];
									$_SESSION['lojaSistemaLogin'] = $linha['email_loja'];
									$_SESSION['lojaSistemaNome'] = $linha['nome_loja'];
									$_SESSION['tipo'] = 'parceiro';
								}
							}
						}
						?>
					</form>
					</div>
					</div>
				</div>
				
					
						<div>
                        
                            <?php
                            if($_POST)
							{
								if($_GET['tela'])
								{
									
									if($usuariologado == "" && $tentouentrar == 1)
									{
										echo "Usuário ou senha inválido";
									}
									else if($usuariologado != "" && $tentouentrar == 1)
									{
										echo "usuário seja bem vindo";
										
										
										if($_GET['tela'] == "cliente")
										{
											header("Location:principal.php?tela=cliente");
										}
										else if($_GET['tela'] == "parceiro")
										{
											header("Location:principal_parceiro.php?tela=parceiro");
										}
										ob_end_flush();
									}
								}
                            }
                            ?>
                            
                        </div>				
				
			<div class="col-sm-12 topo"></div>
			</div>
			<div class="col-md-6 bgimg oblique oblique-image me-n8"></div>
	</div>
	

	
		
		
		
	<script src="js/bootstrap.js"></script>
	<script src="js/boostrap_bundle.js"></script>
	
</body>
</html>