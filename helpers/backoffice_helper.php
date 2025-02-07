<?php

  date_default_timezone_set('Europe/Lisbon');
  session_start();

  function getUserName($id) {
    $user_name = selectSQLUnique("SELECT name FROM backoffice WHERE id=$id");
    return $user_name;
  }

  function user_login ($login, $pw) {
    $user = selectSQLUnique("SELECT * FROM backoffice WHERE login='$login'");
    
    if(!empty($user)) {
      if(password_verify($pw, $user["pw"])) { 
        $_SESSION["user"] = $user;      
        iduSQL("UPDATE backoffice SET last_acess_date = CURRENT_TIMESTAMP WHERE id=$user[id]");
        header("Location: home.php");
      }   
      else {return false;}
    }
    
    else {return false;}
  }

  function checkLogin() {
    if(empty($_SESSION["user"])) {
      header("Location: index.php");
      exit();
    }
    else {return $_SESSION["user"];}    
  }

  function logout() {
    session_destroy();
    header("Location: index.php");
    exit();
  }

?>