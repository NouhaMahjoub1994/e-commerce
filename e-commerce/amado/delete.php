<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 31/01/2019
 * Time: 08:59
 */

/*if(!empty($_POST['id'])) {
    $id = $_POST['id'];
$_SESSION['panier'][$id]="";
    session_write_close();
    header('location:cart.php');
}*/

if(!empty($_SESSION["panier"])) {
    foreach ($_SESSION["panier"] as $k => $v) {
        if ($_POST["id"] == $k)
            unset($_SESSION["panier"][$k]);
        if (empty($_SESSION["panier"]))
            unset($_SESSION["panier"]);
    }
}
?>