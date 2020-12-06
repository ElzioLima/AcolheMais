<?php
include "control/bd_connect.php";

//$id_plataforma = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

//$consulta = "SELECT * FROM plataforma WHERE `id`='$id_plataforma'";
//$con = $mysqli->query($consulta) or die($mysqli->error);


//while($dados = $con->fetch_array()){ //aqui não precisa de while
/*
        link da imagem vai para src
        echo $dados["nome"];
        echo $dados["nome"];
        $dados["link"]   ----> ir para plataforma (link)
        echo $dados["resumo"];
        echo $dados["detalhes"];
    */
//}
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer-white.css">
    <link rel="stylesheet" href="css/print.css" media="print">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 768px)" />
    <link rel="shortcut icon" href="images/Acolhe+Icon2.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acolhe+ </title>

</head>

<body>
    <header>
        <div class="container">
            <img class="rounded-circle" src="images/Acolhe+Icon.jpg" alt="Rocketseat" />
            <div class="menu-section">
                <div class="menu-toggle">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="index.php">Plataformas</a>
                        </li>
                        <li>
                            <a href="index.php#quemsomos">Quem Somos</a>
                        </li>
                        <li>
                            <a href="sugerirPlataforma.php">Sugestões</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <img src="./images/mostrarPlataforma-1.png" alt="" />
            <div>
                <h2>Nome da Plataforma</h2>
            </div>
            <img src="./images/mostrarPlataforma-1.png" alt="" />
        </div>
    </section>

    <section class="hero">
        <div class="container">
            <section class="cards">
                <div class="card">
                    <div class="content">
                        <div>
                            <h2>Informações</h2>
                            <p>
                                Aqui entram as informações retiradas do banco de dados sobre a plataforma selecionada
                                anteriormente
                            </p>
                            <a href="#" class="button">Ir para plataforma</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section class="cards">
                <div class="card">
                    <div class="content">
                        <div>
                            <h2>Informações</h2>
                            <p>
                                Aqui entram as informações retiradas do banco de dados sobre a plataforma selecionada
                                anteriormente
                            </p>
                            <a href="#" class="button">Ir para plataforma</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section id="form">
        <form action="">
            <h3>Quero Conversar </h3>
            <div class="form-group">
                <input class="input-control" placeholder="Nome" />

                <input type="email" class="input-control" placeholder="Email" />
            </div>

            <div class="form-group">
                <input class="input-control" placeholder="Empresa" />
            </div>

            <div class="form-group">
                <input class="input-control" placeholder="Endereço" />
            </div>

            <div class="form-group">
                <input class="input-control" placeholder="Cidade" style="flex: 3 1" />
                <input class="input-control" placeholder="Estado" style="flex: 1" />
                <input class="input-control" placeholder="CEP" style="flex: 1" />
            </div>

            <div class="form-group">
                <button type="submit" class="button">Salvar</button>

            </div>

        </form>
    </section>

    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="#">Informações da Empresa</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Cursos</a></li>
            </ul>
            <p class="footer-copyright">© 2020 Copyright - ARTe Software</p>
        </div>
        <div class="footer-social">
            <a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-icons"><i class="fa fa-instagram"></i></a>
            <a href="#" class="social-icons"><i class="fa fa-youtube"></i></a>
            <a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
        </div>
    </footer>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="js/menu.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>