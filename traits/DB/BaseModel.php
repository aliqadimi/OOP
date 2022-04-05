<?php
abstract class BaseModel
{
    protected $db;
    protected $table;
    protected $primaryKey = 'id';

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:dbname=viewcountexample;host=localhost", 'root', '');
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    public function find($id){
        $sql = "select * from {$this->table} where {$this->primaryKey} = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function update($data){
        # code for update a model
    }

    public function create($data){
        # code for create a model
    }
    public function delete($id){
        $sql = "delete from {$this->table} where {$this->primaryKey} = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->rowCount();
    }

}