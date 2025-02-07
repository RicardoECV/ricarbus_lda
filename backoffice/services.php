<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "services";
  $services = getServices();
  
  $user = checkLogin();  

  require_once("components/header.php");
  require_once("views/services_view.php");
  require_once("components/footer.php");

?>