 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="breadcrumb__text">
                      <h2>Shop Now</h2>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Breadcrumb Section End -->
 <!-- Product Section Begin -->
 <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                     if(isset($_GET['page'])){
                        $current_page = $_GET['page'];
                    }else {
                        $current_page =1;
                    }
                    if($current_page == '' || $current_page == 1){
                        $begin = 0;
                    }else{
                        $begin =($current_page*12)-12;
                    }
                    $product = "SELECT * FROM stock 
                    INNER JOIN product_subcategory ON stock.product_subcategory_id = product_subcategory.product_subcategory_id 
                    WHERE stock.product_subcategory_id = " . $_GET['id'] . "
                    ORDER BY stock.stock DESC 
                    LIMIT $begin, 12";
                        $query = mysqli_query($mysqli,$product);
                    $sql_product_subcategory ="SELECT * FROM product_subcategory WHERE product_subcategory.product_subcategory_id = '$_GET[id]' LIMIT 1";
                        $query_product_subcategory= mysqli_query($mysqli,$sql_product_subcategory);
                        $product_subcategory = mysqli_fetch_array($query_product_subcategory);
                    ?>
                      <div class="section-title">
                        <h2><?php echo $product_subcategory['product_subcategory'] ?></h2>
                    </div>
                    <div class="row">
                        <?php
                          while( $row = mysqli_fetch_array($query)){
                        ?>
                       
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $row['image_path'] ?>">
                                <form action="index.php?manage=addtocard&stock=<?php echo $row['stock'] ?>"
                                     method="POST">
                                     <div class="product__item__pic__hover">
                                         <button type="submit" name="addtocard">
                                             <i class="fa fa-shopping-cart"></i>
                                         </button>
                                     </div>
                                 </form>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="index.php?manage=product_name&id=<?php echo $row['stock'] ?>"><?php echo $row['product_name'] ?></a></h6>
                                    <h5>$<?php echo $row['unit_price'] ?><sup>/kg</sup></h5>
                                    <p>
                                     <?php 
                                        if ($row['in_stock'] > 0) {
                                            echo "In Stock: " . $row['in_stock'];
                                        } else {
                                            echo "Out of Stock";
                                        }
                                    ?>
                                 </p>
                                </div>
                            </div>
                        </div>
                       <?php
                          }
                       ?>
                
                </div>
                <?php
                        $sql_page= mysqli_query($mysqli, 'SELECT * FROM stock');
                        $row_count = mysqli_num_rows($sql_page);
                        $page = ceil($row_count / 12);
                        ?>
                        <p>Current page: <?php echo $current_page; ?>/<?php echo $current_page; ?></p><br>
                    <div class="product__pagination">
                    <?php
                        for ($i = 1; $i <= $current_page; $i++) {
                    ?>
                        <a href="index.php?manage=productpage&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        <?php
                    }
                    ?>
                    </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->