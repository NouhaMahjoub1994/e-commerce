<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 14/02/2019
 * Time: 13:46
 */
$user = 'root';
$password = '';
$database = 'ecommerce';
$db = new mysqli('localhost',$user,$password,$database);
$content_per_page = 6;
$group_no  = strtolower(trim(str_replace("/","",$_REQUEST['group_no'])));
$start = ceil($group_no * $content_per_page);
$sql= "SELECT distinct * FROM `produit` ";
if(isset($_GET['categorie']) && $_GET['categorie']!="") :
    $categorie =explode(',',$_REQUEST['categorie']);
    if(strstr( $sql,'WHERE')) {
        $sql .= " AND categorie IN ('" . implode("','", $categorie) . "')";
    }else{
        $sql .= " WHERE categorie IN ('" . implode("','", $categorie) . "')";

    }
endif;
if(isset($_REQUEST['brand']) && $_REQUEST['brand']!="") :
    $brand = explode(',',url_clean($_REQUEST['brand']));
    if(strstr( $sql,'WHERE')) {
        $sql .= " AND marque IN ('" . implode("','", $brand) . "')";
    }else{
        $sql .= " WHERE marque IN ('" . implode("','", $brand) . "')";

    }
endif;


if(isset($_GET['size']) && $_GET['size']!="") :
    $size = explode(',',$_REQUEST['size']);
    $sql.=" AND size IN (".implode(',',$size).")";
endif;
$sql.=" LIMIT $start, $content_per_page";
$all_product=array();
$all_product=$db->query($sql);
$rowcount=mysqli_num_rows($all_product);
//echo "sql autoload".$sql;

function url_clean($String)
{
    return str_replace('_',' ',$String);
}
?>
   <?php if(isset($all_product)): $i = 0; ?>
            <?php foreach ($all_product as $key => $products) :
        $image='Assets/img/product-img/'.$products['image_2_produit'];?>

<!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="<?=$image?>" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="<?=$image?>" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$<?php echo $products['prix_produit']; ?></p>
                                    <a href="product-details.php">
                                        <h6><?php echo $products['nom_produit']; ?></h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <!--   <div class="ratings">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                   </div>-->
                                   <div class="cart">
                                       <a href="addcart.php?quantity=1&id=<?=$products['id_produit']?>&prix_prod=<?=$products['prix_produit']?>&addtocart=add" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
        <?php $i++; endforeach; ?>
<?php endif; ?>