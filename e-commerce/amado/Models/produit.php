<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 17/01/2019
 * Time: 17:33
 */
require_once ('ConnexionDB.php');

class produit
{
    private  $product_price;
    private $product_title;
    private $product_image;
    private $cnxBD;


        public function __construct()
        {
            $this->cnxBD = ConnexionDB::getInstance();
        }

    public function get_products_resume(){
        $req = $this->cnxBD->prepare('SELECT id_produit,nom_produit,prix_produit,image_1_produit FROM produit');
        $req->execute();
        $res = $req->fetchAll();
return $res;
    }
    public function get_product_by_id($id){
        $req = $this->cnxBD->prepare('SELECT id_produit,nom_produit,prix_produit,image_1_produit,image_2_produit,image_3_produit,image_4_produit,descrip_produit,image_panier_produit FROM produit WHERE id_produit=:id_prod');
        $req->execute(array('id_prod'=>$id));
        $res = $req->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->product_price;
    }

    /**
     * @return mixed
     */
    public function getProductTitle()
    {
        return $this->product_title;
    }

    /**
     * @return mixed
     */
    public function getProductImage()
    {
        return $this->product_image;
    }
    public function allbrands(){
       $req= $this->cnxBD->prepare("SELECT distinct marque FROM `produit` GROUP BY marque");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
    public function allcategories(){
        $req= $this->cnxBD->prepare("SELECT distinct categorie FROM `produit`  GROUP BY categorie");
        $req->execute();
        $res = $req->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
}
