<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
                            <a href="sugerirPlataforma.html">Sugestões</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section id="form">
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>
        <form action="control/sugere.php" method="POST">
            <h3>Sugerir Plataforma </h3>

            <div class="form-group">
                <label for="sugestionForm">Sugestao textarea</label>
                <textarea required class="form-control" placeholder="Nos diga sua sugestão" id="sugestionForm" name="sugest"
                    rows="6"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="button">Enviar</button>
            </div>

            <div class="telefone text-right">
                <img src="./images/Allura - Freelancing.png" class="img-responsive pull-right" />
            </div>

            <div>
                <hr width=100%>
                <br />
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