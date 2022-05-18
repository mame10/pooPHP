<?php
class Module extends Model{
    private int $id;
    private string $nomModule;


    public function __construct() 
    {
        parent::$table='module';
    }
    public function rp():Module
    {
        return new Module;
    }

    public function professeurs():array
    {
        return [];
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
     * Get the value of nomModule
     */ 
    public function getNomModule()
    {
        return $this->nomModule;
    }

    /**
     * Set the value of nomModule
     *
     * @return  self
     */ 
    public function setNomModule($nomModule):self
    {
        $this->nomModule = $nomModule;

        return $this;
    }
}