<?php

trait HasViewCount{
    public function addViewCount($id){
        $sql = "update {$this->table} set viewcount = viewcount + 1 where {$this->primaryKey} = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->rowCount();
    }
    public function getViewCount($id){
        $data = $this->find($id);
        return $data->viewcount;
    }
}