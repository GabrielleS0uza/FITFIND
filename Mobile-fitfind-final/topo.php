<div class="header">

	<?php 
	
	if($_GET['tela'] == "cliente")
	{
		echo '<div>Cliente</div>';
		echo '<div class="itemMenu" >Usuário:'.$clienteLogadoID." - ".$clienteLogadoLogin.'</div>';
		
	}
	else if($_GET['tela'] == "parceiro")
	{
		echo '<div>Parceiro</div>';
		echo '<div class="itemMenu" >Usuário:'.$lojaLogadoID." - ".$lojaLogadoLogin.'</div>';
	}
	
	?>
</div>



