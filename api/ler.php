<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once '../database.php';
include_once '../dados.php';
$database = new Database();

$db = $database->getConnection();
$items = new Dados($db);
$records = $items->pegarDados();
$itemCount = $records->num_rows;
echo json_encode($itemCount);
if($itemCount > 0){
$dadosArr = array();
$dadosArr["body"] = array();
$dadosArr["itemCount"] = $itemCount;
while ($row = $records->fetch_assoc())
{
array_push($dadosArr["body"], $row);
}
echo json_encode($dadosArr);
}
else{
http_response_code(404);
echo json_encode(
array("message" => "No record found.")
);
}
?>