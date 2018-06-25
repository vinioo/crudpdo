<?php

include 'connect.php';

$conn = getConnection();

$sql = 'DELETE FROM produto WHERE id = :id';

$id = 5;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id',$id);

if($stmt->execute()){
  echo "Excluido Com Sucesso!";
}else {
  echo "Erro ao Excluir";
}




 ?>
