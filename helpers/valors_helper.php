<?php 

  function getValors() {
    $result = selectSQL("SELECT * FROM valors");
    return $result;
  }

  function getUniqueValor($id) {
    $result = selectSQLUnique("SELECT * FROM valors WHERE id=$id");
    return $result;
  }

?>