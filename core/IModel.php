<?php
namespace App\Core;

interface IModel{
    //instances : appel à travers un objet
    public function insert():int;
    public function update():int;
    //static : appel à travers la classe
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):object|null;
    public static function findBy(string $sql,array $data=[],bool $single=false):object|null|array;

}