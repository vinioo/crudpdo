<?php

  include 'connect.php';

  $conn = getConnection();

  $sql = "INSERT INTO produto (descricao,qtd,valor) VALUES ('Arroz',30,'4.50')";

  if($conn->exec($sql)){
    echo "Salvo Com Sucesso";
  }else {
    echo "Erro ao Salvar";
  }

 ?>
