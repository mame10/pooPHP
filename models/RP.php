<?php
namespace App\Models;
use App\Config\Constantes;
class RP extends User{
    private string $grade;

    public function __construct()
    {
        $this->role=Constantes::ROLE_RP;
    }

    public function classes():array
    {
        return [];
    }

    public function modules():array
    {
        return [];
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade(string $grade):self
    {
        $this->grade = $grade;

        return $this;
    }
}