<?php

class Database{
    public static function connect(){
        $db = new mysqli('localhost','server','root','maxiumm_store');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
