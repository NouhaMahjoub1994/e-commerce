<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 22/01/2019
 * Time: 12:29
 */
require_once ('../includes/_header.php');
require_once('Models/produit.php');
if (isset($_GET['id'])){
    $panier->add($_GET['id'],$_GET['quantity'],$_GET['prix_prod']);
    $_SESSION['success']="le produit a été ajouté au panier";
    header('location:product-details.php?id='.$_GET['id']);

}


