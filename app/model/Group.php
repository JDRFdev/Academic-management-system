<?php
require_once "User.php";

class Group {
    private $id;
    private $name;
    private $description;
    private $User;
    
    public function __construct($id = null, $name = null, $description = null, $User = null) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->User = $User;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function getUser() {
        return $this->User;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function setDescription($description) {
        $this->description = $description;
    }
    
    public function setUser($User) {
        $this->User = $User;
    }
}
?>