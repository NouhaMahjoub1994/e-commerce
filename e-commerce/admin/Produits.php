<?php include ('verif.php'); ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    
    <title>Amado - Furniture Ecommerce Template | Produits</title>
	
<?php include ('../includes/links.php') ?>
<?php if (isset($_SESSION['Msg'])): ?>
						<div class="alert alert-success">
						<?php
						echo $_SESSION['Msg'];
						unset($_SESSION['Msg']);
						?> 
						</div>
							<?php endif ?>	
							
</head>
<body>
<?php include('../includes/header.php'); ?>
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Liste des produits</h2>
							</div>
                        <div class="cart-table clearfix">
						
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
										<th> # </th>
                                        <th>Nom</th>
                                        <th>Prix</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
								while ($row =mysqli_fetch_array($resultat))
								{?>
								
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="img/bg-img/<?php echo $row['image_1_produit']?>" class="img-rounded" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
										
                                            <h5><?php echo $row['nom_produit']; ?></h5>
                                        </td>
                                        <td class="price">
                                            <span><?php echo $row['prix_produit']; ?> DT</span>
                                        </td>
		
							<td>
                             <div class="btn-group">
							
				
						<a href="Modifier.php?edit=<?php echo $row['id_produit'] ?>" method="post">
                                       <button type="submit" name="edit" class="btn btn-sm btn-info" >Modifier</button>
                                  </a>
							<a class="btn btn-sm btn-danger" href="Produits.php?del=<?php echo $row['id_produit']; ?>" method="get">X</a>
							</div>
                            </td>
							
							<?php }?>
                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
						</div>
			 
						   <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <div class="cart-btn mt-100">
						
							<div class="col-12 mb-3">
							 <form action="Ajouter.php" method="post"> 
							
								<button type="submit" name="save" class="btn amado-btn w-100">Ajouter Produit</button>
						
                               
							   </form>
					
							
                                </div>
								</form>
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