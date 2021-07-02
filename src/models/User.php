<?php

class User{
    private $emial;
    private $password;
    private $name;
    private $surname;
    private $phone;
    private $enabled;
    private $salt;
    private $created_dt;
    private $Role;

    public function __construct($emial, $password, $name, $surname, $phone, $enabled, $salt, $created_dt,$Role)
    {
        $this->emial = $emial;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->enabled = $enabled;
        $this->salt = $salt;
        $this->created_dt = $created_dt;
        $this->Role = $Role;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone): string
    {
        $this->phone = $phone;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled): bool
    {
        $this->enabled = $enabled;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt): string
    {
        $this->salt = $salt;
    }

    public function getCreatedDt()
    {
        return $this->created_dt;
    }

    public function setCreatedDt($created_dt): Date
    {
        $this->created_dt = $created_dt;
    }
    public function gerRole()
    {
        return $this->Role;
    }

    public function setRole($Role)
    {
        $this->Role = $Role;
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