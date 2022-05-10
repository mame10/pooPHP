<?php
class Classe extends Model{
    private int $id;
    private string $libelle;
    private string $filiere;
    private string $niveau;

    public function inscriptions():array
    {
        return [];
    }

    public function classe():RP
    {
        return new RP();

    }

    public function classes():ProfesseurClasse
    {
        return new ProfesseurClasse();
    }
}