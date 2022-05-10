<?php
class Demande extends Model{
    private int $id;
    private string $motif;
    private \DateTime $date;
    private string $etat;

    public function demandes():array
    {
        return [];
    }

    public function demande():Etudiant
    {
        return new Etudiant();
    }


}