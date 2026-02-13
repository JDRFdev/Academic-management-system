<?php
class User {
    private ?int $id;
    private string $email;
    private string $name;
    private string $rol;
    private string $password;
    
    public function __construct(
        string $email,
        string $name,
        string $rol,
        string $password,
        ?int $id = null
    ) {
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->rol = $rol;
        $this->password = $password;
    }
    
   
    public function getId(): ?int {
        return $this->id;
    }
    
    public function getEmail(): string {
        return $this->email;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getRol(): string {
        return $this->rol;
    }
    
    public function getPassword(): string {
        return $this->password;
    }
    
 
    public function setId(int $id): void {
        $this->id = $id;
    }
    
    public function setEmail(string $email): void {
        $this->email = $email;
    }
    
    public function setName(string $name): void {
        $this->name = $name;
    }
    
    public function setRol(string $rol): void {
        $this->rol = $rol;
    }
    
    public function setPassword(string $password): void {
        $this->password = $password;
    }
}
?>