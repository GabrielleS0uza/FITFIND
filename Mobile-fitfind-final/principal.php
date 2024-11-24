<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>FitFind</title>
<link rel="stylesheet" href="script.css">	
<link rel="stylesheet" href="estiloo.css" type="text/css" >
<link rel="stylesheet" href="estilo-ana.css">
	
 
    <meta charset="utf-8">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Touch enabled jQuery plugin that lets you create beautiful responsive carousel slider.">
    <meta name="author" content="David Deutsch">


    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Yeah i know js should not be in header. Its required for demos.-->

    <!-- javascript -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>	
</head>

<body>
	
	<?php include_once('conexao.php');?>
	
 	<?php include_once("paginaPrincipal_topo_gabi.php"); ?>
	<!-- Carousel -->
		<div id="demo" class="carousel slide" data-bs-ride="carousel" >

		  <!-- Indicators/dots -->
		  <div class="carousel-indicators">
			<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
			<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
		  </div>

		  <!-- The slideshow/carousel -->
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="banner01.png" alt="banner1" class="d-block img1" style="width:100%">
			  <div class="carousel-caption">
			
				
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="banner02.png" alt="banner2" class="d-block img1" style="width:100%">
			  <div class="carousel-caption">
				
			  </div> 
			</div>
			<div class="carousel-item">
			  <img src="banner03.png" alt="banner3" class="d-block img1" style="width:100%">
			  <div class="carousel-caption">
				
			  </div>  
			</div>
		  </div>
			
			 <!-- Left and right controls/icons -->
		  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </button>
			</div>



</div>
	
	<!--DESTAQUES-->

	<?php
    
        $sql = $conn->query("select * from produto where destaque_produto=1");
        
        
        echo("
        
        <div class='container'>
        	<div class='row' style='margin-left: 5px'></div>      

			<div class='row'>
				<div class='col-md-12 p-2'>
					<div class='p-2 text-center' id='margint'>
						<h4 >CONFIRA A NOSSA NOVA COLEÇÃO</h4>
					</div>    
				</div>
        
        ");
                
    
     echo(" <div class='owl-carousel' style='margin-left:5px'> ");
        foreach($sql as $linha)
        {    
              
                    echo(" <div class='item'>
					<a href='produto.php?prod=". $linha['codigo_produto']."' style='color: black;''>
					<img src='img/".$linha['codigo_produto']."/".$linha['img_produto']."' width='100%' alt='teste'>");
                    echo("<div class='nomeProd'><p><b>Cores clássicas</b>- ".$linha['nome_produto']." a partir de $".$linha['valor_produto']."</p></div>");
                    echo("</a>");
                echo("</div>");
           
        }
	      
	 echo("</div>");
            echo("</div>");
        echo("</div>");
    
    echo (" ")



   ?>
	

	
	<!-- SUSTENTABILIDADE -->
	 
       <div class="container p-2">
			<div class="row" style="margin-left: 5px"></div> 	 
			 
			<div class="row">
		  		<div class="col-md-12 p-2">
					<div class=" p-2 text-center" id="margint">
						<h4 >LUTANDO POR UMA MODA MAIS SUSTENTÁVEL</h4> 
					</div>	
				</div>
				<div class="col-md-12  text-center p-3" style="margin-left: 0px">
					<img src="sust01.jpg"  width="100%">
				</div> 
      		</div>
		</div>
 
	<!-- TENDENCIA -->
	
	<?php
	
		$sql = $conn->query("select * from produto where tendencia_produto=1");
		
		
		echo('
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-2">
					<div class=" p-2 text-center" id="margint">
						<h4 >TENDÊNCIAS DA VEZ</h4> 
					</div>	
				</div>
		
		');

		echo(" <div class='owl-carousel' style='margin-left:5px'> ");
        foreach($sql as $linha)
        {    
              
			echo(" <div class='item'>
			<a href='produto.php?prod=". $linha['codigo_produto']."' style='color: black;''>
			<img src='img/".$linha['codigo_produto']."/".$linha['img_produto']."' width='100%' alt='teste'>");
			echo("<div class='nomeProd'><p><b>Cores clássicas</b>- ".$linha['nome_produto']." a partir de $".$linha['valor_produto']."</p></div>");
			echo("</a>");
			echo("</div>");
           
        }
	      
		echo("</div>");
				echo("</div>");
			echo("</div>");
		echo (" ")

	?>
	
	<!-- MODA INFANTIL -->
	<?php
	
		$sql = $conn->query("select * from produto where infantil_produto=2");
		
		echo('
		
		<div class="container">

			<div class="row" style="margin-left: 5px"></div> 	 

			<div class="row">
				<div class="col-md-12 p-2">
					<div class=" p-2 text-center" id="margint">
					<h4 >O MELHOR DA MODA INFANTIL</h4> 
						 </div>
		
					</div>	
				</div>
		
		');
				
	
	
		echo(" <div class='owl-carousel' style='margin-left:5px'> ");
        foreach($sql as $linha)
        {    
              
                    echo(" <div class='item'>
					<a href='produto.php?prod=". $linha['codigo_produto']."' style='color: black;''>
					<img src='img/".$linha['codigo_produto']."/".$linha['img_produto']."' width='100%' alt='teste'>");
                    echo("<div class='nomeProd'><p> ".$linha['nome_produto']." a partir de $".$linha['valor_produto']."</p></div>");
                    echo("</a>");
                echo("</div>");
           
        }
	      
	 echo("</div>");
            echo("</div>");
        echo("</div>");
    
    echo (" ")

	?>
	
	<!-- MODA JUVENIL -->

	<?php
	
		$sql = $conn->query("select * from produto where juvenil_produto=2");
		
		echo('
		
		<div class="container">

			<div class="row" style="margin-left: 5px"></div> 	 

			<div class="row">
				<div class="col-md-12 p-2">
					<div class=" p-2 text-center" id="margint">
					<h4 >MODA JUVENIL</h4> 
						 </div>
		
					</div>	
				</div>
		
		');
	
		echo(" <div class='owl-carousel' style='margin-left:5px'> ");
        foreach($sql as $linha)
        {    
              
                    echo(" <div class='item'>
					<a href='produto.php?prod=". $linha['codigo_produto']."' style='color: black;''>
					<img src='img/".$linha['codigo_produto']."/".$linha['img_produto']."' width='100%' alt='teste'>");
                    echo("<div class='nomeProd'><p> ".$linha['nome_produto']." a partir de $".$linha['valor_produto']."</p></div>");
                    echo("</a>");
                echo("</div>");
           
        }
	      
	 echo("</div>");
            echo("</div>");
        echo("</div>");
    
    echo (" ")

	?>

	
 
	<?php 

		include_once("ListaProdutos.php");


	?>
	

	

	
		<!--Js Bootstrap-->
	<script src="js/bootstrap.bundle.js"></script>
	<script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 10,
        loop: true,
        responsive: {
          0: {
            items: 2
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })
    </script>
	
	

<body>
</html>	