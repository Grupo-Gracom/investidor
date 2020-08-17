$("#lead").submit(function(e){
        e.preventDefault();
        var formulario = $(this);
        var retorno = cadastro(formulario);
       //alert(formulario.serialize());
    });

$("#livro").submit(function(e){
        e.preventDefault();
        var formulario = $(this);
        var retorno = cadastroEbook(formulario);
        //alert(formulario.serialize());
    });

 function cadastro(dados){
        $.ajax({
            type:"POST",
            data: dados.serialize(),
            url:"banco/cadastro.php",
            async: false
        }).then(sucesso,falha);

        function sucesso(data){
            $sucesso = $.parseJSON(data)["sucesso"];
            $mensagemupld = $.parseJSON(data)["mensagem"];
            $('#mensagemLead').show();
            $('#lead').trigger("reset");
            if($sucesso) {
                $("#mensagemLead").html($mensagemupld);
                $('#lead').trigger("reset");
            }else{
                $("#mensagemLead").html($mensagemupld);
                $('#lead').trigger("reset");
            }
        }

        function falha(){
            console.log("erro no sistema comunicar ao suporte!");
        }
    }


function cadastroEbook(dados){
        $.ajax({
            type:"POST",
            data: dados.serialize(),
            url:"banco/ebook.php",
            async: false
        }).then(sucesso,falha);

        function sucesso(data){
            $sucesso = $.parseJSON(data)["sucesso"];
            $mensagemupld = $.parseJSON(data)["mensagem"];
            $('#mensagemEbook').show();
            $('#livro').trigger("reset");
            if($sucesso) {
                $("#mensagemEbook").html($mensagemupld);
                $('#livro').trigger("reset");
            }else{
                $("#mensagemEbook").html($mensagemupld);
                $('#livro').trigger("reset");
            }
        }

        function falha(){
            console.log("erro no sistema comunicar ao suporte!");
        }
    }