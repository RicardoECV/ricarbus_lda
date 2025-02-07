<?php 

  function getContacts() {
    $result = selectSQLUnique("SELECT * FROM contacts");
    return $result;
  }

?>