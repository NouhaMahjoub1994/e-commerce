<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 30/01/2019
 * Time: 17:30
 */

require_once ('../includes/_header.php');
require_once "../amado/Models/Util.php";
$util = new Util();

//Clear Session
$_SESSION["member_id"] = "";
session_destroy();

// clear cookies
$util->clearAuthCookie();

header("Location: ./");
?>