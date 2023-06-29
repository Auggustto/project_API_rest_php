<?php

namespace App\models;

class User 
{
    private static $table = 'users';

    // Criando um metodo para selecionar um usuario atraves do ID
    public static function get(int $id)
    {
        $conn = new \PDO(DBDRIVE. ':host='.DBHOST.';dbname='.DBNAME, DBUSER,DBPASS);

        // Selecionando todos os dados do DB e utilizando as var já definidas em config
        $sql = 'SELECT * FROM' .self::$table. 'WHERE id = :id'; // Obs: Já que são var static precisamos usar .self

        // Statements serve para evitar ataques de SQL INJECTION.
        $statement = $conn->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();

        // Verificando se houve retorno na consulta
        if($statement-> rowCount() > 0)
        {

        } else{
            throw new \Exception("Usuário não encontrado!");
            
        }

    }
}