<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>FitFind</title>
<link rel="stylesheet" href="script.css">	
<link rel="stylesheet" href="estilo-ana.css">	
</head>
	
	
	<?php include_once("paginaPrincipal_topo_gabi.php")?>
	
	
	<header class="rodape02">	
	<div class="container-fluid">
	<h2 class="tit p-3" style="text-align: center;font-size:40px">Dúvidas Frequentes</h2>
		<div class="row">
		
		<div class="col-md-9" style="margin-left: 200px" id="accordion">

  <div class=" card">
    <div class="card-header">
      <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
        <b class="duvidas" style="font-size:20px">Como faço um pedido?</b>
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
      <div class="card-body">
        1- Selecione o produto que deseja;
		  
		2- Escolha o tamanha, cor e quantidade;
		  
		3- Clique em comprar e seu produto será adicionado o produto na sacola de compras;
		  
		4- Caso queira comprar mais itens selecione continuar comprando;
		  
		5- Caso deseje finalizar a compra clique em "Finalizar compra"
		  
		6- Você pode excluir os itens que não queira mais;
		 
		7- Após conferir, clique em “Finalizar compra”. Caso seja necessário, faça o login ou cadastre-se no site;
		  
		8- Preencha os dados de entrega e pagamento, confira os dados da compra e clique em “Finalizar compra” novamente;
		  
		9- Você poderá adicionar o frete;
		  
		10- Pronto! Você concluiu a compra! Agora é só aguardar a confirmação do pagamento.
      </div>
    </div>
  </div>

  <div class="card mt-4">
    <div class="card-header">
      <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
       <b class="tit" style="font-size:20px">Como funciona as entregas?</b>
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
        Você pode selecionar o frete que achar melhor em sua compra, para acompanhar o pedido faça o login e clique na página "Meus pedidos".
      </div>
    </div>
  </div>

  <div class="card mt-4">
    <div class="card-header">
      <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
        <b class="tit" style="font-size:20px">Como troco um produto?</b> 
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
       Faça o login na sua conta. Acesse a página “Meus pedidos” e clique em “Trocas e Devoluções”;
		Clique no botão “Veja seus pedidos disponíveis para troca e devolução”;
		Selecione os pedidos e produtos desejados para troca;
		Selecione o tipo de troca;
		Seu pedido de troca foi concluído com sucesso. 
      </div>
    </div>
  </div>

			 <div class="card mt-4">
    <div class="card-header">
      <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
         <b class="tit" style="font-size:20px">Como faço para alterar a senha?</b>
      </a>
    </div>
    <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
        Vá para a página de login;
		Clique no botão “Esqueci minha senha”;
		Digite seu e-mail cadastrado no site e você receberá as instruções pelo e-mail.
      </div>
    </div>
  </div>
	
		<div class="card mt-4">
    <div class="card-header">
      <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFive">
        <b class="tit" style="font-size:20px">Como devolvo um produto?</b>
      </a>
    </div>
    <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
        Faça o login na sua conta
		Acesse a página “Meus pedidos” e clique em “Trocas e Devoluções”;
		Clique no botão “Veja seus pedidos disponíveis para troca e devolução”;
		Selecione os pedidos e produtos desejados para devolução;
		Clique no botão de devolução e siga os passos que serão mostrados no site para reembolso ou estorno;
		Se atente ao e-mail que você receberá.
      </div>
    </div>
  </div>
			
				<div class="card mt-4">
    <div class="card-header">
      <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseSix">
         <b class="tit" style="font-size:20px">Como cancelar um produto?</b>
      </a>
    </div>
    <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
      <div class="card-body">
        Antes da aprovação do pagamento: se a compra tem forma de pagamento boleto bancário e o pagamento não foi feito, basta desconsiderar o boleto bancário, pois se o pagamento não for efetivado no prazo, o pedido é automaticamente cancelado;
		Após a aprovação do pagamento: pedimos que recuse o recebimento do pedido, assim que o pedido chegar em nossos estoques (produtos Fit Find) e no estoque do parceiro daremos sequência a devolução do valor pago.
      </div>
    </div>
  </div>
			
			
</div>
			

		
		
		</div>
	
	</div>
		
		
	
	
	<br>
	<br>
	<br>
	</header>
<?php 
	
			include_once("rodape.php");
	
?>
		<script src="js/bootstrap.bundle.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	
<body>
</body>
</html>