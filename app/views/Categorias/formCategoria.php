<?php
include_once(ERROR .'/error_alert.mphp');
?>
<form role="form" >
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" id="categoria" class="form-control" placeholder="Titulo da noticia">
    </div>
    <div class="form-group">
        <button id="enviar" class="btn btn-primary" >Enviar</button>
    </div>
</form>
<script>
    $("#err").hide();
    $(document).ready(function() {
        $("#enviar").click(function(event) {
            var categoria = $("#categoria").val();
            event.preventDefault();
            $.ajax({
                type: 'POST',
                data: {categoria: categoria},
                url: "cadastrarCategoria",
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
        });
    });
</script>