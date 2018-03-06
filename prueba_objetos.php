<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
//header("Access-Control-Allow-Headers: *");
//header("Content-Type:  application/json");


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  

$data = json_decode(file_get_contents('php://input'));
//$data='[{"type":"Andrea"},{"Edad":"14"},{"genero":"mujer"}]';
//$convertir=json_decode($data);
//foreach(


echo json_encode($data->{'color'});
//echo json_encode($data);



$json = '{
    "title": "JavaScript: The Definitive Guide",
    "author": "David Flanagan",
    "edition": 6
}';

}








?>