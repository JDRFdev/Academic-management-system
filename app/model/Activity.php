<?php
class Activity {
    private ?int $id;
    private string $name;
    private string $date;
    private string $hourStart;
    private string $hourFinish;
    
    public function __construct(
        string $name,
        string $date,
        string $hourStart,
        string $hourFinish,
        ?int $id=null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->hourStart = $hourStart;
        $this->hourFinish = $hourFinish;
    }
    
    public function getId(): ?int {
        return $this->id;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getDate(): string {
        return $this->date;
    }
    
    public function getHourStart(): string {
        return $this->hourStart;
    }
    
    public function getHourFinish(): string {
        return $this->hourFinish;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }
    
    public function setName(string $name): void {
        $this->name = $name;
    }
    
    public function setDate(string $date): void {
        $this->date = $date;
    }
    
    public function setHourStart(string $hourStart): void {
        $this->hourStart = $hourStart;
    }
    
    public function setHourFinish(string $hourFinish): void {
        $this->hourFinish = $hourFinish;
    }
}
?>