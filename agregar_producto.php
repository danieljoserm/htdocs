<?php
$dsn = 'mysql:dbname=rest;host=localhost:3306';
$user = 'root';
$password = '';

$id_cat=1;
$nombre="pollo en salsa blanca";
$precio="3200";

$db = new PDO($dsn, $user, $password);
$stmt = $db->prepare("CALL agregar_producto_simple(?,?,?)");
$stmt->bindValue(1, $id_cat, PDO::PARAM_INT);
$stmt->bindValue(2, $nombre, PDO::PARAM_STR);
$stmt->bindValue(3, $precio, PDO::PARAM_STR);
$rs = $stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);
?>

