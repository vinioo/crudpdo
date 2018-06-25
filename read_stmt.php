<?php
  include 'connect.php';

  $conn = getConnection();

  $sql = " SELECT * FROM produto";

  $stmt = $conn->prepare($sql);
  // $stmt->bindValue( );
  $stmt->execute();

  $result = $stmt->fetchAll();




 ?>
