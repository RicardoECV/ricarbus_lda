<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "contacts";
  
  $user = checkLogin();
  $contacts = getContacts();

  require_once("components/header.php");
  require_once("views/contacts_view.php");
  require_once("components/footer.php");

?>