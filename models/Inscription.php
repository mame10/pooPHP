<?php
namespace App\Model;
class Inscription extends Model{
    private int $id;
    private string $etat;

    public function __construct(){
        parent::$table='inscription';
    }

    public function etudiant():Etudiant
    {   
        $sql="select p.* from inscription i,personne p
            where p.id=i.etudiant_id
            and p.role like 'ROLE_ETUDIANT'
            and i.id=".$this->id;
        return new Etudiant();
    }

    public function ac():AC
    {
        $sql="select p.* from inscription i,personne p
            where p.id=i.ac_id
            and p.role like 'ROLE_AC
            and i.id=".$this->id;
        return new AC();
    }

    public function anneeScoalire():AnneeScoalire
    {
        $sql="select a.* from inscription i,annee_scolaire a
            where a.id=i.annee_id
            and i.id=".$this->id;
        return new AnneeScolaire();
    }

    public function classe():Classe
    {   
        $sql="select c.* from inscription i,classe c
            where c.id=i.classe_id
            and i.id=".$this->id;
        return new Classe();
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
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

   
    public function setEtat(string $etat):self
    {
        $this->etat = $etat;

        return $this;
    }
}