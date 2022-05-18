<?php
namespace App\Model;
class Demande extends Model{
    private int $id;
    private string $motif;
    private \DateTime $date;
    private string $etat;


    public function __construct() 
    {
        parent::$table='demande';
    }
    public function acs():array
    {
        return [];
    }

    public function etudiant():Demande
    {
        return new Demande();
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
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
     * Get the value of motif
     */ 
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set the value of motif
     *
     * @return  self
     */ 
    public function setMotif($motif):self
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date):self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

  
    public function setEtat($etat):self
    {
        $this->etat = $etat;

        return $this;
    }
}