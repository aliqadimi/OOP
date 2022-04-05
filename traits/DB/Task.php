<?php
include_once 'BaseModel.php';
include_once 'traits/HasViewCount.php';

class Task extends BaseModel
{
    protected $table = 'tasks';

    use HasViewCount;

}

$task_id = 31;
$taskModel = new Task(); 
$data = $taskModel->find($task_id);
$taskModel->addViewCount($task_id);
var_dump($data);