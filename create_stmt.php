<?php
include 'connect.php';

$conn = getConnection();

$sql = 'INSERT INTO produto (descricao,qtd,valor) VALUES (:descr,:qtd,:valor)';

$descricao = 'Batata';
$qtd = 12;
$valor = 10.80;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':descr',$descricao);
$stmt->bindParam(':qtd',$qtd);
$stmt->bindParam(':valor',$valor);

if($stmt->execute()){
  echo "Salvo Com Sucesso!";
}else {
  echo "Erro ao salvar";
}


?>
