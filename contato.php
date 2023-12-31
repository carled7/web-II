<?php
require_once("./cabecalho.php");?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contatos</h2>
          <p>Entre em contato conosco para saber mais sobre nossos serviços contábeis personalizados. Nossa equipe está pronta para responder a todas as suas perguntas e ajudá-lo a alcançar o sucesso financeiro. Estamos disponíveis por telefone, e-mail ou através do formulário de contato em nosso site. Fale conosco hoje mesmo!</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localização:</h4>
                <p><?php echo $endereco?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $email?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefone:</h4>
                <p><?php echo $cel?></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="./enviar_contato.php" method="post" role="form" class="form-control">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Seu nome</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Seu email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Assunto</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Mensagem</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
              </div> -->
              <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

<?php
require_once("./rodape.php")?>