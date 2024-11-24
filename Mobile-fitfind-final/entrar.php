<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Documento sem título</title>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="estilo2.css">
	<link rel="stylesheet" href="estilo-ana.css">
</head>

<body class="coloe">
	<?php 
	
		ob_start();
		
	
		include_once("conexao.php");
		
		$usuariologado = "";
		$tentouentrar = 0;
	
		if($_POST)
		{
			$tentouentrar = 1;
			
			$login = $_POST['txtEmail'];
			$senha = $_POST['txtSenha'];
		}
	?>
	
	<div class="container">
	<div class="row">
			<div class="col-12">
				<a href="TelaPrincipal.php">
					<img src="img logo/FIT FIND.png"  width="120" class=" mt-3" style="margin-left:1px" >
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12 mt-3">
							<p style="color: gray">Use seu e-mail e senha para entrar.</p>
</div>
	</div>
	
	
			
	</div>
	</div>
	
	<div class="container">
	
	<div class="col-12  ">
						<img class="rounded-3" src="IMG11.png"  width="100%" >

	</div>
		<form action="" method="post">
		<div class="container container rounded border mt-2" style="background-color: white;">
				
							<div class="row">

								<div class="col-12 mt-3">
									<label for="txtEmail" style="color: #BC7ED8" class="label"><b style="margin-left:140px">Login</b></label>
									<input type="text" name="txtEmail" id="txtEmail" class="form-control">
								</div>

							</div>
							<br>
							<div class="row">

								<div class="col-12 mt-2">
									<label for="txtSenha" style="color: #BC7ED8" class="label"><b style="margin-left:140px">Senha</b></label><br>
									<input type="password" name="txtSenha" id="txtSenha" class="form-control">
								</div>

							</div>
							<br>

							<button formaction="entrar.php?tela=cliente" style="background-color: #BC7ED8; color: white; font-weight: 700;" class="form-control gradient"><span style="font-size: 0.75rem">ENTRAR</span></button>

							<br>

							<p style="text-align: center; color: gray; font-weight: 600">Não tem uma conta? <a href="login_m1.php" style="text-decoration: none"><span style="color: #BC7ED8" class="gradient text-gradient">Criar uma conta</span></a></p>
				</form>
	</div>
	
	<?php 

							if($_POST)
								if($_GET['tela'] == "cliente")
							{
							$sql = $conn->query("select * from cliente 
								where
									email_cliente = '".$login."' and
									senha_cliente = '".$senha."'");

								foreach($sql as $linha)
								{
									$usuariologado = $linha['email_cliente'];
									session_start();

									$_SESSION['clienteSistemaID'] = $linha['codigo_cliente'];
									$_SESSION['clienteSistemaLogin'] = $linha['email_cliente'];
									$_SESSION['clienteSistemaNome'] = $linha['nome_cliente'];
									$_SESSION['tipo'] = 'cliente';
								}
							}
							?>

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
										echo "Usuário seja bem vindo";
										
										
										if($_GET['tela'] == "cliente")
										{
											header("Location:perfil02.php?tela=cliente");
										}
										ob_end_flush();
									}
								}
                            }
                            ?>
	
</body>
</html>