

<?php require('../includes/header.php');
//require_once ('Models/commande.php');
require_once('Models/commandeLine.php');
require_once ('authCookieSessionValidate.php');
require_once('Models/produit.php');
$user = 'root';
$password = '';
$database = 'ecommerce';
$db = new mysqli('localhost',$user,$password,$database);
$p=new produit();
$all_brand=$p->allbrands();
$all_categorie=$p->allcategories();
//var_dump($all_brand);

$sql= "SELECT distinct id_produit FROM `produit`";
if(isset($_GET['categorie']) && $_GET['categorie']!="") :
    $categorie = $_GET['categorie'];
if(strstr( $sql,'WHERE')) {
    $sql .= " AND categorie IN ('" . implode("','", $categorie) ."')";
}else{
    $sql .= " WHERE categorie IN ('" . implode("','", $categorie) ."')";
}
endif;

if(isset($_GET['brand']) && $_GET['brand']!="") :
    $brand = $_GET['brand'];
    if(strstr( $sql,'WHERE')) {
    $sql .= " AND marque IN ('" . implode("','", $brand) . "')";
}else{
    $sql .= " WHERE marque IN ('" . implode("','", $brand) . "')";
}
endif;
$all_product=$db->query($sql);
/*var_dump($all_product);
echo "sql shop".$sql;*/
//exit();
$content_per_page = 3;
$rowcount=mysqli_num_rows($all_product);
$total_data = ceil($rowcount / $content_per_page);
function data_clean_reverse($str){
    return str_replace('_',' ',$str);

}
function data_clean($str)
{
    return str_replace(' ','_',$str);
}
?>

        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget brands mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Categories</h6>
                <form method="get" id="search_form">
                    <div class="widget-desc">
                        <?php foreach ($all_categorie as $key => $new_categorie):
                            if(isset($_GET['categorie'])) :
                                if(in_array(data_clean($new_categorie['categorie']),$_GET['categorie'])) :
                                    $categorie_check='checked="checked"';
                                else : $categorie_check="";;
                                endif;
                            endif;
                            ?>
                            <!-- Single Form Check -->
                            <div class="form-check">

                                <div class="checkbox"><label><input type="checkbox" value="<?=data_clean($new_categorie['categorie']); ?>" <?=@$categorie_check?>  name="categorie[]" class="sort_rang categorie"><?=ucfirst($new_categorie['categorie']); ?></label></div>


                            </div>

                        <?php endforeach; ?>

                    </div>

            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget brands mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Marques</h6>
                <form method="get" id="search_form">
                <div class="widget-desc">
                    <?php foreach ($all_brand as $key => $new_brand) :
                        if(isset($_GET['brand'])) :
                            if(in_array(data_clean($new_brand['marque']),$_GET['brand'])) :
                                $check='checked="checked"';
                            else : $check="";
                            endif;
                        endif;
                        ?>
                        <!-- Single Form Check -->
                        <div class="form-check">

                            <div class="checkbox"><label><input type="checkbox" value="<?=data_clean($new_brand['marque']);?>" <?=@$check?> name="brand[]" class="sort_rang brand"><?=ucfirst($new_brand['marque']); ?></label></div>


                        </div>

                    <?php endforeach; ?>

                </div>

            </div>
<!----
<!--    <!-- ##### Single Widget ##### -->
<!--            <div class="widget color mb-50">-->
<!--                <!-- Widget Title -->
<!--                <h6 class="widget-title mb-30">Couleur</h6>-->
<!---->
<!--                <div class="widget-desc">-->
<!--                    <ul class="d-flex">-->
<!---->
<!--                        <li><a href="#" class="color1 "></a></li>-->
<!--                        <li><a href="#" class="color2 checkbox">  <label value="--><?///*=data_clean($new_brand['marque']);*/?><!--" --><?///*=@$check*/?><!-- name="brand[]" class="sort_rang brand"></label></a></li>-->
<!--                        <li><a href="#" class="color3"></a></li>-->
<!--                        <li><a href="#" class="color4"></a></li>-->
<!--                        <li><a href="#" class="color5"></a></li>-->
<!--                        <li><a href="#" class="color6"></a></li>-->
<!--                        <li><a href="#" class="color7"></a></li>-->
<!--                        <li><a href="#" class="color8"></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->

         <!--   <!-- ##### Single Widget ##### -->
<!--            <div class="widget price mb-50">-->
<!--                <!-- Widget Title -->
<!--                <h6 class="widget-title mb-30">Prix</h6>-->
<!---->
<!--                <div class="widget-desc">-->
<!--                    <div class="slider-range">-->
<!--                        <div data-min="10" data-max="1000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1000" data-label-result="">-->
<!--                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>-->
<!--                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>-->
<!--                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>-->
<!--                        </div>-->
<!--                        <div class="range-price">$10 - $1000</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                            <?php
                            if (isset($_SESSION['danger'])){?>
                                <div class="alert alert-danger" role="alert">
                                    <?=$_SESSION['danger'];
                                    unset($_SESSION['danger']);?></div> <?php } ?>
                            <?php if (isset($_SESSION['success'])){?>
                                <div class="alert alert-success" role="alert">
                                    <?=$_SESSION['success'];
                                    unset($_SESSION['success']);?></div> <?php } ?>

                        </div>
                    </div>


                      <div id="results" class="row"></div>


                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                <li class="page-item"><a class="page-link" href="#">04.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
</form>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

<?php include('../includes/footer.php') ?>


</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        var total_record = 0;
        var brand=check_box_values('brand');
        var categorie=check_box_values('categorie');
    //    var size=check_box_values('size');
        var total_groups = <?php echo $total_data; ?>;
        $('#results').load("autoload.php?group_no="+total_record+"&brand="+brand+"&categorie="+categorie ,  function() {
            total_record++;
        });
        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() == $(document).height())

            {
                if(total_record <= total_groups)
                {
                    loading = true;
                    $('.loader').show();
                    $.get("autoload.php?group_no="+total_record+"&brand="+brand+"&categorie="+categorie ,
                        function(data){
                            if (data != "") {
                                $("#results").append(data);
                                $('.loader').hide();
                                total_record++;
                            }
                        });
                }
                // total_record ++;
            }
        });
        function check_box_values(check_box_class){
            var values = new Array();
            $("."+check_box_class+":checked").each(function() {
                values.push($(this).val());
            });
            return values;
        }
        $('.sort_rang').change(function(){
            $("#search_form").submit();
            return false;
        });
    });
</script>