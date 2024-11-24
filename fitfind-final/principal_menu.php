<div class="text-center fontColor">
	<img src="img logo/logo-FitFind.png" alt="teste01" class="img">
	<span class="geren-left">Gerenciador da Loja</span>
</div>
<hr class="horizontal dark mt-0 margin-bt">
<a href="principal_parceiro.php?tela=parceiro">
	<div class="itemMenu">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill icon-center" viewBox="0 0 18 18">
						<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
					</svg>
				</div>
			</div>
				
			<div class="col-sm-8 menu-left px-4">
				Home
			</div>
		</div>
	</div>
</a>

<?php include_once("pedidos-informaçoes.php");?>
<?php
try{
	if($quantItensLoja == 0){
		echo('
			<a href="principal_parceiro.php?tela=Pedidos"> 
				<div class="itemMenu">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-2">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill icon-center" viewBox="0 0 16 16">
								<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
								</svg>
							</div>
						</div>

						<div class="col-sm-8 menu-left px-4">
							Pedidos
						</div>

					</div>
				</div>
			</a>
		');
	}
	if($quantItensLoja > 0){
		echo('
			<a href="principal_parceiro.php?tela=Pedidos"> 
				<div class="itemMenu">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-2">
							<div class="icon">
								<div class="alerta-pedidos p-0">
									'.$quantItensLoja.'
								</div>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill icon-center" viewBox="0 0 16 16">
								<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
								</svg>
							</div>
						</div>

						<div class="col-sm-8 menu-left px-4">
							Pedidos
						</div>

					</div>
				</div>
			</a>
		');
	}
}
catch(PDOException $e)
{
	echo "Erro: ".$e->getMessage();
}
?>

<a href="principal_parceiro.php?tela=Perfil"> 
	<div class="itemMenu">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill icon-center" viewBox="0 0 16 16">
					  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
					</svg>					
				</div>
			</div>
			
			<div class="col-sm-8 menu-left px-4">
				Perfil
			</div>
		</div>
	</div>
</a>

<a href="principal_parceiro.php?tela=Dados"> 
	<div class="itemMenu">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill icon-center" viewBox="0 0 18 18">
					  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
					</svg>
				</div>
			</div>
			
			<div class="col-sm-8 menu-left px-4">
				Dados
			</div>
		</div>
	</div>
</a>
<a href="principal_parceiro.php?tela=Reclame"> 
	<div class="itemMenu">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill icon-center" viewBox="0 0 18 18">
					  <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"/>
					</svg>
				</div>
			</div>
			
			<div class="col-sm-8 menu-left px-4">
				Reclame
			</div>
		</div>
	</div>
</a>

<a href="principal_parceiro.php?tela=Produto"> 
	<div class="itemMenu">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill icon-center" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
					</svg>
				</div>
			</div>
			
			<div class="col-sm-8 menu-left px-4">
				Produto
			</div>
		</div>
	</div>
</a>

<a href="principal_parceiro.php?tela=Contrato"> 
	<div class="itemMenu">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
				<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square icon-center" viewBox="0 0 18 18">
					  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
					  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
					</svg>
				</div>
			</div>
			
			<div class="col-sm-8 menu-left px-4">
				Contrato
			</div>
		</div>
	</div>
</a>

