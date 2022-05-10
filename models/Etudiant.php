<?php
namespace App\Models;
use App\Config\Constantes;
class Etudiant extends User{
    private string $matricule;
    private string $adresse;
    private string $sexe;
    public function __construct()
    {
        $this->role=Constantes::ROLE_ETUDIANT;
    }

    public function inscriptions():array
    {
        return [];
    }

    public function demandes():array
    {
        return [];
    }
}