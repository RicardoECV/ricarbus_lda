<?php

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  $data_base = [
    "host" => $_ENV['DB_HOST'],
    "dbname" => $_ENV['DB_DATABASE'],
    "user" => $_ENV['DB_USERNAME'],
    "password" => $_ENV['DB_PASSWORD']
  ];

  $conection = new PDO("mysql:host=$data_base[host];dbname=$data_base[dbname];charset=utf8mb4;", $data_base["user"], $data_base["password"]);

  function selectSQL($sql) {
    global $conection;  
    $query = $conection->query($sql);
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }

  function selectSQLUnique($sql) {
    global $conection;  
    $query = $conection->query($sql);
    return $query->fetch(PDO::FETCH_ASSOC);
  }

  function iduSQL($sql) {
    global $conection;  
    $conection->query($sql);  
  }

?>