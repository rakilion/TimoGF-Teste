<?php
//essa linha de código inclue a página vars.php para que possa ser utilizada as váriaveis
include 'vars.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">

    <title>Timo GF</title>

    <link rel="shortcut icon" href="images/favicon.gif" type="image/x-icon">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<!--Banner-->
<body>
<nav class="navbar navbar-expand-lg fixed-top  nav-color">
    <div class="">
        <div class="div-logo">
            <a class="navbar-brand" href="#"> <img src="images/timogf.png" id="logo" alt="Logo" align="center"></a>
        </div>


    </div>
</nav>
<div class="conteudo">
    <div class="fundo-sombra"></div>
    <div id="app" style="background-image:url(images/banner.jpg)"
         class="d-flex justify-content-center align-items-center">
        <div class="text-title">
            <h2 class="title-top">O seu objetivo <br> é a nossa inspiração</h2>

        </div>
    </div>

    <!--Formulário-->
    <div id="contact">
        <div class=" contact">
            <div class="row">
                <div class="col-lg-12 col-sm-6  box-form-contact form-desktop">
                    <div class="col-md-12">
                        <h2 class="title-form-contact justify-content-center">Formulário</h2>


                        <div class="container-form">



                            <form id="formulario" method="post" name="contar" action="#" >
                                <div class="form-group">
                                    <div class="form-group field-nome required">
                                        <h5 id="demo2" name="contar3"></h5>
                                        <input onkeypress="getLength()" type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome completo" minlength="3"   required>
                                    </div>
                                </div>

                                <div class="form-group group-project">
                                    <div class="form-group field-text-projeto required">

                                        <textarea id="texto" name="texto" class="form-control" placeholder="Digite o texto"
                                                  required></textarea>

                                    </div>
                                </div>
                                <div class="form-group div-btn-enviar">
                                    <button type="submit" class="btn btn-primary btn-enviar" href="#">ENVIAR</button>
                                </div>

                            </form>

                            <?php



    //imprime os nomes digitados no form
                            echo "<h5>$nome</h5>";
                            echo "<h5>$texto</h5>";

                            ?>



                            <h5 id="demo"></h5>
                            <h5 id="demo1"></h5>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
    <!--Rodapé-->

    <footer class="div-footer">
        <div class="container ">
            <div class="row">
                <div class="col-lg-2 col-md-2 ico-social">
                    <div class="ico-logo">
                        <a href="#" title="TimoGF 2018"><img src="images/timogf-red.png"></a>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="row box-social">
            <div class="container">
                <div class="col-lg-10 col-md-10">
                    <div class="col-md-12 box-certificado">
                        <span class="text-uppercase">© TimoGF. Todos os direitos reservados.</span>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <script src="js/script.js"></script>
</html>
