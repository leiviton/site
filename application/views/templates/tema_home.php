<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
 <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Direta Telecom, provedor de internet na cidade de Guaxupé e Guaranesia">
        <meta name="author" content="Leiviton Carlos">
        <meta name="keywords" content="Direta, Internet, Fibra, Guaxupé">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php if (isset($titulo)) {?>{titulo} | <?php } ?>{titulo_padrao}</title> 
        <link rel="shortcut icon" href="<?php echo base_url("tema/img/3636.png")?>">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url("tema/css/style.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("tema/css/normalize.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("tema/css/font-awesome.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("tema/css/fontello.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("tema/css/animate.css");?>">        
        <link rel="stylesheet" href="<?php echo base_url("tema/css/bootstrap.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("tema/css/owl.carousel.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("tema/css/owl.theme.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("tema/css/owl.transitions.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("tema/style.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("tema/responsive.css");?>">
        <script src="<?php echo base_url("tema/js/vendor/modernizr-2.6.2.min.js");?>"></script>
    </head>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->    
        <div class="header-connect visible-lg-block visible-md-block visible-sm-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-xs-8">
                        <div class="header-half header-call">
                            <p>
                                <span> <i class="fa fa-phone"></i> 0800 033 17 11 </span>
                                <span> <i class="icon-mail"></i> contato@direta.com.br</span>
                                <span> <a class="corporation" href="<?php echo base_url("corporation/home"); ?>"> Direta Corporation</a></span>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-1 col-md-offset-4  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                        <div class="header-half header-social text-right">
                           
                                    <a href="#" class="face">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url("home");?>"><img src="<?php echo base_url("tema/img/logo.png");?>" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right">
                  <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">Assinante</button>
              </div>
              <ul class="main-nav nav navbar-nav navbar-right">             
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="<?php echo base_url("home");?>">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="#">Internet Fibra</a></li>
                 <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Internet Rádio</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#">Segurança</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="<?php echo base_url("home/contact");?>">Contato</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        {conteudo}
        <div class="footer-area">
            <div class="container">
                <div class="row footer">
                    <div class="col-md-4">
                        <div class="single-footer">
                            <img src="<?php echo base_url("tema/img/footer-logo.png");?>" alt="" class="wow pulse" data-wow-delay="1s">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-footer">
                            <h4>Links</h4>
                            <div class="footer-links">
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url("home");?>">Home</a></li>
                                    <li><a href="" class="active">Internet Fibra</a></li>
                                    <li><a href="">Internet Rádio</a></li>
                                    <li><a href="">Segurança Eletônica</a></li>
                                    <li><a href="">Trabalhe Conosco</a></li>
                                    <li><a href="<?php echo base_url("home/contact");?>">Contato</a></li>
                                    <li><a href="">Assinante</a></li>
                                    <li><a href="<?php echo base_url("tema/Contrato_SCM.MZ.pdf");?>" onclick='window.open(this.href, "_system", "location=yes"); return false;'>Contrato SCM</a></li>
                                    <li><a href="<?php echo base_url("tema/contrato_comodato.MZ.pdf");?>" onclick='window.open(this.href, "_system", "location=yes"); return false;'>Contrato Comodato</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-copy">
                    <p><span>(C) Direta Telecom, All rights reserved</span></p>
                </div>
            </div>
        </div>    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url("tema/js/vendor/jquery-1.10.2.min.js");?>"><\/script>')</script>
        <script src="<?php echo base_url("tema/js/bootstrap.min.js");?>"></script>
        <script src="<?php echo base_url("tema/js/owl.carousel.min.js");?>"></script>
        <script src="<?php echo base_url("tema/js/wow.js");?>"></script>
        <script src="<?php echo base_url("tema/js/main.js");?>"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5v8O32XyflTVnHqb73edYB-AaWdZ_rtw" type="text/javascript"></script>
        <script type="text/javascript">
            //google map
          function initialize() {
            var myLatlng = new google.maps.LatLng(-21.307181, -46.718466);
            var mapOptions = {
              zoom: 16,
              center: myLatlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Direta Telecomunicações - (35)3559-8800'
            });
          }
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>
