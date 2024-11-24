// JavaScript Document

$(function(){
    
    console.log("Entrou na pag.js");

    debuga = $("#resposta");
    enviar = $("#frmDados");
    action = '';
	
	 function carregando(datas){
        debuga.empty().html('Carregando...');
    };

    function sucesso(datas){
        debuga.empty().html(datas);
        $("#txtId").val($("#ID Gerado").text());
    };
	
	function sucessoPesquisa(datas){
        debuga.empty().html(datas);
        $("#txtId").val($("#idCliente").text());
		$("#txtNome").val($("#nomeCliente").text());
        $("#txtCpf'").val($("#cpfCliente").text());
        $("#txtGenero").val($("#generoCliente").text());
        $("#txtNascimento").val($("#nascimentoCliente").text());
        $("#txtEndereço").val($("#enderecoCliente").text());
        $("#txtBairro").val($("#bairroCliente").text());
        $("#txtCidade").val($("#cidadeCliente").text());
        $("#txtUF").val($("#ufCliente").text());
		$("#txtCep").val($("#cepCliente").text());
        $("#txtEmail").val($("#emailCliente").text());
		$("#txtTelefone").val($("#telefoneCliente").text());
		$("#txtObs").val($("#obsCliente").text());
        $("#txtStatus").val($("#statusCliente").text());
		$("#txtSenha").val($("#senhaCliente").text());
		

      
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
	});

	$("#btoPesquisar").click(function(){
        console.log("Cliquei no botão btoPesquisar");

        //action = 'teste.php';
        action = 'clienPesquisar.php';

        $.ajax({
            url:    action,
            data:{
                txtId: $("#txtId").val()
            },
            success:sucessoPesquisa
        });
    });
	
	});
	