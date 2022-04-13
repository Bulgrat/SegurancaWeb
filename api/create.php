<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once './database.php';
include_once './dados.php';
$database = new Database();
$db = $database->conectaBanco();
$item = new Dados($db);


$item->nome = $_GET['nome'];
$item->data = date('Y-m-d H:i:s');
$item->numero = $_GET['numero'];
if($item->criaDado()){
echo 'Dado criado com sucesso.';
} else{
echo 'Dado não pode ser criado.';
}
?>