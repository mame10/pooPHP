<?php
abstract class Personne extends Model{
    protected int $id;
    protected string $nomComplet;
    protected string $role;
    protected static int $nbrPersonne;

    public function __construct() 
    {

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
    public function setId(int $id):self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet():string
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet(string $nomComplet) : self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get the value of nbrPersonne
     */ 
    public static function getNbrPersonne():int
    {
        return self::$nomComplet;
    }

    /**
     * Set the value of nbrPersonne
     *
     * @return  self
     */ 
    public static function setNbrPersonne(int $nbrPersonne):void
    {
       self::$nbrPersonne=$nbrPersonne;

    }

    /**
     * Get the value of role
     */ 
    public function getRole():string
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole(string $role):self
    {
        $this->role = $role;

        return $this;
    }
}