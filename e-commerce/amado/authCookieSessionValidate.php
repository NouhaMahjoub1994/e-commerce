<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 28/01/2019
 * Time: 12:28
 */
require_once ('../includes/_header.php');
require_once "../amado/Models/authentifier.php";
require_once "../amado/Models/Util.php";

$auth = new authentifier();
$util = new Util();

// Get Current date, time
$current_time = time();
$current_date = date("Y-m-d H:i:s", $current_time);

// Set Cookie expiration for 1 month
$cookie_expiration_time = $current_time + (30 * 24 * 60 * 60);  // for 1 month

$isLoggedIn = false;

// Check if loggedin session and redirect if session exists
if (! empty($_SESSION["member_id"])) {
    $isLoggedIn = true;
}
// Check if loggedin session exists
else if (! empty($_COOKIE["member_login"]) && ! empty($_COOKIE["random_password"]) && ! empty($_COOKIE["random_selector"])) {
    // Initiate auth token verification diirective to false
    $isPasswordVerified = false;
    $isSelectorVerified = false;
    $isExpiryDateVerified = false;

    // Get token for username
    $userToken = $auth->getTokenByUsername($_COOKIE["member_login"],0);

    // Validate random password cookie with database
    if (password_verify($_COOKIE["random_password"], $userToken["password_hash"])) {
        $isPasswordVerified = true;
    }

    // Validate random selector cookie with database
    if (password_verify($_COOKIE["random_selector"], $userToken["selector_hash"])) {
        $isSelectorVerified = true;
    }

    // check cookie expiration by date
    if($userToken["expiry_date"] >= $current_date) {
        $isExpiryDateVerified = true;
    }

    // Redirect if all cookie based validation returns true
    // Else, mark the token as expired and clear cookies
    if (!empty($userToken["id"]) && $isPasswordVerified && $isSelectorVerified && $isExpiryDateVerified) {
        $isLoggedIn = true;
    } else {
        if(!empty($userToken["id"])) {
            $auth->markAsExpired($userToken["id"]);
        }
        // clear cookies
        $util->clearAuthCookie();
    }
}
?>