<?php
  echo "Testando Conexão <br /> <br />";

  $servername = "192.168.3.27";
  $username = "phpuser";
  $password = "pass";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password);
  
  // Check connection
  if ($conn->connect_error) {
      die("Conexão Falhou: " . $conn->connect_error);
  }
  
  echo "Conectado com Sucesso!";
?>
