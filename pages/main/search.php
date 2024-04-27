 <!-- Product Section Begin -->
 <h3 style="text-align: center; padding:5px ;">Keyword search: <?php echo $_POST['keyword'];  ?></h3>
  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Search Results</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
 <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><?php echo $_POST['keyword'];  ?></h2>
                    </div>
                    <?php
                    if(isset($_POST['search'])){
                        $keyword = $_POST['keyword'];
                    } else{
                        $keyword = '';
                    }
                        $product = "SELECT * FROM stock,product_category WHERE stock.product_category_id = product_category.product_category_id AND stock.product_name LIKE'%".$keyword."%'";
                        $query = mysqli_query($mysqli,$product);
                    ?>
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
            </div>
        </div>
    </section>
    <!-- Product Section End -->