<?php
$dsn = 'mysql:dbname=test;host=localhost:3306';
$user = 'root';
$password = '';

$entrada="sea";

$db = new PDO($dsn, $user, $password);
$stmt = $db->prepare("CALL agregar_pedido(?)");
$stmt->bindValue(1, $entrada, PDO::PARAM_STR);
$rs = $stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
?>

