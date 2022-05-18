<?php
namespace App\Model;
class ProfesseurClasse{
  
    public function __construct(){
        self::$table = 'professeur_classe';
    }

    public function classes():array
    {
        return [];
    }

    public function professeurs():array
    {
        return [];
    }
}