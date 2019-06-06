<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 08/01/2019
 * Time: 15:03
 */
require_once 'ConnexionDB.php';
require_once 'Util.php';

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

    function login($username,$password)
    {
        $req = $this->cnxBD->prepare('SELECT utilisateur.pseudo,utilisateur.userId,role.slug,role.level FROM user  LEFT JOIN role On utilisateur.roleId=role.id WHERE pseudo= :username AND password= :password');
        $req->execute(array('username'=>$username,
            'password'=>$password));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        if (count($res) > 0) {
          return $res;
        }
        return false;
    }
    function allow($rang){
        $req = $this->cnxBD->prepare('SELECT role.slug,role.level FROM role');
        $req->execute();
        $res = $req->fetchAll();

    }
    function getMemberByEmail($email){
        $req=$this->cnxBD->prepare("SELECT pseudo,mail from user where mail=:email");
        $req->execute(array('email'=>$email));
        $res=$req->fetch(PDO::FETCH_ASSOC);
        return $res;

    }
    function getMemberByUsername($username) {
        $query = 'Select * from user where pseudo = :username';
        $req = $this->cnxBD->prepare($query);
        $req->execute(array('username'=>$username));
        $res=$req->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    function getTokenByUsername($username,$expired) {
        $query = "Select * from tbl_token_auth where username = :username and is_expired = :expired";
        $req = $this->cnxBD->prepare($query);
        $req->execute(array('username'=>$username,
           'expired'=>$expired));
        $res=$req->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    function markAsExpired($tokenId) {
        $query = "UPDATE tbl_token_auth SET is_expired = :expired WHERE id = :tokenId";
        $expired = 1;
        $req = $this->cnxBD->prepare($query);
       $req->execute(array('expired'=>$expired,
            'tokenId'=>$tokenId));
    }

    function insertToken($username, $random_password_hash, $random_selector_hash, $expiry_date) {
        $query = "INSERT INTO `tbl_token_auth` (`username`,`password_hash`,`selector_hash`,`expiry_date`) values ('$username', '$random_password_hash','$random_selector_hash' ,'$expiry_date')";
        $req = $this->cnxBD->prepare($query);
        $req->execute();
    }
    function signin($full_name,$pseudo,$email,$password_hash,$country,$street_address,$city,$zipCode,$phone_number){
        $query="INSERT INTO user (`fullName`,`pseudo`,`mail`,`password`,`country`,`street_address`,`city`,`zipCode`,`phone_number`,`roleId`) VALUES ('$full_name','$pseudo','$email','$password_hash','$country','$street_address','$city','$zipCode','$phone_number','1')";
        $req=$this->cnxBD->prepare($query);
        $req->execute();
    }

}


