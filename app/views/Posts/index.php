<?php require_once('layout/jumbo.php'); ?>
<!--CONTAINER-->
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <?php
            $array = array('technics', 'sports', 'nature', 'cats', 'food', 'business', 'fashion');
            for ($i = 0; $i <= 6; $i++) {
                $link = "http://lorempixel.com/700/393/" . $array[$i];
                ?>
                <div class="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <figure class="img-thumbnail">
                                <img  src="<?php print $link; ?>" class="img-responsive"/>
                            </figure>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1><a href="page.php">Post com uma foto, isso sim!</a></h1>
                            <span>Autor: Michael Quesado;</span>
                            <span>Categoria: <a href="#">#foto</a> <a href="#">#imagem</a></span>
                        </div>
                    </div>
                    <div class="row resumo">
                        <div class="col-lg-10 text-justify">
                            <p class="lead">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 ">
                            <a href="<?php print SERVER . 'posts/detalhes/'?>" class="btn btn-warning btn-lg">Ver mais</a>
                        </div>
                    </div>
                    <hr />
                </div>
            <?php } ?>
        </div>
        <!--SIDERBAR RIGHT-->
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group ">
                        <input class="form-control" type="text">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Buscar</button>
                        </span>
                    </div>
                </div>
            </div>
            <?php
            unset($i);
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Últimos Posts.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Categorias</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li><a href="#">Foto</a></li>
                                <li><a href="#">Musica</a></li>
                                <li><a href="#">Tecnologia</a></li>
                                <li><a href="#">Artes</a></li>
                                <li><a href="#">Foto</a></li>
                                <li><a href="#">Musica</a></li>
                                <li><a href="#">Tecnologia</a></li>
                                <li><a href="#">Artes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FIM SIDERBAR RIGTH--->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <ul class="pager">
                <li class="previous disabled"><a href="#">← Anterior</a></li>
                <li class="next"><a href="#">Próximo →</a></li>
            </ul>
        </div>
    </div>
</div>
