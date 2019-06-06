<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 17/01/2019
 * Time: 18:20
 */
require 'Models/produit.php';
$p=new produit();
$res=$p->get_products_resume();

 foreach ($res as $val){
     $image='Assets/img/product-img/'.$val->image_1_produit;
     ?>
<!-- Single Catagory -->
<div class="single-products-catagory clearfix">
    <a href="product-details.php?id=<?= $val->id_produit;?>">
        <img src=<?=$image ?> alt="">
        <!-- Hover Content -->
        <div class="hover-content">
            <div class="line"></div>
            <p> From $<?php  echo $val->prix_produit?> </p>
            <h4><?php  echo $val->nom_produit?> </h4>
        </div>
    </a>
</div>
<?php }?>