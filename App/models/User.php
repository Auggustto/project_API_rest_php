<?php

namespace App\models;

class User 
{
    private static $table = 'users';

    // Criando um metodo para selecionar um usuario atraves do ID
    public static function get(int $id)
    {
        $conn = new \PDO(DBDRIVE. ':host='.DBHOST.';dbname='.DBNAME, DBUSER,DBPASS);
    }

}