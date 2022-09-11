<?php
class Model{
    protected static $tablename = '';
    protected static $columns = [];
    protected $values = []; //não é estático, pq é pra cada instância criada

    function __construct($arr){
        $this->loadFromArray($arr);
    }

    public function loadFromArray($arr){
        if($arr){
            foreach($arr as $key => $value){
                $this->$key = $value;
            }
        }
    }


    //métodos mágicos para facilitar o acesso a informações do array
    public function __get($key){
        return $this->values[$key];
    }

    public function __set($key, $value){
        $this->values[$key] = $value;
    }
}