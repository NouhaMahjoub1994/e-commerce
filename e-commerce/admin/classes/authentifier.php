<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 08/01/2019
 * Time: 15:03
 */
require 'ConnexionDB.php';

class authentifier
{ private $cnxBD;

    /**
     * authentifier constructor.
     * @param $cnxBD
     */
    public function __construct()
    {
        $this->cnxBD = ConnexionDB::getInstance();
    }

    function login($d)
    {
        $req = $this->cnxBD->prepare('SELECT utilisateur.pseudo,utilisateur.userId,role.slug,role.level FROM utilisateur  LEFT JOIN role On utilisateur.roleId=role.id WHERE pseudo= :username AND password= :password');
        $req->execute($d);
        $res = $req->fetchAll();
        if (count($res) > 0) {
          $_SESSION['Athen']=$res[0];
          return true;
        }
        return false;
    }
    function allow($rang){
        $req = $this->cnxBD->prepare('SELECT role.slug,role.level FROM role');
        $req->execute();
        $res = $req->fetchAll();
        print_r($res);
    }
}
