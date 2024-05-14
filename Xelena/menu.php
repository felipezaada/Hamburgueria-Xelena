<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Xelena Burguer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">Início</a></li>
                                        <li><a href="menu.php">Menu</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <?php
                                        if (array_key_exists('id', $_SESSION)) {
                                            echo "<li>
                                             <i class=\"fa fa-user-circle\" style=\"color: #FFFFFF;\"> " . $_SESSION['nome'] . "</i>
                                            </li>
                                            <li>
                                                <a href=\"sessionEnd.php\">
                                                    <i class=\"fa fa-sign-in\"></i>
                                                </a>
                                            </li>";
                                        } else {
                                            echo
                                            "<li>
                                                <a href=\"registro.html\">
                                                    <i class=\"fa fa-snapchat\"></i>
                                                </a>
                                            </li>
                                            <li>
                                            <a href=\"login.html\">
                                                <i class=\"fa fa-reply-all\"></i>
                                            </a>
                                            </li>";
                                        }

                                        ?>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="#" href="#">+55 (11) 1234-5678</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Menu</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- best_burgers_area_start  -->
    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>Menu de Hambúrguer</span>
                        <h3>Melhores Hambúrgueres de Sempre</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/1.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Hambúrguer de Carne</h3>
                            <p>Dispensa comentários, simplesmente perfeito e com a quantidade ideal de carne artesanal bovina.</p>
                            <span>R$25</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/3.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Burger Bizz</h3>
                            <p>Delicioso hambúrguer com carne grelhada, queijo cheddar derretido, alface fresca e molho especial.</p>
                            <span>R$20</span>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/4.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Crackles Burger</h3>
                            <p>Delicioso hambúrguer com queijo cheddar derretido e bacon crocante.</p>
                            <span>R$20</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/5.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Bull Burgers</h3>
                            <p>Hambúrguer suculento com molho barbecue, cebolas caramelizadas e queijo defumado.</p>
                            <span>R$20</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/6.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Rocket Burgers</h3>
                            <p>Hambúrguer com pimenta jalapeño, molho picante e queijo pepper jack.</p>
                            <span>R$20</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/7.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Smokin Burger</h3>
                            <p>Hambúrguer defumado com molho especial, cebolas grelhadas e queijo defumado.</p>
                            <span>R$20</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/8.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Delish Burger</h3>
                            <p>Hambúrguer saboroso com alface crocante, tomate fresco e molho especial.</p>
                            <span>R$20</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- best_burgers_area_end  -->

    <!-- features_room_startt -->
    <div class="Burger_President_area">
        <div class="Burger_President_here">
            <div class="single_Burger_President">
                <div class="room_thumb">
                    <img src="img/burgers/1.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>R$20</span>
                            <h3>The Burger President</h3>
                            <p>O hambúrguer aprovado até pelo presidente da república!</p>
                            <a href="#" class="boxed-btn3">Comprar agora</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="single_Burger_President">
                <div class="room_thumb">
                    <img src="img/burgers/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>R$20</span>
                            <h3>The Burger President Jr</h3>
                            <p>O hambúrguer aprovado até pelo filho do presidente da república!</p>
                            <a href="#" class="boxed-btn3">Comprar agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_end -->

    <!-- testimonial_area_start  -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <span>Depoimentos</span>
                        <h3>Clientes Satisfeitos</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>"Se você está em busca de uma experiência gastronômica única e deliciosamente suculenta, não precisa procurar mais longe do que o lendário lanche da Xelena. Ao dar a primeira mordida, você é imediatamente transportado para um mundo de sabores intensos e texturas incríveis. O segredo por trás desse sabor excepcional reside na maionese, indiscutivelmente a mais suculenta da cidade, que eleva cada ingrediente a um nível totalmente novo de indulgência. Combinada com molhos cuidadosamente selecionados, cada mordida é uma explosão de sabor, uma verdadeira sinfonia na escala de Avogadro. A cada camada, você é presenteado com uma mistura harmoniosa de ingredientes frescos e cuidadosamente preparados, criando uma experiência única que deixa um sorriso de satisfação em seu rosto. Sem dúvida, o lanche da Xelena não é apenas uma refeição, é uma jornada culinária que desperta os sentidos e satisfaz até os paladares mais exigentes."</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/1.png" alt="">
                                            </div>
                                            <h4>Kristiana Chouhan</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Foda pra caramba, super delicoso! Recomendo!"</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/2.png" alt="">
                                            </div>
                                            <h4>Arafath Hossain</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>Slk amei esse lanche!</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/3.png" alt="">
                                            </div>
                                            <h4>A.H Shemanto</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_ned  -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_instagram">
                        <img src="img/instragram/1.png" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_instagram">
                        <img src="img/instragram/2.png" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_instagram">
                        <img src="img/instragram/3.png" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_instagram">
                        <img src="img/instragram/4.png" alt="">
                        <div class="ovrelay">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instragram_area_end -->

    <!-- footer_start  -->

    <!-- footer_end  -->

    <!-- link that opens popup -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>