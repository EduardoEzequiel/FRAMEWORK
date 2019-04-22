<?php

namespace Core;

class DataBase2
{

    public static function getDataBase()
    {
        $conexao = require_once __DIR__ ."/../app/database.php";
        $servidor = $conexao['mysql']['host'];
        $usuario = $conexao['mysql']['user'];
        $senha = $conexao['mysql']['pass'];
        $banco = $conexao['mysql']['database'];
        
        try {
            $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
            return $conexao;
            echo "conectado com sucusso";
        } catch (\Exception $e) {
            $e->getMessage();
        }

    }

}