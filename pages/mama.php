
          <?php
            if(isset($_GET['manage'])){
                $tam = $_GET['manage'];
            } else {
                $tam = '';
            }
            if($tam =='menu'){
                include("main/product.php");
            }else if($tam =='search'){
                include("main/search.php");
            }else if($tam =='menu_2'){
                include("main/product_2.php");
            }else if($tam =='product_name'){
                include("main/product_name.php");
            }else if($tam =='addtocard'){
                include("main/addtocard.php");
            }else if($tam =='shopping_card'){
                include("main/shopping_card.php");
            }else if($tam =='checkout'){
                include("main/checkout.php");
            }else if($tam =='place_order'){
                include("main/place_order.php");
            }else if($tam =='thanks'){
                include("main/thanks.php");
            } else {
                include("main/index.php");
            }
          ?>
        </div>
    </div>
    </div>
        <div class="clear"></div>
</div>