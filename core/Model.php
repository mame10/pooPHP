<?php
class Model implements IModel{
    public function insert():int{
        return 0;
    }

    public function update():int{
        return 0;
    }

    public static function delete():int{
        return 0;
    }

    public static function findAll():array{
        return [];
    }
    public static function findById():object|null{
        return [];
    }
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array{
        return [];
    }
  
}