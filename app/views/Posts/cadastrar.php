<?php
//include_once(ERROR . '/error_alert.mphp');
?>
<script type="text/javascript" src="<?php print LAYOUT ?>tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste jbimages"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        relative_urls: false
    });
</script>
<div class="container">
    <div id="detalhes">
        <form action="<?php print HOST . DIR?>posts/add" method="post" class="form-horizontal" >
            <input type="text" id="titulo" name="titulo" />
            <textarea name="conteudo"></textarea>
            <input type="submit">
        </form>
    </div>
</div>
