<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "valors";
  
  $user = checkLogin();  
  
  if(!empty($_GET["id"])) {
    $id = $_GET["id"];    
    $valor_unico = getUniqueValor($id);

    $form_2 = !empty($_GET["titulo"]) && !empty($_GET["imagem"]); 
    
    if($form_2) {
      $titulo = $_GET["titulo"];     
      $imagem = $_GET["imagem"];         
      
      iduSQL("UPDATE valors SET title='$titulo', img='$imagem', editor_id=$user[id] WHERE id=$id");
      $valor_unico = getUniqueValor($id);  
    }    
  }
 
  require_once("components/header.php");
  require_once("views/valor_edit_view.php");
  require_once("components/footer.php");

?>