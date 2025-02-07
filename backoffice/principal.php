<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "principal";
  
  $user = checkLogin();
  $home_page_info = getHomePage();

  require_once("components/header.php");
  require_once("views/principal_view.php");
  require_once("components/footer.php");

?>