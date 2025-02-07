<?php 

  function getHomePage() {
    $result = selectSQLUnique("SELECT * FROM home_page");
    return $result;
  }

?>