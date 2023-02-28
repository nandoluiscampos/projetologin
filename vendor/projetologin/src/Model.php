<?php

namespace Main;


class Model
{
    private $values = [];

    public function __call($name,$args) 
    {
        $method = substr($name, 0, 3);

        $fielName = substr($name, 3, strlen($name));

        switch ($method) {
            case 'set':
                $this->values[$fielName] = $args[0];
                break;
            
            case 'get':
                return (isset($this->values[$fielName])) ? $this->values[$fielName] : NULL;
                break;
        }

    }


    public function setData($data = array())
    {
        foreach ($data as $key => $value)
        {
            $this->{"set".$key}($value);
        }


    }


    public function getData()
    {
        return  $this->values;

    }


}






?>