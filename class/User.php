<?php

class User {
    private $username;
    private $email;
    private $password;

    function __construct($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    function getUsername(){
        return $this->username;
    }

    function setUsername($username){
        $this->username = $username;
    }
    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getPassword(){
        return $this->password;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function convertToArray(){
        $tableauValeur = [$this->username,$this->email,$this->password];
        print_r($tableauValeur);
        return $tableauValeur;
        }
}

?>