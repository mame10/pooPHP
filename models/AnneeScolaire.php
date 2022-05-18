<?php
namespace App\Model;
class AnneeScolaire extends Model{
    private int $id;
    private string $valeur;


    public function __construct() 
    {
        parent::$table='anneeScolaire';
    }
    public function inscriptions():array
    {
        return [];
    }


    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id):self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of valeur
     */ 
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set the value of valeur
     *
     * @return  self
     */ 
    public function setValeur($valeur):self
    {
        $this->valeur = $valeur;

        return $this;
    }
}