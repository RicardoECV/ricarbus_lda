<?php

  $header_footer = true;

  require_once("../requires.php");
  $pagina_backoffice = "principal";
  
  $user = checkLogin();   
  $home_page_info = getHomePage();

  $form = !empty($_GET["title"]) && !empty($_GET["home_text"]) && !empty($_GET["sub_title_1"]) && !empty($_GET["sub_title_2"]); 
  
  if($form) {
    $title = $_GET["title"];
    $home_text = $_GET["home_text"];
    $sub_title_1 = $_GET["sub_title_1"]; 
    $sub_title_2 = $_GET["sub_title_2"];    
    
    iduSQL("UPDATE home_page SET editor_id='$user[id]', title='$title', home_text='$home_text', sub_title_1='$sub_title_1', sub_title_2='$sub_title_2'");
    $home_page_info = getHomePage();
  }
   
  require_once("components/header.php");
  require_once("views/principal_edit_view.php");
  require_once("components/footer.php");

?>