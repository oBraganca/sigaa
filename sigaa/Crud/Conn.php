<?php



namespace CRUD;

USE \PDOException;
USE \PDO;


class Conn
{


    private static $host = 'localhost';
    private static $user = 'root';
    private static $pass = '';
    private static $name = 'syssigaa';

    private static $connect = null;


    public static function getConn(){

        return self::connect();
    }

    private static function connect(){
        try {
            if (self::$connect == null) {
                $dsn = 'mysql:host=' . self::$host . ';dbname=' . self::$name;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$connect = new PDO($dsn, self::$user, self::$pass, $options);
                self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
            die;
        }

        return self::$connect;
    }


    private function __clone(){
    }


    private function __wakeup(){
    }

}


?>
