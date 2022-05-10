<?php
namespace App\Models;
use App\Config\Constantes;
class Professeur extends Personne{
    private string $grade;
    
    public function __construct()
    {
        $this->role=Constantes::ROLE_PROFESSEUR;
    }

    public function classes():array
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
    public function setGrade($grade):self
    {
        $this->grade = $grade;

        return $this;
    }
}