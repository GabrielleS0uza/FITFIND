<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

	<link rel="stylesheet" href="estiloperfil.css">
	
<body>
	<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1152.7494741380938!2d-46.5279934274067!3d-23.469442683652336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef5599083f36f%3A0x1fb9a50d547be9e3!2sCentro%20-%20Guarulhos!5e0!3m2!1spt-BR!2sbr!4v1660323543211!5m2!1spt-BR!2sbr" width=100% height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
	
	<?php 
		include_once("conexao.php");
		echo ('<h2 class="titulo"> Olá, '.$lojaLogadoNome.'!</h2>');
		echo ('<span style="color: grey">Esta área é dedicada à você e sua loja! Aqui, você pode ver seus produtos e os editar.</span>');

		$sql = $conn->query("select * from produto where codigo_loja=".$lojaLogadoID);	

		foreach($sql as $linha)
			{	
				echo 
				'<div class="col-md-6 col-lg-4 col-xl-3 p-4"> 
					<div >
						<img src="img/'. $linha['codigo_produto'].'/'.$linha['img_produto'].'" alt="" class="imagem">

						<br>
						<h5 style="padding: 1px; font-size: 17px;">'.$linha['nome_produto'].'</h5>

						<p class="preco">Por: R$ '.$linha['valor_produto'].'</p>

						<a href="principal_parceiro.php?tela=Pesq&produto='. $linha['codigo_produto'].'" style="text-decoration: none;"><div class="botao border border-2 rounded"  > <b class="mouse none">EDITAR</b> </div></a>

					</div>
				</div>';
			}


	?>
			
	
	
	
</body>
</html>