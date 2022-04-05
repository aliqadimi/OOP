<?php
namespace Exporter;

interface Exportable{
    public function export();
}
interface Importable{
    public function import();
}

abstract class Exporter implements Exportable{
    protected $format;
    protected $data;

    public function __construct($data){
        $this->data = $data;
        if(!$this->is_valid()){
            die("Invalid Data!");
        }
    }
    public function is_valid(){
        foreach($this->data as $field){
            if(empty($field)){
                return false;
            }
        }
        return true;
    }
}