<?php

//Headers, These headers are need allowing a post request by the client.
header("Access-Control-Allow-Origin: *");//Header only need it for testing on the same pc with different servers
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: *");

//if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 $inputdata=json_decode(file_get_contents('php://input'));	
	
 //mysql server credentials 
 $dsn = 'mysql:dbname=rest;host=localhost:3306'; 
 $user = 'root';
 $password = '';

$usernumber=15;
$rest=2;

 //enable ssh access mysql xampp
 //GRANT ALL PRIVILEGES ON . TO root@'%' IDENTIFIED BY 'password';
//FLUSH PRIVILEGES;
 //FIRST INSERT THE PEDIDO, THEM INSERT EACH ITEM OF THE PEDIDO ONE BY ONE
 
 
 

 $database = new PDO($dsn, $user, $password);//initilizing the pdo connection.

 $stmt = $database->prepare("CALL send_order(?,?)");//adding the stored procedure to the pdo query
 $stmt->bindValue(1, $rest, PDO::PARAM_STR);
 $stmt->bindValue(2,$usernumber, PDO::PARAM_STR);
// $stmt->bindValue(1,$rest,PDO::PARAM_INT);//The restaurantID 
// $stmt->bindValue(2,$usernumber,PDO::PARAM_INT);
 $rs = $stmt->execute();
 $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
  echo json_encode($rows);
//}
?>