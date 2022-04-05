<?php
include_once 'BaseModel.php';
class Task extends BaseModel
{
    protected $table = 'tasks';
}

$taskModel = new Task(); 
$data = $taskModel->find(31);
var_dump($data);