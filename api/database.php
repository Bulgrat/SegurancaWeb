<?php
class Database {
public $db;
public function conectaBanco(){
$this->db = null;
try{
$this->db = new mysqli('localhost','root','','apicrud');
}catch(Exception $e){
echo "Não conseguiu conectar ao banco: " . $e->getMessage();
}
return $this->db;
}
}
?>