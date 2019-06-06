<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 25/01/2019
 * Time: 11:23
 */
require_once ('ConnexionDB.php');
class commande
{
    private $cnxBD;
    public function __construct()
    {
        $this->cnxBD = ConnexionDB::getInstance();
        if(session_status()==PHP_SESSION_NONE) {
            session_start();
        }


    }
public function add(){
$userId=$_SESSION['Athen']->userId;
$totale=$_SESSION['totale'];
      try {
          $req = $this->cnxBD->prepare("INSERT INTO `commande` (`userId`,`totale`) VALUES ('$userId','$totale');");
          $req->execute();
      }catch (Exception $e){
          echo 'commande non ajouté a la base';
      }

}
    public function get_last_command(){
        try{
            $req=$this->cnxBD->prepare('SELECT commandeId FROM commande ORDER BY commandeId DESC LIMIT 1;');
            $req->execute();
            $res = $req->fetch(PDO::FETCH_ASSOC);
        }catch (Exception $e){
            echo 'ligne de commande non ajouté à la base';
        }
        return $res;
    }

}

