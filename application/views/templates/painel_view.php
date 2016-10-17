<!DOCTYPE HTML>
<html>
<head>
<title><?php if (isset($titulo)) {?>{titulo}|<?php } ?>{titulo_padrao}</title>
<link rel="icon" href="<?php echo base_url("tema"); ?>/images/icon.png?3" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Jotasat" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('theme/css/bootstrap.css');?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url('theme/css/style.css');?>" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('theme/font/css/font-awesome.min.css')?>">
<link href="<?php echo base_url('theme/css/font-awesome.css');?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="<?php echo base_url('theme/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php echo base_url('theme/js/modernizr.custom.js');?>"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="<?php echo base_url('theme/css/animate.css');?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url('theme/js/wow.min.js');?>"></script>
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
<!-- chart -->
<script src="<?php echo base_url('theme/js/Chart.js');?>"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="<?php echo base_url('theme/css/clndr.css');?>" type="text/css" />
<script src="<?php echo base_url('theme/js/underscore-min.js');?>" type="text/javascript"></script>
<script src= "<?php echo base_url('theme/js/moment-2.2.1.js');?>" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="<?php echo base_url('theme/js/metisMenu.min.js');?>"></script>
<script src="<?php echo base_url('theme/js/custom.js');?>"></script>
<link href="<?php echo base_url('theme/css/custom.css');?>" rel="stylesheet">
<!--//Metis Menu -->
<!-- Classie -->
      <!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url('theme/js/bootstrap.js');?>"> </script>
   <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
</head> 
<body class="cbp-spmenu-push">
  <div class="main-content">
    <!--left-fixed -navigation-->
    <?php if(esta_logado(false)){ ?>
    <div class=" sidebar" role="navigation">
      <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
          <ul class="nav" id="side-menu">
            <li>
              <?php echo anchor('painel','<i class="fa fa-home nav_icon"></i>Dashboard'); ?>
            </li>
            <li>
                <a href="#"><i class="fa fa-cart-plus nav_icon"></i>Porta Retrato<span class="fa arrow"></span></a>
                <ul style="" aria-expanded="true" class="nav nav-second-level collapse in">
                  <li>
                    <?php echo anchor('produto/cadastrarP','Cadastrar'); ?>
                  </li>
                  <li>
                    <?php echo anchor('produto/gerenciarP','Gerenciar'); ?>
                  </li>
                </ul>
              <!-- //nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cart-plus nav_icon"></i>Espelhos<span class="fa arrow"></span></a>
                <ul style="" aria-expanded="true" class="nav nav-second-level collapse in">
                  <li>
                    <?php echo anchor('produto/cadastrarE','Cadastrar'); ?>
                  </li>
                  <li>
                    <?php echo anchor('produto/gerenciarE','Gerenciar'); ?>
                  </li>
                </ul>
              <!-- //nav-second-level -->
            </li>
            <li>
              <a href="#"><i class="fa fa-cart-plus nav_icon"></i>Categoria<span class="fa arrow"></span></a>
              <ul style="" aria-expanded="true" class="nav nav-second-level collapse in">
                <li>
                  <?php echo anchor('produto/cadastroCategoriaP','Porta Retrato'); ?>
                </li>
                <li>
                  <?php echo anchor('produto/cadastroCategoriaE','Espelho'); ?>
                </li>
              </ul>
              <!-- //nav-second-level -->
            </li>

            <li>
              <a href="#"><i class="fa fa-file-text-o nav_icon"></i>Páginas<span class="fa arrow"></span></a>
              <ul style="" aria-expanded="true" class="nav nav-second-level collapse in">
                <li>
                  <?php echo anchor('paginas/editar','Editar'); ?>
                </li>
                
              </ul>
              <!-- //nav-second-level -->
            </li>
            <!-- /nav-second-level -->
          </ul>
          <!-- //sidebar-collapse -->
        </nav>
      </div>
    </div>
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    <div class="sticky-header header-section ">
      <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <!--logo -->
        <div class="logo">
          <a href="index.html">
            <h1><img src="<?php echo base_url('tema/') ?>/images/logo.png" alt="" width="78" height="26"></h1>
            <span>PanelAdmin</span>
          </a>
        </div>
        <!--//logo-->
        <div class="clearfix"> </div>
      </div>
      <div class="header-right">
        <div class="profile_details">   
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img"> 
                  <div class="user-name">
                    <p><?php echo $this->session->userdata('user_nome'); ?></p>
                    <span><?php if($this->session->userdata('user_admin') == 1) {
                          echo 'Administrador';
                          }else{
                            echo 'Usuário';
                            } ?></span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <?php echo anchor('usuarios/logoff','<i class="fa fa-sign-out"></i>Sair'); ?></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>       
      </div>
      <div class="clearfix"> </div> 
    </div>
      <?php } ?>
    </div>

  {conteudo}
  {rodape}
      
  </div>
  <script src="<?php echo base_url('theme/js/classie.js');?>"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      

      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
  <!--scrolling js-->
  <script src="<?php echo base_url('theme/js/jquery.nicescroll.js');?>"></script>
  <script src="<?php echo base_url('theme/js/scripts.js');?>"></script>
  <!--//scrolling js-->

  </body>
</html>