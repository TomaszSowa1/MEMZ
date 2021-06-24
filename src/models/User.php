<?php

class User{
    private $emial;
    private $password;
    private $name;
    private $surname;

    public function __construct(string $emial,string $password,string $name,string $surname){
        $this->emial = $emial;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;

    }
    public function getEmail():string {
        return $this->emial;
    }
    public function getPassword():string{
        return $this->password;
    }
    public function getName():string{
        return $this->name;
    }
    public function getSurname():string{
        return $this->surname;
    }
    public function setEmail(string $email){
        $this->$email = $email;
    }
    public function setPassword(string $password){
        $this->$password = $password;
    }
    public function setName(string $name){
        $this->$name = $name;
    }
    public function setSurname(string $name){
        $this->$name = $name;
    }
}