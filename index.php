<?php 
    include_once 'conexion.php';
    
    if(isset($_POST['guardar'])){
        $nombre=$_POST['name'];
        $telefono=$_POST['phone'];
        $correo=$_POST['email'];

        if(!empty($nombre) && !empty($telefono) && !empty($correo) ){
            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
                echo "<script> alert('Correo no valido');</script>";
            }else{
                $consulta_insert=$con->prepare('INSERT INTO clientes(name,phone,email) VALUES(:name,:phone,:email)');
                $consulta_insert->execute(array(
                    ':name' =>$nombre,
                    ':phone' =>$telefono,
                    ':email' =>$correo
                ));
                header('Location: index.php');
            }
        }else{
            echo "<script> alert('Los campos estan vacios');</script>";
        }

    }


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>#YoMeCuidoConWachi</title>


    <link rel="icon" href="img/core-img/favicon.ico">


    <link href="style.css" rel="stylesheet">


    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>

    <div id="preloader">
        <div class="wachi-load"></div>
    </div>

    
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <a class="navbar-brand" href="http://www.wachiperu.com/"><img  class="logo-ini" src="img/general/logo.png" id="logo"/></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar">
                            <div class="menu-btn">
                                <div class="menu-btn__burger"></div>
                            </div>
                            </button>

                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <div class="mov-logo">
                                        <img  class="d-lg-none" src="img/general/logo.png" id="logodos"/>
                                    </div>
                                    <li class="nav-item active home"><a class="nav-link" href="#home"></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#features">¿Qué es wachi?</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#screenshot">FAQ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#team">Protocolos de Seguridad</a></li>
                                </ul>
                                <div class="d-lg-none">
                                    <div class="section-heading apps">
                                        <p>Descarga </br>nuestra app</p>
                                        <img class="app-f" src="img/general/appstore-wachi.png">
                                        <img class="app-f" src="img/general/googleplay-wachi.png">
                                    </div>
                                    <div class="sing-up-button row display">
                                        <a class="espacio" href="https://www.facebook.com/wachiperu/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a class="espacio" href="https://www.instagram.com/wachiperu/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-lg-2 red-mov">
                    <div class="sing-up-button tablet">
                        <a href="https://www.facebook.com/wachiperu/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/wachiperu/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-4 col-md uno-mov">
                    <div class="wellcome-heading">
                        <img class="izq" src="img/general/entrega-wachi.png">
                    </div>
                </div>
                <div class="col-4 col-md">
                    <div class="wellcome-heading">
                        <h2>Tus pedidos cerca de ti</h2>
                        <p>¿Quieres potenciar y </br>
                        recibir más pedidos</br>
                        en tu bodega o</br>
                        minimarket?</p>

                        <p>Con Wachi puedes</br>lograrlo de forma</br><b>GRATUITA</b></p>

                        <div class="padre-boton">
                            <a class="boton" href="#formulario">COMENCEMOS</a>
                            <img class=" d-lg-none iconitos" src="img/general/iconitos.png">
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md dos-mv">
                    <div class="wellcome-heading">
                        <img class="drch" src="img/general/productos-wachi.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="footer-contact-area section_padding_100" id="formulario">
        <div class="container">
            <div class="row tablet-mov">
                <div class="col-md-5">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <div class="section-heading">
                            <h2 class="h2-potencia">Potencia tus ventas online</h2>
                        </div>
                        <form id="formulario" action="" method="POST">
                            <div class="contact_input_area">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nombre completo:</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Tu nombre" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Correo electrónico:</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Número celular:</label>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Tu celular" maxlength="9">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    	<input type="submit" name="guardar" value="INSCRIBIRME" class="btn submit-btn">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <img class="mov-form-img" src="img/general/formulario-imagen-wachi.png">
                </div>
            </div>
        </div>
    <!--</section>-->
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <div class="awesome-feature-area section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2 class="h2-wachi">¿Qué es wachi?</h2>
                        <p>Wachi se encarga de enlazar pedidos de clientes cercanos con los minoristas donde podrás recibir en tu celular los pedidos que realicen tus clientes con una alerta de cada nuevo pedido y así evitarás más contagios.</p>
                        <div type="button"data-toggle="modal" data-target="#exampleModalLong" class="d-lg-none wellcome-heading padre-boton">
                            <a class="boton2" href="#">BENEFICIOS</a>
                        </div>
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Beneficios con Wachi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <ul class="list-unstyled">
                                                <li class="media">
                                                  <img src="img/general/check-wachi.png" class="mr-3 check">
                                                  <div class="media-body">
                                                    <p class="mt-0 mb-1 beneficio">Tendrás un crecimiento de forma exponencial de ventas al día.</p>
                                                  </div>
                                                </li>
                                                <li class="media">
                                                  <img src="img/general/check-wachi.png" class="mr-3 check">
                                                  <div class="media-body">
                                                    <p class="mt-0 mb-1 beneficio">No se realizara ningun cobro por la venta de productos utilizada por la plataforma.</p>
                                                  </div>
                                                </li>
                                                <li class="media">
                                                  <img src="img/general/check-wachi.png" class="mr-3 check">
                                                  <div class="media-body">
                                                    <p class="mt-0 mb-1 beneficio">Recibirás en tu celular los pedidos que realicen tus clientes y una alerta con cada nuevo pedido.</p>
                                                   </div>
                                                </li>
                                                <li class="media">
                                                  <img src="img/general/check-wachi.png" class="mr-3 check">
                                                  <div class="media-body">
                                                    <p class="mt-0 mb-1 beneficio">Tendrás ventaja con respecto a la competencia debido a que tendrás más publico.</p>
                                                   </div>
                                                </li>
                                                <li class="media">
                                                  <img src="img/general/check-wachi.png" class="mr-3 check">
                                                  <div class="media-body">
                                                    <p class="mt-0 mb-1 beneficio">Gracias a la plataforma tendrás una vía de venta adicional.</p>
                                                   </div>
                                                </li>
                                                <li class="media">
                                                  <img src="img/general/check-wachi.png" class="mr-3 check">
                                                  <div class="media-body">
                                                    <p class="mt-0 mb-1 beneficio">Acercamiento y fidelización con respecto a clientes.</p>
                                                   </div>
                                                </li>
                                                <li class="media">
                                                  <img src="img/general/check-wachi.png" class="mr-3 check">
                                                  <div class="media-body">
                                                    <p class="mt-0 mb-1 beneficio">Descubres que productos se venden más a tu publico cercano.</p>
                                                   </div>
                                                </li>
                                                <li class="media">
                                                  <img src="img/general/check-wachi.png" class="mr-3 check">
                                                  <div class="media-body">
                                                    <p class="mt-0 mb-1 beneficio">Evitas mas contagios haciendo que los clientes no salgan de casa.</p>
                                                   </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 img-mov">
                    <img src="img/general/wachi.png">
                </div>
                <div class="col-lg-8">
                    <div class="row ocultar-mov">
                        <div class="col-lg-6 espacio">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="beneficio">Tendrás un crecimiento de forma exponencial de ventas al día.</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="check" src="img/general/check-wachi.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 espacio">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="beneficio">No se realizara ningun cobro por la venta de productos utilizada por la plataforma.</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="check" src="img/general/check-wachi.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 espacio">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="beneficio">Recibirás en tu celular los pedidos que realicen tus clientes y una alerta con cada nuevo pedido.</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="check" src="img/general/check-wachi.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 espacio">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="beneficio">Tendrás ventaja con respecto a la competencia debido a que tendrás más publico.</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="check" src="img/general/check-wachi.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 espacio">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="beneficio">Gracias a la plataforma tendrás una vía de venta adicional.</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="check" src="img/general/check-wachi.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 espacio">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="beneficio">Acercamiento y fidelización con respecto a clientes.</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="check" src="img/general/check-wachi.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 espacio">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="beneficio">Descubres que productos se venden más a tu publico cercano.</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="check" src="img/general/check-wachi.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 espacio">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="beneficio">Evitas mas contagios haciendo que los clientes no salgan de casa.</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="check" src="img/general/check-wachi.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area section_padding_0_100 clearfix" id="screenshot">
        <div class="container">
            <div class="row tablet-mov-fa">
                <div class="col-md-6">
                    <div class="contact_from">
                        <div class="section-heading">
                            <h2 class="h2-faq">Preguntas Frecuentes</h2>
                        </div>
                        <div class="accordion" id="accordionExample" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            ¿Por qué Wachi?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Wachi es la App de delivery que lleva a la puerta de tu casa todo lo que necesites de tu tienda de abarrotes en menos de una hora. Para hacer tu pedido solo debes seleccionar los productos y Wachi buscará a las tiendas de tu barrio que están cerca de tu ubicación. Ellos lo preparan y te lo llevan hasta tu casa ¡Así de simple!
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            ¿Cómo funciona wachi?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        El cliente encuentra tu producto en Wachi y realiza la compra a través de la app. Tú te encargas del inventario, de gestionar los pedidos y de despacharlos. Accedes a nuestros servicios sin tener que invertir nada, es 100% gratis.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            ¿Quién realiza las entregas?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Las entregas las realizan los repartidores de las mismas tiendas/abarrotes y te las llevan al instante. Apoyamos y ayudamos a las tiendas/abarrotes y locales a vender más y mejor.
                                    </div>
                                </div>
                            </div>   
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            ¿Qué puedo pedir?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                    Puedes seleccionar y pedir cualquiera de los productos que estén habilitados en la aplicación según la dirección ingresada, sin importar la categoría.
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bur-mov">
                    <img src="img/general/burbujas-wachi.png">                                        
                </div>
                <img class="d-lg-none" src="img/general/celular-app-wachi.png">
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

        <!-- ***** Footer Area Start ***** -->
    <footer class="our-Team-area section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-heading h2-pds">
                        <h2>Protocolos </br>de Seguridad</h2>
                        <p>Cuidarnos es responsabilidad de todos, te </br>dejamos las siguientes instrucciones para </br>hacer las entregas.</p>
                    </div>
                </div>
            </div>
            <div class="row foot">
                <div class="col-12 col-md-2 mov-team">
                </div>
                <div class="col-12 col-md-4 mov-team-pro">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/general/desinfecta-wachi.png">
                        </div>
                        <div class="member-text">
                            <h4>Higieniza frecuentemente los pedidos que realices</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mov-team-pro">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/general/usa-mascarilla.png">
                        </div>
                        <div class="member-text">
                            <h4>Usa mascarilla al entregar los productos</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 mov-team">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-2 mov-team">
                </div>
                <div class="col-12 col-md-4 mov-team-pro">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/general/lavate-las-manos-wachi.png">
                        </div>
                        <div class="member-text">
                            <h4>Lávate las manos antes y después de hacer entregas.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mov-team-pro">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="img/general/manten-distancia-wachi.png">
                        </div>
                        <div class="member-text">
                            <h4>Intenta mantener la mayor distancia posible con el cliente.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 mov-team"></div>
            </div>
        </div>
        <div class="row footer-extra">
            <div class="col-4 text-center">
                <div class="hola">
                    <h2>Hola</h2>
                    <h3 class="sigue">Síguenos en:</h3>
                    <div class="foot-button">
                        <a href="https://www.facebook.com/wachiperu/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/wachiperu/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="section-heading copy">
                    <h3>© 2020 Wachi Perú</h3>
                </div>
            </div>
            <div class="col-4 text-center movile-img">
                <div class="section-heading apps">
                    <img class="logo-f movtab" src="img/general/logo.png">
                    <img class="app-f movtabap" src="img/general/appstore-wachi.png">
                    <img class="app-f movtabap" src="img/general/googleplay-wachi.png">
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    <!--menu movile-->
    <script src="js/main.js"></script>

    <script type="text/javascript"> 
        $(document).on('click', '.dropdown-menu', function(e) { if ($(this).hasClass('keep-open-on-click')) { e.stopPropagation(); } });
    </script> 


</body>

</html>
