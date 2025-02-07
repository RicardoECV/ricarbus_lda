<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ricarbus Transporte de Passageiros Lda</title>
  <link rel="icon" type="image/x-icon" href="public/logos/icons8-bus-80.png">
  

  <!-- Script Recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Local Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Local Fonts CSS -->
  <link rel="stylesheet" href="public/fonts/stylesheet.css">
  
  <!-- Local CSS -->
  <link rel="stylesheet" href="public/css/style.css">

  <!-- Local JS -->
  <script src="public/js/main.js" defer></script>
</head>

<body>  
  <!-- Header -->
  <header class="container-fluid">

    <div class="row">

      <!-- Navbar -->
      <div class="col-12 start-0 position-absolute p-0">

        <nav class="navbar navbar-expand mt-lg-5 header-navbar">
          <div class="container-fluid">                        
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav mb-0 align-items-center gap-3 gap-lg-5">
                <li class="nav-item">
                  <a class="nav-link header-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link header-logo" href="index.php">
                    Ricarbus Lda
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link header-link" href="#" onclick="scrollContacts()">
                    Contactos
                  </a>
                </li>                            
              </ul>              
            </div>
          </div>
        </nav>
        
        <?php if($form_2): ?>
          <div class="col-12 text-center text-success">
            <h3>Email Enviado com Sucesso</h3>
          </div>
        <?php endif; ?>

        <?php if($recap): ?>
          <div class="col-12 text-center text-danger">
            <h3>Preencha o Recaptcha</h3>
          </div>
        <?php endif; ?>
        
      </div>   

      <!-- Banner -->
      <div class="col-12 p-0">
        <img class="header-banner-img w-100" src="public/images/bus_banner.jpg" alt="White Bus Banner">
      </div>
    </div>

  </header>
  <!-- End Header -->