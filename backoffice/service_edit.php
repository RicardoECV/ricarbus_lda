<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "services";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $unique_service = getUniqueService($id);

    $form_2 = !empty($_GET["titulo"]) && !empty($_GET["texto"]) && !empty($_GET["imagem"]); 
    
    if($form_2) {
      $titulo = $_GET["titulo"];
      $texto = $_GET["texto"];
      $imagem = $_GET["imagem"];

      iduSQL("UPDATE services SET editor_id='$user[id]', title='$titulo', card_text='$texto', img='$imagem' WHERE id=$id");
      $unique_service = getUniqueService($id);
    }    
  }
 
  require_once("components/header.php");
  require_once("views/service_edit_view.php");
  require_once("components/footer.php");

?>