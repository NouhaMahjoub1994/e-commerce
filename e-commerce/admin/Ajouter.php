<?php include ('verif.php'); 
?>

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
<?php include('../includes/header.php'); ?>
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-title">
                            <h2>Listes de produits</h2>
                        </div>

                        <form action="Ajouter.php" method="post">
                            <div class="row">
                                
                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" name="nom" value="" placeholder="Nom" required>
                                </div>
                           
                               <div class="col-12 mb-3">
                                   <div class="qty-btn d-flex">
                                       <p>Qty</p>
                                       <div class="quantity">
                                           <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                           <input type="number" class="qty-text" id="qty2" step="1" min="0" max="300" name="quantite" value="1">
                                           <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                       </div>
                                   </div>
								<div class="col-12 mb-3">
                                    <p>Prix</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty2" step="1" min="0" max="300" name="prix" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                </div>                                </div>
							
			
				  <div class="col-md-6 mb-3">
				  <div class="widget brands mb-50">
                <h6 class="widget-title mb-50">Catégories</h6>
				
                <div class="widget-desc">
				<div class="form-check">
                        <input class="form-check-input" type="radio" value="chaise" name="categorie">
                        <label class="form-check-label" for="chaise">chaises</label>
                    </div>
				
				<div class="form-check">
                        <input class="form-check-input" type="radio" value="lit" name="categorie">
                        <label class="form-check-label" for="lits">lits</label>
                    </div>
				
				<div class="form-check">
                        <input class="form-check-input" type="radio" value="accessoire" name="categorie">
                        <label class="form-check-label" for="accessoire">Accessoires</label>
                    </div>
					<div class="form-check">
                        <input class="form-check-input" type="radio" value="meuble" id="categorie">
                        <label class="form-check-label" for="meuble">Meubles</label>
                    </div>
					<div class="form-check">
                        <input class="form-check-input" type="radio" value="deco" name="categorie">
                        <label class="form-check-label" for="deco">Home Deco</label>
                    </div>
					
					<div class="form-check">
                        <input class="form-check-input" type="radio" value="dressing" name="categorie">
                        <label class="form-check-label" for="dressing">Dressings</label>
                    </div>
					<div class="form-check">
                        <input class="form-check-input" type="radio" value="table" name="categorie">
                        <label class="form-check-label" for="table">Tables</label>
                    </div>
					
                </div>
            </div>
			</div>
     <div class="col-md-6 mb-3">
	
                  <div class="widget brands mb-50">         
                <!-- Widget Title -->
                <h6 class="widget-title mb-50">Marques</h6>

                <div class="widget-desc">
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="amado" name="marque[]">
                        <label class="form-check-label" for="amado">Amado</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ikea" name="marque[]">
                        <label class="form-check-label" for="ikea">Ikea</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="furniture" name="marque[]">
                        <label class="form-check-label" for="furniture">Furniture Inc</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="factory" name="marque[]">
                        <label class="form-check-label" for="factory">The factory</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="artdeco" name="marque[]">
                        <label class="form-check-label" for="artdeco">Artdeco</label>
                    </div>
                </div>
            </div>
		</div>
</div>		
       <div class="widget color mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-50">Couleurs</h6>

                <div class="widget-desc">
                    
					
                        <input type="checkbox" name="couleur[]" value="rouge">Rouge<br/>
                         <input type="checkbox" name="couleur[]" value="bleu">Bleu<br/>
                         <input type="checkbox" name="couleur[]" value="jaune">Jaune<br/>
                         <input type="checkbox" name="couleur[]" value="vert">Vert<br/>
                         <input type="checkbox" name="couleur[]" value="rose">Rose<br/>
                         <input type="checkbox" name="couleur[]" value="blac">Blanc<br/>
                         <input type="checkbox" name="couleur[]" value="noir">Noir<br/>
                         <input type="checkbox" name="couleur[]" value="gris">Gris<br/>
                    
				
					
                </div>
			
				</div>
							    
							   <h6 class="widget-title mb-50">Image</h6>
							   <input type="file" name="image" value="" required>
							   
				
		</div>

	
		
		<br>
		<br>
                          <div class="btn-group">  
				  <div class="col-md-10 mb-3">
                                 <a href="Produits.php" method="post">
                                       <button type="submit" name="ok" class="btn amado-btn w-100" >Valider</button>
                                    </div>                                                                    
					</a>
					<div class="col-md-10 mb-3">       
									
					 <a href="Produits.php" class="btn amado-btn w-100">Retour</a>
					
					       </div>                                                                    
                    </div> 
					
					</form>
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