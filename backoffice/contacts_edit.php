<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "contacts";
  
  $user = checkLogin();   
  $contacts = getContacts();

  $form = !empty($_GET["morada"]) && !empty($_GET["telefone"]) && !empty($_GET["text_facebook"]) && !empty($_GET["email"]) && !empty($_GET["facebook"]); 
  
  if($form) {
    $morada = $_GET["morada"];
    $telefone = $_GET["telefone"];
    $text_facebook = $_GET["text_facebook"]; 
    $email = $_GET["email"];     
    $facebook = $_GET["facebook"];     
    
    iduSQL("UPDATE contacts SET editor_id='$user[id]', adress='$morada', phonenumber='$telefone', email='$email', text_facebook='$text_facebook', facebook='$facebook'");
    $contacts = getContacts();
  }
   
  require_once("components/header.php");
  require_once("views/contacts_edit_view.php");
  require_once("components/footer.php");

?>