<?php
class Dados{
// dbection
private $db;
// Table
private $db_table = "crud";
// Columns
public $id;
public $nome;
public $data;
public $numero;

// Db dbection
public function __construct($db){
$this->db = $db;
}

// GET ALL
public function pegarDados(){
$sqlQuery = "SELECT id, nome, data, numero FROM " . $this->db_table . "";
$this->result = $this->db->query($sqlQuery);
return $this->result;
}

// CREATE
public function criaDado(){
// sanitize
$this->nome=htmlspecialchars(strip_tags($this->nome));
$this->data=htmlspecialchars(strip_tags($this->data));
$this->numero=htmlspecialchars(strip_tags($this->numero));
$sqlQuery = "INSERT INTO
". $this->db_table ." SET nome = '".$this->nome."',
data = '".$this->data."',
numero = '".$this->numero."'";
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// UPDATE
public function pegarUmDado(){
$sqlQuery = "SELECT id, nome, data, numero FROM
". $this->db_table ." WHERE id = ".$this->id;
$record = $this->db->query($sqlQuery);
$dataRow=$record->fetch_assoc();
$this->nome = $dataRow['nome'];
$this->data = $dataRow['data'];
$this->numero = $dataRow['numero'];
}

// UPDATE
public function atualizarDado(){
$this->nome=htmlspecialchars(strip_tags($this->nome));
$this->data=htmlspecialchars(strip_tags($this->data));
$this->numero=htmlspecialchars(strip_tags($this->numero));
$this->id=htmlspecialchars(strip_tags($this->id));

$sqlQuery = "UPDATE ". $this->db_table ." SET nome = '".$this->nome."',
data = '".$this->data."',
numero = '".$this->numero."'
WHERE id = ".$this->id;

$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// DELETE
function deletarDado(){
$sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ".$this->id;
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}
}
?>