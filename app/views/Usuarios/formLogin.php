<?php
include_once(ERROR . '/error_alert.mphp');
?>
<form role="form" >
    <div class="form-group">
        <label for="Nomelabel">Nome</label>
        <input type="text" id="nome" class="form-control" placeholder="Nome Usuario" required="true">
    </div>
    <div class="form-group">
        <label for="titulolabel">Senha</label>
        <input type="password" id="senha" class="form-control" placeholder="*********" required="true">
    </div>
    <div class="form-group">
        <button id="enviar" class="btn btn-primary" >Enviar</button>
    </div>
</form>
<script>
    $("#err").hide();

    $(document).ready(function() {
        $("#enviar").click(function(event) {
            var nome = $("#nome").val();
            var senha = $("#senha").val();
            event.preventDefault();
            
                $.ajax({
                    type: 'POST',
                    data: {nome: nome, senha: senha},
                    url: "Login",
                    dataType: 'html',
                    success: function(result) {
                        if ($.isNumeric(result)) {
                            window.location.href = "http://<?php print SERVER;?>/projetoW/noticias/";
                        } else {
                            $("#msg").html("Login ou Senha incorreto. ");
                            $("#err").show();
                        }
                    },
                });
        });
    });

</script>