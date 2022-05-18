<?php
namespace App\Model;
use App\Config\Constantes;
class Professeur extends Personne{
    private string $grade;
    
    public function __construct()
    {
        parent::$role=Constantes::ROLE_PROFESSEUR;
    }

    public static function findAll():array{
        //$sql="select * from personne where role like {self::$role}";
        $sql="select * from ".self::$table." where role like `".self::$role."`";
        return [];
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