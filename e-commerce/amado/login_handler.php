<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 14/01/2019
 * Time: 16:03
 */


require_once ('../includes/_header.php');
require_once('../amado/Models/authentifier.php');
require_once "../amado/Models/Util.php";

$auth = new authentifier();
$util = new Util();

require "authCookieSessionValidate.php";

if ($isLoggedIn) {
    $util->redirect("cart.php");
}

if (! empty($_POST["submit"])) {
    $isAuthenticated = false;

    $username = $_POST["member_name"];
    $password = $_POST["member_password"];
 if(isset($_POST['full_name'])){

     $full_name = $_POST['full_name'];
     $email = $_POST['email'];
     $Cpassword = $_POST['password_confirm'];
     $country = $_POST['country'];
     $street_address = $_POST['street_address'];
     $city = $_POST['city'];
     $zipCode = $_POST['zipCode'];
     $phone_number = $_POST['phone_number'];
     $password_hash = password_hash($_POST['member_password'], PASSWORD_BCRYPT);
     $auth->signin($full_name, $username, $email, $password_hash, $country, $street_address, $city, $zipCode, $phone_number);
     $res = $auth->login($username, $password_hash);
 }
    $user = $auth->getMemberByUsername($username);

    if (password_verify($password, $user["password"])) {
        $isAuthenticated = true;
    }

    if ($isAuthenticated) {
        $_SESSION["member_id"] = $user["userId"];
        $_SESSION["roleId"]=$user["roleId"];


        // Set Auth Cookies if 'Remember Me' checked
        if (! empty($_POST["remember"])) {
            setcookie("member_login", $username, $cookie_expiration_time);

            $random_password = $util->getToken(16);
            setcookie("random_password", $random_password, $cookie_expiration_time);

            $random_selector = $util->getToken(32);
            setcookie("random_selector", $random_selector, $cookie_expiration_time);

            $random_password_hash = password_hash($random_password, PASSWORD_BCRYPT);
            $random_selector_hash = password_hash($random_selector, PASSWORD_BCRYPT);

            $expiry_date = date("Y-m-d H:i:s", $cookie_expiration_time);

            // mark existing token as expired
            $userToken = $auth->getTokenByUsername($username, 0);


            if (! empty($userToken["id"])) {
                $auth->markAsExpired($userToken["id"]);
            }
            // Insert new token
            $auth->insertToken($username, $random_password_hash, $random_selector_hash, $expiry_date);
        } else {
            $util->clearAuthCookie();
        }
        if ($_SESSION["roleId"]==1) {
            $util->redirect("cart.php");
        }else{
            $util->redirect("all-my-products.php");
        }
    } else {
        $_SESSION['danger'] = "Mauvais identifiants ou compte inexistant! ";
        $util->redirect("login.php");

    }
}
?>
