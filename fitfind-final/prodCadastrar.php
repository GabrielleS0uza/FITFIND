<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
		<?php 
	include_once("conexao.php");
	
	if($_POST)
	{
		
		$idLoja = $_POST['txtIDloja'];
		$nome = $_POST['txtNome'];
		$descricao = $_POST['txtDescricao'];
		$valor = $_POST['txtValor'];
		$tamanho = $_POST['txtTamanho'];
		$status = $_POST['txtStatus'];
		$categoria = $_POST['txtCategoria'];
		$tipo = $_POST['txtTipo'];
		$obs = $_POST['txtObs'];
		$img = "";
		
		if($_FILES["txtImagem"]["tmp_name"]==null)
        {
            echo "<h2>Erro ao inserir, é necessário inserir uma foto.</h2>";
        }
        else
        {
        
            if(isset($_FILES['txtImagem']))
            {
                $arquivo = $_FILES['txtImagem'];

            }
			else
			{
                echo "Imagem deve ser informada";
                return;
			}
		
		
		
	
	$sql = $conn->prepare("insert into produto
	(codigo_loja,nome_produto,desc_produto,valor_produto,categoria_produto,tamanho_produto,status_produto,tipo_produto,obs_produto,img_produto)
	values
	(:codigo_loja,:nome_produto,:desc_produto,:valor_produto,:categoria_produto,:tamanho_produto,:status_produto,:tipo_produto,:obs_produto,:img_produto)");
	
	$sql->execute(array(
	':codigo_loja'=>$idLoja,
	':nome_produto'=>$nome,
	':desc_produto'=>$descricao,
	':valor_produto'=>$valor,	
	':categoria_produto'=>$categoria,
	':tamanho_produto'=>$tamanho,
	':status_produto'=>$status,	
	':tipo_produto'=>$tipo,
	':obs_produto'=>$obs,
	':img_produto'=>$arquivo["name"],	
	));
	
		//echo $sql->rowCount();
            if($sql->rowCount() == 1)
            {
                echo "<p>Dados cadastrados com sucesso</p>";
                echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";

                //estrutura de envio da imagem

                $pasta_dir = 'img/'.$conn->lastInsertId().'/';

                if(!file_exists($pasta_dir))
                {
                    mkdir($pasta_dir);
                }

                $img = $pasta_dir . $arquivo["name"];

                move_uploaded_file($arquivo["tmp_name"],$img);

                //fim da estrutura

            }
        }
    }
    else
    {
        header("Location:produto.php");
    }
    ?>
    <a href="principal_parceiro.php" class="btn btn-dark">voltar</a>
</body>
</html>