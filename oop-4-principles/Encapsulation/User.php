<?php
class User{
    private $name;
    private $email;
    public function __construct($name,$email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(){
        return $this->name;
    }
    public function getNEmail(){
        return $this->email;
    }

}

class Notification{
    public function sendEmail($to,$subject,$content){
        # email($to,$subject,$content);
    }
    public function sendSms($to,$content){
        # code for sms
    }
}

class Math{
    public function sum($a,$b){
        return $a + $b;
    }
}

