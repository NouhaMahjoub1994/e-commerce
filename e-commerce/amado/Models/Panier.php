<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 22/01/2019
 * Time: 11:32
 */
require_once ('ConnexionDB.php');
class Panier
{
    private $cnxBD;

    /**
     * Panier constructor.
     * @param $cnxBD
     */
    public function __construct()
    {
       $this->cnxBD = ConnexionDB::getInstance();
        if(session_status()==PHP_SESSION_NONE) {
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier']=array();
            $_SESSION['totale']=0;
        }
    }
public function add($product_id,$product_qty,$product_price){
        if(isset($_SESSION['panier'][$product_id])){
            $_SESSION['panier'][$product_id]+=$product_qty;
        }else{
            $_SESSION['panier'][$product_id]=$product_qty;
        }
        if (isset($_SESSION['totale'])){
            $_SESSION['totale']+=$product_price;
        }else{
            $_SESSION['totale']=$product_price;
        }
}
public function count(){
        return array_sum($_SESSION['panier']);
}
public function totale(){

}
}
