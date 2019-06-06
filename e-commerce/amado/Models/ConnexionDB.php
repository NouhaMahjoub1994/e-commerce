<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 15/08/2018
 * Time: 14:11
 */

class ConnexionDB
{
    private static $_dbname = "ecommerce";
    private static $_user = "root";
    private static $_pwd = "";
    private static $_host = "localhost";
    private static $_bdd = null;


    private function __construct(){
        try {
            self::$_bdd = new PDO("mysql:host=" . self::$_host . ";dbname=" . self::$_dbname . ";charset=utf8", self::$_user, self::$_pwd,
                array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
                ));
            self::$_bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
 public  static function  getInstance(){

     if (!self::$_bdd) {
         new ConnexionDB();
         return (self::$_bdd);
     }
     return (self::$_bdd);
 }

}