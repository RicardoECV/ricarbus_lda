<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "valors";
  
  $user = checkLogin();
  $valors = getValors();

  require_once("components/header.php");
  require_once("views/valors_view.php");
  require_once("components/footer.php");

?>