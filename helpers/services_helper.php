<?php 

  function getServices() {
    $result = selectSQL("SELECT * FROM services");
    return $result;
  }

  function getUniqueService($id) {
    $result = selectSQLUnique("SELECT * FROM services WHERE id=$id");
    return $result;
  }

?>