
  <!-- Footer -->
  <footer class="container-fluid mt-5 footer-img">

    <div class="row justify-content-center my-4 py-3 py-md-5">

      <div class="col-12 text-center mb-md-5 contact-col">
        <h2 class="contacts-title">Contacte-nos</h2>
      </div>  

      <div class="col-md-3 col-5 text-center mt-4 mt-lg-0"> 
        <a href="tel:<?= $contacts["phonenumber"]; ?>">
          <img class="mb-3" src="public/logos/icons8-phone-50.png" alt="Phone Logo">
        </a>        
        <h4 class="contact-info">
          <a href="tel:<?= $contacts["phonenumber"]; ?>" class="text-decoration-none text-black">
            <?= $contacts["phonenumber"]; ?>
          </a>          
        </h4>
      </div>

      <div class="col-md-3 col-5 text-center mt-4 mt-lg-0"> 
        <a href="mailto:<?= $contacts["email"]; ?>">
          <img class="mb-3" src="public/logos/icons8-gmail-logo-50.png" alt="Mail Logo">
        </a> 
        <h4 class="contact-info">
          <a href="mailto:<?= $contacts["email"]; ?>" class="text-decoration-none text-black"><?= $contacts["email"]; ?></a>
        </h4> 
      </div>

      <div class="col-md-3 col-5 text-center mt-4 mt-lg-0"> 
        <a href="<?= $contacts["facebook"]; ?>" target="_blank">
          <img class="mb-3" src="public/logos/icons8-facebook-50.png" alt="Facebook Logo">
        </a>        
        <h4 class="contact-info">
          <a class="text-decoration-none text-black" href="<?= $contacts["facebook"]; ?>">
            <?= $contacts["text_facebook"]; ?>
          </a>          
        </h4>
      </div>

      <div class="col-md-3 col-5 text-center mt-4 mt-lg-0"> 
        <img class="mb-3" src="public/logos/icons8-exterior-50.png" alt="House Logo">
        <h4 class="contact-info"><?= $contacts["adress"]; ?></h4>
      </div>

    </div>

    <form class="row justify-content-center" method="post">

      <div class="col-12 text-center my-4">
        <h3 class="contact-form-title">Formulário de Contacto</h3>
      </div>

      <div class="col-lg-6 col-11 text-center text-lg-end">
        <input class="input-contact" type="text" name="contact_name" placeholder="Nome do Contacto" required>
        <br><br>
        <input class="input-contact" type="text" name="contact_subject" placeholder="Assunto">
        <br><br>
        <input class="input-contact" type="email" name="contact_mail" placeholder="Email" required>        
      </div>

      <div class="col-lg-6 col-11 text-center text-lg-start mt-lg-0 mt-4">
        <textarea class="input-contact-mensage" name="msg_text" id="" placeholder="Mensagem"></textarea>
      </div>

      <div class="col-lg-3 col-11 px-4 mt-2 text-center text-lg-end"> 
        <input type="hidden" name="copy_mail" value="0">       
        <input type="checkbox" name="copy_mail" id="copy_mail" value="1">
        <label for="copy_mail" class="d-inline form-contact-copy">Selecione se desejar receber cópia do formulário no seu e-mail.</label>
      </div>      

      <div class="col-lg-3 col-10 mt-2 d-lg-block d-flex justify-content-center">
        <div class="g-recaptcha" data-sitekey="6LdForIqAAAAAED1e72ce40a6w0mLHFmXJC_Lf2t"></div>        
      </div>

      <div class="col-12 text-center my-4">
        <button class="btn btn-primary border-1 border border-black">Enviar</button>
      </div>

    </form>
    
    <div class="row text-white">
      <div class="col-12 text-center my-4">
        <div>Ricardo Valente Copyright &copy <?= date("Y"); ?></div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->
  
</body>
</html>