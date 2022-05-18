<?php
namespace App\Model;
use App\Config\Constantes;
class Etudiant extends User{
    private string $matricule;
    private string $adresse;
    private string $sexe;
    //constructeur 
    public function __construct()
    {
        parent::$role=Constantes::ROLE_ETUDIANT;
    }

    public static function findAll():array{
        //$sql="select * from personne where role like {self::$role}";
        $sql="select * from ".self::$table." where role like `".self::$role."`";
        echo $sql;
        return [];
    } 

    public function inscriptions():array
    {
        return [];
    }

    public function demandes():array
    {
        return [];
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule):self
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse):self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe):self
    {
        $this->sexe = $sexe;

        return $this;
    }
}