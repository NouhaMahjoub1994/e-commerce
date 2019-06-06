
<?php include('../includes/header.php'); ?>

    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
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
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>S'inscrire</h2>
                        </div>

                        <form action="login_handler.php" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="first_name" value="" placeholder="Nom et prénom" required name="full_name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="last_name" value="" placeholder="Pseudo" required name="member_name">
                                </div>
                               <!-- <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="company" placeholder="Company Name" value="">
                                </div>-->
                                <div class="col-12 mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="Email" value="" name="email">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="password" class="form-control" id="pssword" value="" placeholder="Mot de passe" required name="member_password">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="password" class="form-control" id="password_confirm" value="" placeholder="Confirmation Mot de passe" required name="password_confirm">
                                </div>
                                <div class="col-12 mb-3">
                                    <select class="w-100" id="country" name="country">
                                        <option value="usa">Etats Unis</option>
                                        <option value="uk">France</option>
                                        <option value="fra">Inde</option>
                                        <option value="ind">Australie</option>
                                        <option value="aus">Australie</option>
                                        <option value="cana">Canada</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control mb-3" id="street_address" placeholder="Adresse" value="" name="street_address">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="city" placeholder="Ville" value="" name="city">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" class="form-control" id="zipCode" placeholder="Code postale" value="" name="zipCode">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="number" class="form-control" id="phone_number" min="0" placeholder="Numéro téléphone" value="" name="phone_number">
                                </div>
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox d-block mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="remember">
                                            <label class="custom-control-label" for="customCheck2">Rester connecté(e)</label>
                                        </div>
                                    </div>
                                <div class="col-12 mb-3">
                                    <div class="cart-btn ">
                                        <input class="btn amado-btn w-100" type="submit" value="S'inscrire" name="submit">
                                    </div>
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