<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Shoping Cart Section Begin
?>

<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            if(isset($_SESSION['cart'])){
                                $total=0;
                                foreach($_SESSION['cart'] as $cart_item){
                                    $into_money = $cart_item['quantity'] * $cart_item['unit_price'];
                                    $total += $into_money;
                                    ?>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="img/product/<?php echo $cart_item['image_path']; ?>" alt="">
                                    <h5><?php echo $cart_item['product_name']; ?></h5>
                                </td>
                                <td class="shoping__cart__price">
                                    $<?php echo $cart_item['unit_price']; ?>
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <a href="index.php?manage=addtocard&minus=<?php echo $cart_item['stock_id'] ?>"><i class="fa-solid fa-square-minus"></i></a>
                                        <?php echo $cart_item['quantity']; ?>
                                        <a href="index.php?manage=addtocard&plus=<?php echo $cart_item['stock_id'] ?>"><i class="fa-solid fa-square-plus"></i></a>
                                    </div>
                                </td>

                                <td class="shoping__cart__total">
                                    $<?php echo $into_money; ?>
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a href="index.php?manage=addtocard&delete=<?php echo $cart_item['stock_id']?>"><span
                                            class="icon_close"></span></a>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                            <tr>
                                <td colspan="3"><b>Total</b></td>
                                <td>$<?php echo $total; ?></td>
                                <td></td>
                            </tr>
                            <?php
                            }else {
                                ?>
                            <tr>
                                <td colspan="5">
                                    <p>Hiện tại giỏ hàng trống</p>
                                </td>
                            </tr>
                            <?php 
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="index.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <a href="index.php?manage=addtocard&deleteall=1" class="primary-btn cart-btn">EMPTY SHOPPING
                        CART</a>
                    <a href="index.php?manage=shopping_card" class="primary-btn cart-btn cart-btn-right"><span
                            class="icon_loading"></span>
                        Upadate Cart</a>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-6">
                <div class="shoping__checkout">
                    <h5>Summary</h5>
                    <ul>
                        <li>Total <span>$<?php echo isset($total) ? number_format($total, 2) : '0.00'; ?></span>
                        </li>
                    </ul>
                    <?php if(isset($total) && $total > 0) { ?>
                    <a href="index.php?manage=checkout" class="primary-btn">PLACE AN ORDER</a>
                    <?php } else { ?>
                    <p style="color: green;">Orders cannot be placed when items are empty.</p>
                    <?php } ?>
                </div>

            </div>

        </div>
    </div>
</section>