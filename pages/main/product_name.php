<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shop Now</h2>
                    <div class="breadcrumb__option">
                        <a href="home.html">All Items</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <?php
            $product = "SELECT * FROM stock 
                        INNER JOIN product_category ON stock.product_category_id = product_category.product_category_id 
                        WHERE stock.stock = " . $_GET['id'];
            $query = mysqli_query($mysqli, $product);

            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large" src="img/product/<?php echo $row['image_path'] ?>" alt="">
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $row['product_name'] ?></h3>
                        <div class="product__details__price">$<?php echo $row['unit_price'] ?></div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum amet recusandae ipsum alias nostrum minima, praesentium quaerat asperiores aliquam tempore dolore consectetur at, cum minus expedita a hic quae aut?</p>
                       
                        <form action="index.php?manage=addtocard&stock=<?php echo $row['stock'] ?>" method="POST"> 
                            <?php if ($row['in_stock'] > 0) { ?>
                                <input class="primary-btn" name="addtocard" type="submit" value="ADD TO CARD">
                            <?php } else { ?>
                                <button class="btn btn-danger" type="button">Out of Stock</button>
                            <?php } ?>                        
                        </form>
                        <ul>
                            <li><b>In Stock: </b><span><?php echo $row['in_stock'] > 0 ? $row['in_stock'] : 'Out of Stock'; ?></span></li>
                            <li><b>Unit quantity</b><span><?php echo $row['unit_quantity'] ?></span></li>
                        </ul>
                    </div>
                </div>  
            <?php
            }
            ?>              
        </div>
    </div>
</section>
<!-- Product Details Section End -->
