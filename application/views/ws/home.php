<?php
defined('BASEPATH') OR exit('No direct script access allowed');
switch ($tela) {
    case 'inicio':
      ?>
        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                 
                  <div class="item">
                    <picture>
                      <source srcset="<?php echo base_url("tema/img/slider-image-3.jpg");?> 2000w">
                      <img src="<?php echo base_url("tema/img/slider-image-3.jpg");?>" class="img-responsive" alt="Mirror Edge">
                    </picture>
                  </div>
                  <div class="item"><img src="<?php echo base_url("tema/img/slider-image-2.jpg");?>" class="img-responsive" alt="The Last of us"></div>
                  <div class="item"><img src="<?php echo base_url("tema/img/slider-image-1.jpg");?>" class="img-responsive" alt="GTA V"></div>
                 
                </div>
            </div>
        </div>

        <div class="content-area">
            <div class="container">
                <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
                    <h2>Nossa história</h2>
                    <p>A DIRETA, empresa líder na região no ramo de Segurança Eletrônica, foi fundada em maio de 1996, é especializada em segurança patrimonial, com estrutura completa e independente, o que permite cuidar da segurança de sua empresa ou residência com maior agilidade e eficiência.  </p>
                </div>
                <div class="row how-it-work text-center">
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                            <img src="<?php echo base_url("tema/img/how-work1.png");?>" alt="">
                            <h3>Segurança eletrônica</h3>
                            <p>A DIRETA possui equipes de instalação e assistência técnica próprias para atender seus chamados com maior agilidade e eficiência e executar suas instalações no mais alto padrão de qualidade. Possuímos 22 técnicos,10 veículos próprios, 03 atendentes de plantão 24h por dia. 04 vias receptoras de eventos, Linha fixa, GPRS, Ethernet e Radiofrequência</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                            <img src="<?php echo base_url("tema/img/internet.png");?>" alt="">
                            <h3>Internet</h3>
                            <p>Em 2011 a Direta iniciou suas atividades no ramo de telecomunicações, oferecendo os serviços de internet banda Larga inicialmente na cidade de Guaxupé-MG e Guaranésia-MG. Em 2016 a Direta Telecom tornou-se Node Google Inc., com todos os serviços da gigante mundial replicados dentro do nosso datacenter e exclusivo para nossos clientes.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                            <img src="<?php echo base_url("tema/img/how-work3.png");?>" alt="">
                            <h3>ISO 9001</h3>
                            <p>Empresa certificada pela de International Organization for Standardization (Organização Internacional de Normalização), certificado de qualidade ISO 9001, que é um conjunto de normas de padronização mundial que aplicamos aos nossos serviços e produtos. O ISO 9001 tem como objetivo melhorar a gestão, saúde ocupacional, e segurança.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <div class="row job-posting wow fadeInUp" data-wow-delay="1s">
                    <div role="tabpanel">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#job-seekers" aria-controls="home" role="tab" data-toggle="tab"><h1>Nossos Clientes</h1></a></li>
                        
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="job-seekers">
                            <ul class="list-inline job-seeker">
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee4.png");?>" alt="">
                                        <div class="overlay"><h3>Instagram</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee5.png");?>" alt="">
                                        <div class="overlay"><h3>Microsoft</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee6.png");?>" alt="">
                                        <div class="overlay"><h3>Dribbble</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee1.png");?>" alt="">
                                        <div class="overlay"><h3>Beats Music</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee2.png");?>" alt="">
                                        <div class="overlay"><h3>Facebook</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee3.png");?>" alt="">
                                        <div class="overlay"><h3>Twitter</h3></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="employeers">
                            <ul class="list-inline">
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee4.png");?>" alt="">
                                        <div class="overlay"><h3>Instagram</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee5.png");?>" alt="">
                                        <div class="overlay"><h3>Microsoft</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee6.png");?>" alt="">
                                        <div class="overlay"><h3>Dribbble</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee1.png");?>" alt="">
                                        <div class="overlay"><h3>Beats Music</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee2.png");?>" alt="">
                                        <div class="overlay"><h3>Facebook</h3></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?php echo base_url("tema/img/employee3.png");?>" alt="">
                                        <div class="overlay"><h3>Twitter</h3></div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
                    <h5>Destaques</h5>
                    <h2><span>Planos e combos</h2>
                </div>
                <div class="row jobs">
                    <div class="col-md-9">
                        <div class="job-posts table-responsive">
                            <table class="table">
                                <tr class="odd wow fadeInUp" data-wow-delay="1s">
                                    <td class="tbl-logo"><img src="<?php echo base_url("tema/img/job-logo1.png");?>" alt=""></td>
                                    <td class="tbl-title"><h4>Internet Fibra 10 mb <br><span class="job-type">Velocidade para curtir sua vida</span></h4></td>
                                    <td><p>updow 5mb</p></td>
                                    <td><p><i class=""></i></p></td>
                                    <td><p>R&dollar; 119,00</p></td>
                                    <td class="tbl-apply"><a href="<?php echo base_url("home/fibra");?>">Ver mais</a></td>
                                </tr>
                                <tr class="even wow fadeInUp" data-wow-delay="1.1s">
                                    <td class="tbl-logo"><img src="<?php echo base_url("tema/img/job-logo1.png");?>" alt=""></td>
                                    <td class="tbl-title"><h4>Ganhe 10% de desconto<br><span class="job-type">Cliente de segurança ganha desconto na internet</span></h4></td>
                                    <td><p>Jolil corporation</p></td>
                                    <td><p><i class=""></i></p></td>
                                    <td><p>10%</p></td>
                                    <td class="tbl-apply"><a href="#">Ver mais</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="job-add wow fadeInRight" data-wow-delay="1.5s">
                            <h2>Não é cliente?</h2>
                            <a href="#">contratar agora</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <div class="row page-title text-center  wow bounce"  data-wow-delay=".7s">
                    <h5>TESTIMONIALS</h5>
                    <h2>WHAT PEOPLES ARE SAYING</h2>
                </div>
                <div class="row testimonial">
                    <div class="col-md-12">
                        <div id="testimonial-slider">
                            <div class="item">
                                <div class="client-text">                                
                                    <p>Jobify offer an amazing service and I couldn’t be happier! They 
                                    are dedicated to helping recruiters find great candidates, wonderful service!</p>
                                    <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                </div>
                                <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
                                    <img src="<?php echo base_url("tema/img/client-face1.png");?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-text">                                
                                    <p>Jobify offer an amazing service and I couldn’t be happier! They 
                                    are dedicated to helping recruiters find great candidates, wonderful service!</p>
                                    <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                </div>
                                <div class="client-face">
                                    <img src="<?php echo base_url("tema/img/client-face2.png");?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-text">                                
                                    <p>Jobify offer an amazing service and I couldn’t be happier! They 
                                    are dedicated to helping recruiters find great candidates, wonderful service!</p>
                                    <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                </div>
                                <div class="client-face">
                                    <img src="<?php echo base_url("tema/img/client-face1.png");?>" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-text">                                
                                    <p>Jobify offer an amazing service and I couldn’t be happier! They 
                                    are dedicated to helping recruiters find great candidates, wonderful service!</p>
                                    <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                                </div>
                                <div class="client-face">
                                    <img src="<?php echo base_url("tema/img/client-face2.png");?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php
    break;
    case 'contact':
    ?>
      <!--breadcrumbs start-->
    <div class="breadcrumbs contato">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Contato
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
           
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->
    <!--container start-->
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-5 address" data-wow-delay="1s">
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              ENDEREÇO
            </h4>
            <address>
              Avenida Dona Floriana,1130
              <br>
              Guaxupé - MG
              <br>
              BRASIL
            </address>
          </section>
          <section class="contact-infos">
            <h4 class="title custom-font text-black">
              HORÁRIO DE ATENDIMENTO
            </h4>
            <p>
              Segunda a sexta das 8 as 17:30
              <br>
              Sábado - 8 as 12:00
              <br>
              Domingo - Fechado
              <br>
            </p>
          </section>
          <section class="contact-infos">
            <h4>
              TELEFOONE
            </h4>
            <p>
              <i class="icon-phone">
              </i>
              +55(35)35598800
            </p>
          </section>
        </div>
        <div class="col-lg-7 col-sm-7 address" data-wow-delay="1.2s">
          <h4>
            Formulário de contato
          </h4>
          <div class="erro">
                     <?php 
                     erros_validacao();
                     get_msg('msgok');
                     get_msg('msgerro'); 
                     ?>
          </div>
          <div class="contact-form">
            <form action="<?php echo base_url('home/contact') ?>" method="post">
              <div class="form-group">
                <label for="name">
                  Nome
                </label>
                <input type="text" placeholder="" name="name" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">
                  Email
                </label>
                <input type="text" placeholder="" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Telefone
                </label>
                <input type="text" name="phone" id="phone" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone">
                  Assunto
                </label>
                <select name="assunto" id="assunto" class="form-control">
                    <option value="Suporte Tecnico">Suporte Técnico</option>
                    <option value="Ouvidoria">Ouvidoria</option>
                    <option value="Comercial">Comercial</option>
                    <option value="Financeiro">Financeiro</option>
                </select>
              </div>
              <div class="form-group">
                <label for="phone">
                  Mensagem
                </label>
                <textarea placeholder="" name="message" rows="5" class="form-control">
                </textarea>
              </div>
              <button class="btn btn-info" type="submit">
                Enviar
              </button>
              <br />
              <br />
              <br />
            </form>

          </div>
        </div>
      </div>

    </div>
    <!--container end-->

    <!--google map start-->
    <div class="contact-map">
      <div id="map-canvas" style="width: 100%; height: 400px">
      </div>
    </div>
    <!--google map end-->
    <?php
      break;
      case 'fibra':
      ?>
      <!--header end-->
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Internet Fibra</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                 <?php 
                      echo breadcrumb();
                      ?>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--container start-->
    <div class="gray-bg price-container">
      <div class="container">


        <div class="row mar-b-30">
            <!--price start-->
            <div class="text-center price-one">
                <h1 class="wow flipInX"> A maior cobertura de rede óptica da cidade </h1>
                <p class="wow fadeIn">* Desconto de R$10,00 para pagamentos até o dia do vencimento da fatura </p>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="pricing-table wow fadeInUp">
                    <div class="pricing-head">
                        <h1> 5 MB </h1>
                        <h2>
                            <span class="note">R$</span>109,90</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li>IP válido dinâmico</li>
                        <li>30% da velocidade garantida em medições instantâneas</li>
                        <li>70% da velocidade garantida média mensal</li>
                        <li>Melhor custo beneficio</li>
                        <li>Suporte técnico telefônico 24horas</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="pricing-table wow fadeInUp">
                    <div class="pricing-head">
                        <h1> 10 MB </h1>
                        <h2>
                            <span class="note">R$</span>129,90</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li>IP válido dinâmico</li>
                        <li>30% da velocidade garantida em medições instantâneas</li>
                        <li>70% da velocidade garantida média mensal</li>
                        <li>Melhor custo beneficio</li>
                        <li>Suporte técnico telefônico 24horas</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="pricing-table most-popular wow fadeInUp">
                    <div class="pricing-head">
                        <h1> 15 MB </h1>
                        <h2>
                            <span class="note">R$</span>159,90</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li>IP válido dinâmico</li>
                        <li>30% da velocidade garantida em medições instantâneas</li>
                        <li>70% da velocidade garantida média mensal</li>
                        <li>Melhor custo beneficio</li>
                        <li>Suporte técnico telefônico 24horas</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="pricing-table wow fadeInUp">
                    <div class="pricing-head">
                        <h1> 20 MB </h1>
                        <h2>
                            <span class="note">R$</span>199,90</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li>IP válido dinâmico</li>
                        <li>30% da velocidade garantida em medições instantâneas</li>
                        <li>70% da velocidade garantida média mensal</li>
                        <li>Melhor custo beneficio</li>
                        <li>Suporte técnico telefônico 24horas</li>
                    </ul>
                </div>
            </div>
            <!--price end-->
        </div>
      </div>
    </div>
    <!--container end-->
      <?php
        # code...
        break;
        case 'radio':
          ?>                
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Internet Rádio</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                 <?php 
                      echo breadcrumb();
                      ?>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->
    <!--container start-->
    <div class="gray-bg price-container">
      <div class="container">
        <div class="row mar-b-30">
            <!--price start-->
            <div class="text-center price-one">
                <h1 class="wow flipInX"> A maior cobertura de sinal da cidade </h1>
                <p class="wow fadeIn">Técnicos especializados realizam a instalação da antena em sua casa ou empresa e configuram o acesso rapidamente, o suporte técnico é rapido e descomplicado.</p>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="pricing-table wow fadeInUp">
                    <div class="pricing-head">
                        <h1> 1 MB </h1>
                        <h2>
                            <span class="note">R$</span>57,00</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li>IP válido dinâmico</li>
                        <li>30% da velocidade garantida em medições instantâneas</li>
                        <li>70% da velocidade garantida média mensal</li>
                        <li>Melhor custo beneficio</li>
                        <li>Tecnologia MIMO</li>
                        <li>Suporte técnico telefônico 24horas</li>
                        <li>Enlace de rádio compartilhado (PTPMP) </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="pricing-table wow fadeInUp">
                    <div class="pricing-head">
                        <h1> 2 MB </h1>
                        <h2>
                            <span class="note">R$</span>67,00</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li>IP válido dinâmico</li>
                        <li>30% da velocidade garantida em medições instantâneas</li>
                        <li>70% da velocidade garantida média mensal</li>
                        <li>Melhor custo beneficio</li>
                        <li>Tecnologia MIMO</li>
                        <li>Suporte técnico telefônico 24horas</li>
                        <li>Enlace de rádio compartilhado (PTPMP) </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="pricing-table most-popular wow fadeInUp">
                    <div class="pricing-head">
                        <h1> 3 MB </h1>
                        <h2>
                            <span class="note">R$</span>77,00</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li>IP válido dinâmico</li>
                        <li>30% da velocidade garantida em medições instantâneas</li>
                        <li>70% da velocidade garantida média mensal</li>
                        <li>Melhor custo beneficio</li>
                        <li>Tecnologia MIMO</li>
                        <li>Suporte técnico telefônico 24horas</li>
                        <li>Enlace de rádio compartilhado (PTPMP) </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="pricing-table wow fadeInUp">
                    <div class="pricing-head">
                        <h1> 4 MB </h1>
                        <h2>
                            <span class="note">R$</span>87,00</h2>
                    </div>
                    <ul class="list-unstyled">
                        <li>IP válido dinâmico</li>
                        <li>30% da velocidade garantida em medições instantâneas</li>
                        <li>70% da velocidade garantida média mensal</li>
                        <li>Melhor custo beneficio</li>
                        <li>Tecnologia MIMO</li>
                        <li>Suporte técnico telefônico 24horas</li>
                        <li>Enlace de rádio compartilhado (PTPMP) </li>
                    </ul>
                </div>
            </div>
            <!--price end-->
        </div>
      </div>
    </div>
    <!--container end-->  
          <?php
          break;
    default:
    echo '<div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          Tela não existe!
        </div>';
    break;
}