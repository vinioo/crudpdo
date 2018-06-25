<?php
include 'connect.php';

$conn = getConnection();

$sql = 'UPDATE produto SET descricao = :descr, qtd = :qtd,valor = :valor WHERE id = :id';

$descricao = 'Feijao ';
$qtd = 12;
$valor = 10.80;
$id = 2;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':descr',$descricao);
$stmt->bindParam(':qtd',$qtd);
$stmt->bindParam(':valor',$valor);
$stmt->bindParam(':id',$id);

if($stmt->execute()){
  echo "Atualizado Com Sucesso!";
}else {
  echo "Erro ao salvar";
}


?>
