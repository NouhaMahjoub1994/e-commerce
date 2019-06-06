<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 25/01/2019
 * Time: 17:20
 */
require_once ('ConnexionDB.php');
class commandeLine
{private $cnxBD;
    public function __construct()
    {
        $this->cnxBD = ConnexionDB::getInstance();
        if(session_status()==PHP_SESSION_NONE) {
            session_start();
        }


    }
    public function add($commandId,$prodId,$qty){
        try {
            $req = $this->cnxBD->prepare("INSERT INTO `lignecommande` (`produitId`,`produitQuantite`,`commandeId`) VALUES ('$prodId','$qty','$commandId');");
            $req->execute();
        }catch (Exception $e){
            echo ' ligne de commande non ajouté a la base';
            exit();
        }
    }

}