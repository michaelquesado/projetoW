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
        <label for="titulolabel">Repita Senha</label>
        <input id="rsenha"  type="password" class="form-control" placeholder="********" />
    </div>
    <div class="form-group" >
        <label for="NivelLabel">Nivel</label>
        <div>
            <input type="text" id="nivel" placeholder="Nivel" />
        </div>
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
            var rsenha = $("#rsenha").val();
            var nivel = $("#nivel").val();
            event.preventDefault();
            if (senha == rsenha) {
                $.ajax({
                    type: 'POST',
                    data: {nome: nome, senha: senha, nivel: nivel},
                    url: "salvarUsuario",
                    dataType: 'html',
                    success: function(result) {
                        if ($.isNumeric(result)) {
                            $("#msg").html("Cadastrador com sucesso");
                            $("#err").removeClass('alert-danger');
                            $("#err").addClass('alert-success');
                            $("#err").show();
                        } else {
                            $("#err").show();
                        }
                    },
                });
            } else {
                alert("Senhas Diferentes");
                $("#senha").focus();
                return false;
            }
        });
    });

</script>