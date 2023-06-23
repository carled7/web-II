<?php
require_once("./cabecalho.php");
?>

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="8000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active"
          style="background-image: url(assets/imagens/slideA.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Ofertas Especiais</h2>
              <p class="animate__animated animate__fadeInUp">Uma seção com quaisquer promoções ou descontos especiais atualmente oferecidos pelo escritório de contabilidade.</p>
              <a href="./redireciona.php" target="_blank"
              class="btn-get-started animate__animated animate__fadeInUp scrollto">
              <i class="bi bi-whatsapp"></i> <strong>ASSUMA O CONTROLE</strong></a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/imagens/slideC.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Blog</h2>
              <p class="animate__animated animate__fadeInUp">Um blog atualizado regularmente que aborda tópicos contábeis relevantes, incluindo leis fiscais, dicas financeiras e tendências do setor.</p>
              <a href="./redireciona.php" target="_blank" class="btn-get-started animate__animated animate__fadeInUp scrollto">
              <i class="bi bi-whatsapp"></i> <strong>ASSUMA O CONTROLE</strong></a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/imagens/slideB.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Histórias de Sucesso do Cliente</h2>
              <p class="animate__animated animate__fadeInUp">Uma série de estudos de caso ou histórias de sucesso que demonstram o valor dos serviços do escritório de contabilidade e os resultados que alcançaram para seus clientes.</p>
              <a href="./redireciona.php" target="_blank" class="btn-get-started animate__animated animate__fadeInUp scrollto">
              <i class="bi bi-whatsapp"></i> <strong>ASSUMA O CONTROLE</strong></a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <h4 class="title"><a href="">Financeiro</a></h4>
              <p class="description">Serviços financeiros especializados para ajudá-lo a alcançar o sucesso.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Registros</a></h4>
              <p class="description">Manutenção de registros abrangentes e relatórios financeiros.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Regulamentações</a></h4>
              <p class="description">Conformidade com as regulamentações e leis financeiras.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <span>01</span>
            <h4>Escrituração contábil e manutenção de registros financeiros</h4>
            <p>Mantendo registros precisos de transações financeiras, como despesas, receitas, ativos e passivos.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>02</span>
            <h4>Preparação de declarações financeiras</h4>
            <p>Preparando relatórios financeiros como balanços patrimoniais, demonstrações de resultados e demonstrações de fluxo de caixa para analisar a saúde financeira de uma empresa.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>03</span>
            <h4>Preparação e apresentação de declarações de impostos</h4>
            <p>Preparação e apresentação de declarações de impostos para garantir a conformidade com as leis fiscais, minimizar a responsabilidade fiscal e evitar penalidades.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>04</span>
            <h4>Gestão de folha de pagamento</h4>
            <p>Processamento de folha de pagamento de funcionários, retenção de impostos e outras questões de conformidade.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>05</span>
            <h4>Consultoria</h4>
            <p>Fornecimento de conselhos e orientações profissionais sobre questões financeiras, como orçamento, gestão de fluxo de caixa e estratégias de investimento.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>06</span>
            <h4>Serviços de auditoria e garantia</h4>
            <p>fornecimento de serviços de garantia que oferecem credibilidade às informações financeiras e garantem que as demonstrações financeiras estejam em conformidade com os princípios e normas contábeis.</p>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Nossos clientes</h2>
          <p>Em nosso escritório de contabilidade, temos orgulho em atender uma ampla variedade de clientes, desde pequenas empresas e startups até grandes corporações e organizações sem fins lucrativos. Nossa equipe de profissionais experientes está dedicada em fornecer serviços financeiros personalizados, adaptados às necessidades únicas de cada cliente, ajudando-os a alcançar o sucesso financeiro.</p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Assuma o controle</h3>
            <p> Assuma o controle das suas finanças e garanta seu futuro financeiro hoje mesmo - agende uma consulta com nossos contadores especializados para começar a maximizar seus lucros e minimizar suas despesas!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Assuma o controle</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Time</h2>
          <p>Nossa equipe de contadores experientes está comprometida em fornecer soluções financeiras personalizadas, adaptadas para atender às suas necessidades únicas. Com uma vasta quantidade de conhecimento e expertise, estamos dedicados a ajudá-lo a alcançar seus objetivos financeiros.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Valter Blanco</h4>
              <span>Contador</span>
              <p>
              Responsável por gerenciar registros financeiros, preparar declarações de impostos e fornecer conselhos financeiros aos clientes.
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sara Rodrigues</h4>
              <span>Escriturária</span>
              <p>
              Responsável por registrar transações financeiras, manter registros financeiros precisos e conciliar extratos bancários.
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>Daniel da Silva</h4>
              <span>Analista Financeiro</span>
              <p>
              Responsável por analisar dados financeiros, criar modelos financeiros e fornecer insights para ajudar os clientes a tomar decisões financeiras informadas.
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    

  </main><!-- End #main -->

  <?php
  require_once("./rodape.php");
  ?>