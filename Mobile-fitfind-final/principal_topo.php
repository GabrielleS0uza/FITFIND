<div class="row">
	<div class="col-sm-12">
		<div class="row p-3 topo ">
			<div class="col-sm-2">
				<div class="name-pag">
					<?php if($_GET['tela'] == "Contrato")
						{
							echo('<span class="grey">Página</span> / Contrato');
						}
						elseif($_GET['tela'] == "Dados")
						{
							echo('<span class="grey">Página</span> / Dados');
						}
						elseif($_GET['tela'] == "Reclame")
						{
							echo('<span class="grey">Página</span> / Reclame');
						}
						elseif($_GET['tela'] == "Produto")
						{
							echo('<span class="grey">Página</span> / Produto');
						}
						else
						{	
							echo('<span class="grey">Página</span> / Home');
						}
					?>
				</div>
			</div>
			
			<div class="col-sm-6 "></div>

			<div class="col-sm-3 responsive">
				<div class="nome-loja">
					<?php echo '<div class="nome-loja-2">'.$lojaLogadoNome.'</div>'; ?>
				</div>
			</div>
			
			<div class="col-sm-1">
				<div class="right">	
					<button type="button" class="btn" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content=" <div>Gerenciador da loja</div> <?php echo '<div><b>'.$lojaLogadoNome.'</b></div>'; echo '<div>'.$lojaLogadoLogin.'</div>';?> <a href='sessaoLogoff.php'><div>Entrar com uma conta diferente</div></a> <a href='paginaPrincipal.php'><div>Sair</div></a>">

						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
							<path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
						</svg>
					</button>
				</div>
			</div>

		</div>
	</div>
</div>

