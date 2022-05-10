<?php
interface IModel{
    //instances appel à travers un objet
    public function insert():int;
    public function update():int;
    //static appelé à travers la classe
    public static function delete(int $id):int;
    public static function findAll():array;
    public static function findById(int $id):object|null;
    public static function findBy(string $sql,array $data=null,$single=false):object|null|array;

}