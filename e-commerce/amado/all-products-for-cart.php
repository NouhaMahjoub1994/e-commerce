<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 22/01/2019
 * Time: 15:48
 */
require_once ('../includes/_header.php');
require_once('Models/produit.php');
?>
  <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Panier</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nom</th>
                                        <th>Prix</th>
                                        <th>Quantité</th>

                                    </tr>
                                </thead>
                                <tbody>


 <?php
 $i=0;
 $somme=0;
foreach ($_SESSION['panier'] as $key=>$value){
    $i++;
$p=new produit();
$produit=$p->get_product_by_id($key);
$somme+=$produit['prix_produit']*$value;
$image='Assets/img/product-img/'.$produit['image_panier_produit'];
    ?>

<tr id="table-row-<?= $key ?>">
    <td class="cart_product_img">
        <a href="#"><img src="<?=$image?>" alt="Product"></a>
    </td>
    <td class="cart_product_desc">
        <h5><?=$produit['nom_produit'];?></h5>
    </td>
    <td class="price">
        <span>$<?=$produit['prix_produit'];?></span>
    </td>
    <td class="qty">
        <div class="qty-btn d-flex">
            <p>Qty</p>
            <div class="quantity">
                <span class="qty-minus" onclick="var effect = document.getElementById('qty[<?=$i?>]'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                <input type="number"  class="qty-text" id="qty[<?=$i?>]" step="1" min="0" max="300" name="quantity" value="<?=$value?>">
                <span class="qty-plus" onclick="var effect = document.getElementById('qty[<?=$i?>]'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
            </div>
            <button type="button" class="btn btn-danger space-for-button" onclick="deleteRecord(<?php echo $key; ?>);">X</button>
        </div>
    </td>

</tr>

<?php }
 $_SESSION['totale']=$somme; ?>
    </tbody>
                            </table>
                        </div>
  </div>
<div class="col-12 col-lg-4">
    <div class="cart-summary">
        <h5>Récapitulatif</h5>
        <ul class="summary-table">
            <li><span>sous-total:</span> <span id="totale">$ <?= $_SESSION['totale']?></span></li>
            <li><span>livraison:</span> <span>Free</span></li>
            <li><span>total:</span> <span>$ <?= $_SESSION['totale']?></span></li>
        </ul>
        <div class="cart-btn mt-100">
            <a href="checkout_handler.php" class="btn amado-btn w-100">Valider commande</a>
        </div>
    </div>
</div>
