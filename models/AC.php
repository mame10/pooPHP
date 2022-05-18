<?php
namespace App\Model;
use App\Config\Constantes;
class AC extends User{
    public function __construct()
    {
        parent::$role=Constantes::ROLE_AC;
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

    public function demande():AC
    {
        return new AC();
    }
}