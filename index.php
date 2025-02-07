<?php

  require_once("requires.php");
  
  $home_page = getHomePage();
  $services = getServices();
  $valors = getValors();
  $contacts = getContacts();
  $recap = false;
  $form_2 = false;

  $form = !empty($_POST["contact_name"]) && !empty($_POST["contact_mail"]) && !empty($_POST["contact_subject"]);  
  $form = $form && !empty($_POST["msg_text"]) && isset($_POST["copy_mail"]);

  if($form) {
    $g_recaptcha_response = $_POST["g-recaptcha-response"];
    $secret_key = "6LdForIqAAAAABOkhPaG6kwn1hQ7ozjuLEpZ2fYU";
    $g_response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$g_recaptcha_response");
    $google = json_decode($g_response);    
    

    if($google->success) {
      $contact_name = htmlspecialchars($_POST["contact_name"]);
      $contact_subject = htmlspecialchars($_POST["contact_subject"]);
      $contact_mail = htmlspecialchars($_POST["contact_mail"]);
      $contact_msg = htmlspecialchars($_POST["msg_text"]);
      
      $html_code = "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\n";

      $mensage = "De: ".$contact_name;  
      $mensage .= "<br>Email: ".$contact_mail;
      $mensage .= "<br>Assunto: ".$contact_subject;
      $mensage .= "<br><br>Mensagem:<br>".$contact_msg;

      $mail_to = "ricarbus@sapo.pt";

      if($_POST["copy_mail"]) {
        $mail_to .= ", ".$contact_mail;      
      }   
      $form_2 = mail($mail_to ,$contact_subject, $mensage, $html_code);
    }

    else {$recap = true;}
    
  }
  
  require_once("components/header.php");
  require_once("views/index_view.php");
  require_once("components/footer.php");
 
?>