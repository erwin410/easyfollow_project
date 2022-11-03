<?php

class User{
    // dbection
    private $db;
    // Table
    private $db_table = "users";
    // Columns
    public $id;
    public $name;
    public $pseudo;
    public $age;
    
    
    
    // Db dbection
    public function __construct($db){
    $this->db = $db;
    }
    
    // GET ALL
    public function getEmployees(){

    $sqlQuery = "SELECT id, name, pseudo, age FROM " . $this->db_table . "";
    $this->result = $this->db->query($sqlQuery);

    return $this->result;
    }
    
    // CREATE
    public function createEmployee(){
    // sanitize
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->pseudo=htmlspecialchars(strip_tags($this->pseudo));
    $this->age=htmlspecialchars(strip_tags($this->age));

    $sqlQuery = "INSERT INTO
    ". $this->db_table ." SET name = '".$this->name."',
    pseudo = '".$this->pseudo."',
    age = '".$this->age."'";
    $this->db->query($sqlQuery);
    if($this->db->affected_rows > 0){
    return true;
    }
    return false;
    }
    
    // SINGLE USER
    public function getSingleEmployee()
    {

    $sqlQuery = "SELECT id, name, pseudo, age FROM
    ". $this->db_table ." WHERE id = ".$this->id;

    $record = $this->db->query($sqlQuery);
    $dataRow=$record->fetch_assoc();
    
    $this->name = $dataRow['name'];
    $this->pseudo = $dataRow['pseudo'];
    $this->age = $dataRow['age'];
    }
    
    // UPDATE
    public function updateEmployee(){
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->pseudo=htmlspecialchars(strip_tags($this->pseudo));
    $this->age=htmlspecialchars(strip_tags($this->age));
    $this->id=htmlspecialchars(strip_tags($this->id));
    
    $sqlQuery = "UPDATE ". $this->db_table ." SET name = '".$this->name."',
    pseudo = '".$this->pseudo."',
    age = '".$this->age."'
    WHERE id = ".$this->id;
    
    $this->db->query($sqlQuery);
    if($this->db->affected_rows > 0){
    return true;
    }
    return false;
    }
    
    // DELETE
    function deleteEmployee(){
    $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ".$this->id;
    $this->db->query($sqlQuery);
    if($this->db->affected_rows > 0){
    return true;
    }
    return false;
    }
    }