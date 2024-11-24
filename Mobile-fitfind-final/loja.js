// JavaScript Document

$(function(){
    
    console.log("Entrou na pag.js");

    debuga = $("#resposta");
    enviar = $("#frmLoja");
    action = '';
	
	 function carregando(datas){
        debuga.empty().html('Carregando...');
    };

    function sucesso(datas){
        debuga.empty().html(datas);
        $("#txtId").val($("#IDGerado").text());
    };
	
	function sucessoPesquisa(datas){
        debuga.empty().html(datas);
        $("#txtId").val($("#idLoja").text());
		$("#txtData").val($("#dataLoja").text());
        $("#txtNome").val($("#nomeLoja").text());
        $("#txtAtv").val($("#AtvLoja").text());
        $("#txtTelefone1").val($("#telefone1Loja").text());
        $("#txtTelefone2").val($("#telefone2Loja").text());
        $("#txtStatus").val($("#statusLoja").text());
        $("#txtEmail").val($("#emailLoja").text());
        $("#txtSenha").val($("#senhaLoja").text());
		$("#txtEnd").val($("#endLoja").text());
		$("#txtCep").val($("#cepLoja").text());
        $("#txtBairro").val($("#bairroLoja").text());
		$("#txtCidade").val($("#cidadeLoja").text());
		$("#txtEstado").val($("#estadoLoja").text());
        $("#txtDiretor").val($("#diretorLoja").text());
		$("#txtCPF").val($("#cpfLoja").text());
		$("#txtEmailR").val($("#emailRLoja").text());
		$("#txtTelefoneR").val($("#telefoneRloja").text());

      
    }
	 function errosend(datas){
        debuga.empty().html('Erro ao enviar os dados');
    };

    enviar.submit(function(){
        return false;
    });

    $.ajaxSetup({
        type:           'POST',
        beforeSend:     carregando,
        error:          errosend,
        success:        sucesso
    });
	
	
	$("#btoCadastrar").click(function(){
        console.log("Cliquei no botão btoCadastrar");

      
        action = 'lojaInsert.php';

        $.ajax({
            url:    action,
            data:{
                txtNome: $("#txtNome").val(),
                txtAtv: $("#txtAtv").val(),
                txtTelefone1: $("#txtTelefone1").val(),
                txtTelefone2: $("#txtTelefone2").val(),
                txtStatus: $("#txtStatus").val(),
                txtEmail: $("#txtEmail").val(),
				txtSenha: $("#txtSenha").val(),
                txtEnd: $("#txtEnd").val(),
                txtCep: $("#txtCep").val(),
                txtBairro: $("#txtBairro").val(),
                txtCidade: $("#txtCidade").val(),
                txtEstado: $("#txtEstado").val(),
				txtDiretor: $("#txtDiretor").val(),
                txtCPF: $("#txtCPF").val(),
                txtEmailR: $("#txtEmailR").val(),
                txtTelefoneR: $("#txtTelefoneR").val(),
              
            }
        })

    });
	
	$("#btoPesquisar").click(function(){
        console.log("Cliquei no botão btoPesquisar");

        //action = 'teste.php';
        action = 'lojaSelect.php';

        $.ajax({
            url:    action,
            data:{
                txtId: $("#txtId").val()
            },
            success:sucessoPesquisa
        });
    });
		
	    $("#btoAlterar").click(function(){
        console.log("Cliquei no botão btoAlterar");

        //action = 'teste.php';
        action = 'lojaUpdate.php';

        $.ajax({
            url:    action,
            data:{
				txtId: $("#txtId").val(),
                txtNome: $("#txtNome").val(),
                txtAtv: $("#txtAtv").val(),
                txtTelefone1: $("#txtTelefone1").val(),
                txtTelefone2: $("#txtTelefone2").val(),
                txtStatus: $("#txtStatus").val(),
                txtEmail: $("#txtEmail").val(),
				txtSenha: $("#txtSenha").val(),
                txtEnd: $("#txtEnd").val(),
                txtCep: $("#txtCep").val(),
                txtBairro: $("#txtBairro").val(),
                txtCidade: $("#txtCidade").val(),
                txtEstado: $("#txtEstado").val(),
				txtDiretor: $("#txtDiretor").val(),
                txtCPF: $("#txtCPF").val(),
                txtEmailR: $("#txtEmailR").val(),
                txtTelefoneR: $("#txtTelefoneR").val(),
            }
        })
    });
		 
	});
		 

  
	