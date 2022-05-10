<?php
namespace App\Models;
use App\Config\Constantes;
class AC extends User{
    public function __construct()
    {
        $this->role=Constantes::ROLE_AC;
    }

    public function inscriptions():array
    {
        return [];
    }

    public function demande():AC
    {
        return new AC();
    }
}