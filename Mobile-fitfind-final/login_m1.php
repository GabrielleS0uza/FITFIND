<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fitfind | Cadastro</title>
</head>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="estilo2.css">
	<link rel="stylesheet" href="estilo-ana.css">
	<style>
	
		#regForm {
		  margin: 70px auto;
		  width: 90%;
		  min-width: 300px;
		}

		/* Style the input fields */
		input {
		  padding: 10px;
		  width: 100%;
		  font-size: 15px;
		  border: 1px solid #aaaaaa;
		}

		/* Mark input boxes that gets an error on validation: */
		input.invalid {
		  background-color: #ffdddd;
		}

		/* Hide all steps by default: */
		.guia {
		  display: none;
		}

		/* Make circles that indicate the steps of the form: */
		.step {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbbbbb;
		  border: none;
		  border-radius: 50%;
		  display: inline-block;
		  opacity: 0.5;
		}

		/* Mark the active step: */
		.step.active {
		  opacity: 1;
		}

		/* Mark the steps that are finished and valid: */
		.step.finish {
		  background-color: #04AA6D;
		}
	
	</style>
	
<body class="coloe">

	<div class="col-12  ">
						<img class="" src="img12.png"  width="100%" >

	</div>
	<div class="container">
	
		
		<form id="regForm" class="card shadow rounded" style="padding: 2%" method="post" action="clienCadastro.php">

		<h1 style="color: #BC7ED8;">Cadastrar:</h1>

		<!-- One "tab" for each step in the form: -->
		<div class="guia"><p style="color: lightgray; text-align: center">Parte 1 de 4</p>
		  <p>Nome: </p>
		  <p><input placeholder="Nome..." name="txtNome" class="form-control" ></p>
		  <p>Email: </p>
		  <p><input placeholder="E-mail..." name="txtEmail" class="form-control" ></p>
		  <p>Telefone: </p>
		  <p><input type="text" placeholder="Telefone..." name="txtTelefone" class="form-control"></p>
		</div>

		<div class="guia"><p style="color: lightgray; text-align: center">Parte 2 de 4</p>
		  <p>Nascimento: </p>
		  <p><input type="date" class="form-control" name="txtNascimento"></p>
		  <p>CPF: </p>
		  <p><input placeholder="CPF..." class="form-control" name="txtCpf"></p>
		  <p>Gênero:</p>
		  <p><select class="form-control" name="txtGenero"><option value="M">Masculino</option> <option value="F">Feminino</option> <option value="O">Outro</option></select></p>
		</div>

		<div class="guia"><p style="color: lightgray; text-align: center">Parte 3 de 4</p>
		  <p>Rua: </p>
		  <p><input type="text" class="form-control" placeholder="Rua..." name="txtEndereço"></p>
		  <p>Bairro: </p>
		  <p><input type="text" class="form-control" placeholder="Bairro..." name="txtBairro"></p>
		  <p>Cidade: </p>
		  <p><input type="text" class="form-control" placeholder="Cidade..." name="txtCidade"></p>
		  <p>UF: </p>
		  <p><select name="txtUF" id="txtUF" class="form-control">
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">>Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul </option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul </option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina </option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
			<option value="DF">Distrito Federal </option></select></p>
			<p>CEP: </p>
			<p><input type="text" class="form-control" placeholder="CEP..." name="txtCep"></p>
		</div>
		

		<div class="guia"><p style="color: lightgray; text-align: center">Parte 4 de 4</p>
		  <p>Senha: </p>
		  <p><input placeholder="Senha..." class="form-control" name="txtSenha" type="password"></p>
		  <p><select name="txtStatus" id="" style="display: none"> <option value="ATIVO" selected>Inativo</option> <option value="INATIVO">Inativo</option> </select></p>
		  <p> <textarea name="txtObs" id="" cols="30" rows="10" style="display: none"></textarea> </p>
		  <p> <input type="text" value="M" name="txtTela" style="display: none"></p>
		
		</div>

		<div>
		  <div class="row">
			<div class="col-6"><button type="button" class="btn botao" style="width: 100%" id="prevBtn" onclick="nextPrev(-1)">Voltar</button></div>
			<div class="col-6"><button type="button" class="btn botao" style="width: 100%" id="nextBtn" onclick="nextPrev(1)" >Avançar</button></div>
		  </div>
		</div>

		<!-- Circles which indicates the steps of the form: -->
		<div style="text-align:center;margin-top:40px;">
		  <span class="step" style="background-color: #AA65B0"></span>
		  <span class="step" style="background-color: #AA65B0"></span>
		  <span class="step" style="background-color: #AA65B0"></span>
		  <span class="step" style="background-color: #AA65B0"></span>
		</div>

		</form> 
	
	</div>
	<div class="col-12">
		<img class="" style="position: fixed; bottom: 0px;" src="img12.png"  width="100%" >

	</div>
		<?php 

		if($_POST)						
		{
			$sql = $conn->query("select * from cliente where login_cliente = '".$login."' and senha_cliente = '".$senha."'");

			foreach($sql as $linha){
				$usuariologado = $linha['login_cliente'];
				session_start();

				$_SESSION['clienteSistemaID'] = $linha['codigo_cliente'];
				$_SESSION['clienteSistemaLogin'] = $linha['login_cliente'];
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
										echo "usuário seja bem vindo";
										
										
										if($_GET['tela'] == "cliente")
										{
											header("Location:perfil02.php?tela=cliente");
										}
										ob_end_flush();
									}
								}
                            }
                            ?>
	
	<script src="js/bootstrap.js"></script>
	<script>
	
	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
	  // This function will display the specified tab of the form ...
	  var x = document.getElementsByClassName("guia");
	  x[n].style.display = "block";
	  // ... and fix the Previous/Next buttons:
	  if (n == 0) {
		document.getElementById("prevBtn").style.display = "none";
	  } else {
		document.getElementById("prevBtn").style.display = "inline";
	  }
	  if (n == (x.length - 1)) {
		document.getElementById("nextBtn").innerHTML = "Enviar";
	  } else {
		document.getElementById("nextBtn").innerHTML = "Avançar";
	  }
	  // ... and run a function that displays the correct step indicator:
	  fixStepIndicator(n)
	}

	function nextPrev(n) {
	  // This function will figure out which tab to display
	  var x = document.getElementsByClassName("guia");
	  // Exit the function if any field in the current tab is invalid:
	  if (n == 1 && !validateForm()) return false;
	  // Hide the current tab:
	  x[currentTab].style.display = "none";
	  // Increase or decrease the current tab by 1:
	  currentTab = currentTab + n;
	  // if you have reached the end of the form... :
	  if (currentTab >= x.length) {
		//...the form gets submitted:
		document.getElementById("regForm").submit();
		return false;
	  }
	  // Otherwise, display the correct tab:
	  showTab(currentTab);
	}

	function validateForm() {
	  // This function deals with validation of the form fields
	  var x, y, i, valid = true;
	  x = document.getElementsByClassName("guia");
	  y = x[currentTab].getElementsByTagName("input");
	  // A loop that checks every input field in the current tab:
	  for (i = 0; i < y.length; i++) {
		// If a field is empty...
		if (y[i].value == "") {
		  // add an "invalid" class to the field:
		  y[i].className += " invalid";
		  // and set the current valid status to false:
		  valid = false;
		}
	  }
	  // If the valid status is true, mark the step as finished and valid:
	  if (valid) {
		document.getElementsByClassName("step")[currentTab].className += " finish";
	  }
	  return valid; // return the valid status
	}

	function fixStepIndicator(n) {
	  // This function removes the "active" class of all steps...
	  var i, x = document.getElementsByClassName("step");
	  for (i = 0; i < x.length; i++) {
		x[i].className = x[i].className.replace(" active", "");
	  }
	  //... and adds the "active" class to the current step:
	  x[n].className += " active";
	}
	
	</script>
	
</body>
</html>