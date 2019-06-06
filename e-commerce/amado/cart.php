
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


<?php include ('all-products-for-cart.php');?>


                </div><!-- end row-->
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

   <?php include('../includes/footer.php') ?>

</body>

</html>