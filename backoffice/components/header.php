<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backoffice</title>

  <!-- CSS Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- CSS Local -->
  <link rel="stylesheet" href="public/css/style_backoffice.css"> 

  <!-- JS Local -->
  <script src="public/js/main_backoffice.js" defer></script>

  <!-- Editor de Texto -->
  <script src="https://cdn.tiny.cloud/1/5z7av92t5br6bsn1ajdi3rum9s2wwjxjlu8och48b46zfa4v/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script> 
</head>
<body>

  <?php if($header_footer): ?>

    <!-- Header -->
    <header class="container-fluid">
      <div class="row">

        <!-- Navbar -->
        <div class="col-12 p-0"> 
          <nav class="navbar navbar-expand-lg bg-success navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Backoffice</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                  <li class="nav-item">
                    <a class="nav-link <?= ($pagina_backoffice == "home") ? "active" : "" ; ?>" aria-current="page" href="home.php">Home</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link <?= ($pagina_backoffice == "principal") ? "active" : "" ; ?>" href="principal.php">Página Principal</a>
                  </li>    
                  <li class="nav-item">
                    <a class="nav-link <?= ($pagina_backoffice == "services") ? "active" : "" ; ?>" href="services.php">Serviços</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($pagina_backoffice == "valors") ? "active" : "" ; ?>" href="valors.php">Valores</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link <?= ($pagina_backoffice == "contacts") ? "active" : "" ; ?>" href="contacts.php">Contactos</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                  </li>                
                </ul>              
              </div>
              <div class="text-white me-4">
                Bem Vindo(a) <?= $user["name"]; ?>                
              </div>
              <div class="horas text-white">                
              </div>
            </div>
          </nav>
        </div>

      </div>
    </header>
    
  <?php endif; ?>
