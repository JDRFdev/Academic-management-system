<?php
require_once "User.php";
require_once "Activity.php";

class Group {
    private ?int $id;
    private string $name;
    private string $description;
    private User $creator;  
    private array $members;  
    private array $activities;  
    
    public function __construct(
        string $name,
        string $description,
        User $creator,
        ?int $id = null,
        array $members = [],
        array $activities = []
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->creator = $creator;
        $this->members = $members;
        $this->activities = $activities;
    }
    
    public function getId(): ?int {
        return $this->id;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getDescription(): string {
        return $this->description;
    }
    
    public function getCreator(): User {
        return $this->creator;
    }
    
    public function getMembers(): array {
        return $this->members;
    }
    
    public function getActivities(): array {
        return $this->activities;
    }
    
    public function setId(int $id): void {
        $this->id = $id;
    }
    
    public function setName(string $name): void {
        $this->name = $name;
    }
    
    public function setDescription(string $description): void {
        $this->description = $description;
    }
    
    public function setCreator(User $creator): void {
        $this->creator = $creator;
    }
    
    public function setMembers(array $members): void {
        $this->members = $members;
    }
    
    public function setActivities(array $activities): void {
        $this->activities = $activities;
    }
    
}
?>