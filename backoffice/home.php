<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "home";
  
  $user = checkLogin();

  require_once("components/header.php");
  require_once("views/home_view.php");
  require_once("components/footer.php");

?>