
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
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Se connecter</h2>
                        </div>

                        <form action="login_handler.php" method="post">
                            <div class="row">

                                <!-- <div class="col-12 mb-3">
                                     <input type="text" class="form-control" id="company" placeholder="Company Name" value="">
                                 </div>-->
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" value="" required name="member_name">
                                </div>

                                <div class="col-12">
                                    <input type="password" class="form-control mb-3" id="password" placeholder="Mot de passe" value="" name="member_password" required>
                                </div>
                                <div class=" col-12 mb-3">
                                    <a href="login.php" class="lien">Mot de passe oubliée</a>
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2" name="remember">
                                        <label class="custom-control-label" for="customCheck2">Rester connecté(e)</label>
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="cart-btn ">
                                        <input class="btn amado-btn w-100" type="submit" value="Se connecter" name="submit">
                                    </div>
                                </div>

                            </div>
                        </form>
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

            </div>
        </div>
    </div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

<?php include('../includes/footer.php') ?>


</body>

</html>