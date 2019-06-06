<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 25/01/2019
 * Time: 09:50
 */
require_once('../includes/_header.php');
require 'filesautoloader.php';
//var_dump($_SESSION);
if(!empty($_SESSION["member_id"])){
    if(count($_SESSION['panier'])!=0){
           $c = new commande();
            $c->add();
            $LastCommandId = $c->get_last_command();
            foreach ($_SESSION['panier'] as $prodId => $qty) {
                $cl = new commandeLine();
                $cl->add($LastCommandId['commandeId'], $prodId, $qty);
            }
        $_SESSION['success'] = "Votre commande a été validé avec succès!";
        unset($_SESSION['panier']);
         header('location:cart.php');
    }else{
        $_SESSION['danger']="Votre panier est vide, veuillez la remplir!";
     header('location:shop.php');
    }
}else{
    header('location:login.php');
}