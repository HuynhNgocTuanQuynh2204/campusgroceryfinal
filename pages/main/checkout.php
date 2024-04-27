<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Delivery Details</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="index.php?manage=place_order" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Name<span>*</span></p>
                                    <input type="text" name="name" required>
                                </div>
                            </div>                                
                        </div>                            
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="address" required>
                        </div>
                        <div class="checkout__input">
                            <p>Town/City<span>*</span></p>
                            <input type="text" name="city" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>State<span>*</span></p>
                                    <select name="state" required>
                                        <option value="">Please select</option>
                                        <option value="NSW">NSW</option>
                                        <option value="VIC">VIC</option>
                                        <option value="QLD">QLD</option>
                                        <option value="WA">WA</option>
                                        <option value="SA">SA</option>
                                        <option value="TAS">TAS</option>
                                        <option value="ACT">ACT</option>
                                        <option value="NT">NT</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Postcode / ZIP<span>*</span></p>
                                    <input type="text" name="postcode" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="number" name="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <?php
                        // Hiển thị thông tin sản phẩm trong giỏ hàng
                        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            foreach($_SESSION['cart'] as $cart_item) {
                                ?>
                                <input type="hidden" name="product_name[]" value="<?php echo $cart_item['product_name']; ?>">
                                <input type="hidden" name="stock_id[]" value="<?php echo $cart_item['stock_id']; ?>">
                                <input type="hidden" name="quantity[]" value="<?php echo $cart_item['quantity']; ?>">
                                <input type="hidden" name="unit_price[]" value="<?php echo $cart_item['unit_price']; ?>">
                                <input type="hidden" name="image_path[]" value="<?php echo $cart_item['image_path']; ?>">
                                <?php
                            }
                        }
                        ?>
                        <button type="submit" name="placeorder" class="site-btn">PLACE ORDER</button>                                                   
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
