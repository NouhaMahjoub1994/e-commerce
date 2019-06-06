<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Checkout</title>

    <?php include ('../includes/links.php') ?>

</head>

<body>
<script>

</script>


<?php include('../includes/header.php'); ?>

    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Se connecter</h2>
                        </div>

                        <form action="Produits.php" method="post" >
                            <div class="row">

                                 <!--<div class="col-12 mb-3">
                                     <input type="text" class="form-control" id="company" placeholder="Company Name" value="">
                                 </div>-->
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" value="" required name="username">
                                </div>

                                <div class="col-12 mb-3">
                                    <input type="password" class="form-control mb-3" id="password" placeholder="Mot de passe" value="" name="password" required>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="cart-btn ">
                                        <input class="btn amado-btn w-100" type="submit" value="Se connecter">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Rester connecté(e)</label>
                                    </div>
                                    <!--
                                   <div class="custom-control custom-checkbox d-block">
                                       <input type="checkbox" class="custom-control-input" id="customCheck3">
                                       <label class="custom-control-label" for="customCheck3">Ship to a different address</label>
                                   </div> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <!--   <div class="cart-summary">
                           <h5>Cart Total</h5>
                           <ul class="summary-table">
                               <li><span>subtotal:</span> <span>$140.00</span></li>
                               <li><span>delivery:</span> <span>Free</span></li>
                               <li><span>total:</span> <span>$140.00</span></li>
                           </ul>

                           <div class="payment-method">
                               <!-- Cash on delivery
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="cod" checked>
                                <label class="custom-control-label" for="cod">Cash on Delivery</label>
                            </div> -->
                    <!-- Paypal
                    <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="paypal">
                        <label class="custom-control-label" for="paypal">Paypal <img class="ml-15" src="img/core-img/paypal.png" alt=""></label>
                    </div>
                </div>

                <div class="cart-btn mt-100">
                    <a href="#" class="btn amado-btn w-100">Checkout</a>
                </div>
            </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

<?php include('../includes/footer.php') ?>


</body>

</html>