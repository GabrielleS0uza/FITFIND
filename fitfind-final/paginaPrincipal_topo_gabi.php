<div class="container-fluid form topo01">
	<div class="row">
		<div class="col-1 p-2"></div>
		<div class="col-8 p-2"> <p class="titulo"><b>Ganhe</b> <b class="tit">%15 OFF</b> na primeira compra no APP</p></div>
		<div class="col-2 p-2 "><p><a href="/"  class="baixe">Baixe agora</a></p></div>
		<div class="col-1 p-2 responsive768"></div>
	</div>
</div>
	
<header class="topo02">
	<div class="container-fluid ">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-2">
				<a href="principal.php">
					<img src="img logo/FIT FIND.png" alt="" class="logo-gabi p-0">
				</a>
			</div>
			<div class="col-5">
				<form>
					<label for="txtPesquisar"></label>
					<input class="form-control" type="text" placeholder="Pesquisar">
				</form> 
			</div>
			<div class="col-1 ">
				<label for="txtPesquisar"></label>
				<button class="btn btn-outline-secondary mt-4" type="button">&#128269;</button>
			</div>
			<?php
				try
				{
					if(isset($lojaLogadoID)){
													
						if($sql->rowCount() == 1 )
						{
							foreach($sql as $linha)
							{							
								echo('
							<div class="col-2">
								<div class="entre">
									<img src="icones/icon2.png" width="50px">
									<a href="login.php" class="none">Entre ou cadastre-se</a>
								</div>
							</div>
							');
							}
						}
					}
					else{
						
						echo('
							<div class="col-2">
								<div class="entre">
									<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
										<path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z"/>
									</svg>
									<a href="sacola_compras.php" class="none">Minhas compras</a>
								</div>
							</div>
							');
					}
				}
				catch(PDOException $e)
				{
					echo("Erro".$e->getMessage());
				}
			?>
			<div class="col-md-1">

			</div>
		</div>
	</div>


	<div class="container-fluid mt-5">
		<div class="row pb-4">
			<div class="col-1"></div>
			<div class="col mouse text-center">Ofertas</div>
			<div class="col text-center" id="date"><a class="none mouse" href="listaProdutos.php?ordem=data">Novidades</a></div>
			<div class="col text-center" id="fem"><a class="none mouse" href="listaProdutos.php?filtro=1">Feminino</a></div>
			<div class="col text-center" id="masc"><a class="none mouse" href="listaProdutos.php?filtro=2">Maculino</a></div>
			<div class="col text-center" id="inf"><a class="none mouse" href="listaProdutos.php?filtro=3">Infantil</a></div>
			<div class="col text-center" id="esp"><a class="none mouse" href="listaProdutos.php?filtro=4">Esportivo</a></div>
			<div class="col text-center" id="mar"><a class="none mouse" href="listaProdutos.php?filtro=5">Lojas</a></div>
			<div class="col-1"></div>
		</div>
	</div>
</header>
	<div class="form2"></div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</body>
</html>