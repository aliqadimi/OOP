<?php
include_once 'BaseModel.php';
class Folder extends BaseModel
{
    protected $table = 'folders';
}

$folderModel = new Folder();
$data = $folderModel->find(28); 
var_dump($data);