<?php

class User {
    private $id = 0;
    public $firstName;
    public $lastName;

    function setId($id){
        $this->id = $id;
    }
    
    function __construct($args = []){
        $this->id = $args['user_id'] ?? 0;
        $this->firstName = $args['user_first_name'] ?? "";
        $this->lastName = $args['user_last_name'] ?? "";
    }

    function is_valid(){
        if(!($this->id >= 0)){
            return false;
        }

        if(empty($this->firstName)){
            return false;
        }

        if(empty($this->lastName)){
            return false;
        }

        return true;
    }


}