<?php
namespace App\Core;
class Model implements IModel{
    public static function table(){
        return 0;
    }

    public function insert():int{
        return 0;
    }

    public function update():int{
        return 0;
    }

    public static function delete($id):int{
        $sql="delete from" .self::table()."where id=$id";
        return 0;
    }

    public static function findAll():array{
        $sql="select * from ".self::table();
        echo $sql;
        return [];
    }
    public static function findById($id):object|null{
        $sql="select * from ".self::table() ."where id=$id";
        echo $sql;
        return [];

    }
    public static function findBy(string $sql,array $data=[],bool $single=false):object|null|array{
        return [];
    }
  
}