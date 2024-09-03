<?php

class Conexao
{

    private static $conn = null;

    public static function getConexao()
    {
        if (self::$conn == null) {
            //Criar a conexão com o banco
            $opcoes = array(
                //Define o charset da conexão
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                //Define o tipo do erro como exceção
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //Definir o retorno das consultas ao banco
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );

            //Configurar de acordo com o seu ambiente
            $endereco = "mysql:host=localhost;dbname=dblivros";
            $usuario = "root";
            $senha = "bancodedados";

            try {
                self::$conn = new PDO(
                    $endereco,
                    $usuario,
                    $senha,
                    $opcoes
                );
            } catch (PDOException $e) {
                echo "Erro ao conectar no banco de dados!<br>";
                echo $e->getMessage();
            }
        }

        return self::$conn;
    }
}
