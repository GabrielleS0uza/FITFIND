<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Documento sem título</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="estilo-ana.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
    </head>

<body>
	
	<?php
 
        //include_once("controle_sessao.php");
    ?>
    <!--Topo-->
    <div class="container">
        <?php include_once("paginaPrincipal_topo_gabi.php"); ?>
    </div>
    
    <!--Conteúdo-->
    <div class="container-fluid">
        <div class="row">
            <!--Formulários-->
            <div class="col-sm-12">
                <?php
                if($_GET && isset($_GET['tela']))
                {
                    if($_GET['tela'] == "produto")
                    {
                        include_once("ListaProdutos.php");
                    }
					if($_GET['tela'] == "categoria")
                    {
                        include_once("categorias.php");
                    }
					if($_GET['tela'] == "perfil")
                    {
                        include_once("perfil.php");
                    }
					if($_GET['tela'] == "reclame")
                    {
                        include_once("reclamacaoCliente.php");
                    }
                    else
                    {
                        echo "Abrir a tela ".$_GET['tela'];
                    }  
                }
                else
                {
                    include_once("principal.php");
                }
                ?>
            </div>
        </div>
    </div>
    
    <!--Menu-->
    
    <?php include_once("Menu.php"); ?>

   
	<!--inserindo os scripts da tela-->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

    <script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
</body>
</html>