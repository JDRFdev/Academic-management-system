<?php
class User {
    private $id;
    private $email;
    private $name;
    private $rol;
    private $password;
    
    public function __construct($id = null, $email = null, $name = null, $rol = null, $password = null) {
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->rol = $rol;
        $this->password = $password;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getPassword(){
        return $this->password;
    }

    public function getRol() {
        return $this->rol;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setRol($rol) {
        $this->rol = $rol;
    }
    
    public function setPassword($password){
        $this->password=$password;
    }

    
}
?>