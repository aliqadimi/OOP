<?php

trait hasName
{
    private $name;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

trait toString
{
    public function toString()
    {
        $arr = get_object_vars($this);
        return implode(', ', $arr);
    }
    public function toStringPrint()
    {
        $arr = get_object_vars($this);
        echo implode(', ', $arr);
    }

}

trait ArrayOrJson
{
    public function asArray()
    {
        return get_object_vars($this);
    }
    public function asJson()
    {
        return json_encode($this->asArray());
    }

}

trait Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}
