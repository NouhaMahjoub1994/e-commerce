


<?php
include_once('../includes/header.php');
require_once('Models/produit.php');
/*unset($_SESSION);
exit();*/
$p=new produit();
$prod = $p->get_product_by_id($_GET['id']);
if(empty($prod)){
    header('location:index.php');
    exit(1);
}

?>


        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <nav aria-label="breadcrumb">
                            <?php
                            if (isset($_SESSION['danger'])){?>
                            <div class="alert alert-danger" role="alert">
                                <?=$_SESSION['danger'];
                                unset($_SESSION['danger']);?></div> <?php } ?>
                            <?php if (isset($_SESSION['success'])){?>
                            <div class="alert alert-success" role="alert">
                                <?=$_SESSION['success'];
                                unset($_SESSION['success']);?></div> <?php } ?>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <?php if(!empty($prod['image_1_produit'])){
                                        $image1 = 'Assets/img/product-img/' . $prod['image_1_produit'];?>
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(<?=$image1?>);">
                                    </li>
                                    <?php } ?>
                                    <?php if(!empty($prod['image_2_produit'])){
                                        $image2 = 'Assets/img/product-img/' . $prod['image_2_produit'];?>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(<?=$image2?>);">
                                    </li>
                                    <?php } ?>
                                    <?php if(!empty($prod['image_3_produit'])){
                                        $image3='Assets/img/product-img/'.$prod['image_3_produit'];?>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(<?=$image3?>);">
                                    </li>
                                    <?php } ?>
                                    <?php if(!empty($prod['image_4_produit'])){
                                        $image4 = 'Assets/img/product-img/' . $prod['image_4_produit']; ?>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(<?=$image4?>);">
                                    </li>
                                    <?php } ?>
                                </ol>
                                <div class="carousel-inner">
                                    <?php if(!empty($image1)){ ?>
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="<?=$image1?>">
                                            <img class="d-block w-100" src="<?=$image1?>" alt="First slide">
                                        </a>
                                    </div>
                                   <?php } ?>
                                    <?php if(!empty($image2)){ ?>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?=$image2?>">
                                            <img class="d-block w-100" src="<?=$image2?>" alt="Second slide">
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php if(!empty($image3)){ ?>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?=$image3?>">
                                            <img class="d-block w-100" src="<?=$image3?>" alt="Third slide">
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php if(!empty($image4)){ ?>
                                    <div class="carousel-item">
                                        <a class="gallery_img" href="<?=$image4?>">
                                            <img class="d-block w-100" src="<?=$image4?>" alt="Fourth slide">
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">$<?=$prod['prix_produit']?></p>
                                <a href="#">
                                    <h6><?=$prod['nom_produit']?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>

                            <div class="short_overview my-5">
                                <p><?=$prod['descrip_produit']?></p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" method="get" action="addtocart.php" >
                                <div class="cart-btn d-flex mb-50">
                                    <p>Qtit</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id_prod" value="<?=$_GET['id']?>">
                                <input type="hidden" name="prix_prod" value="<?=$prod['prix_produit']?>">
                                <button type="submit" name="addtocart" value="add" class="btn amado-btn addtocart">Ajouter au panier</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
<?php require_once('../includes/footer.php'); ?>

</body>

</html>