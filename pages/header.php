<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="index.php"><img src="myassets\logo\logoPNG.png" alt="Logo"></a>
                </div>
            </div>
            <?php if(!isset($_GET['manage']) || ($_GET['manage'] != 'shopping_card' && $_GET['manage'] != 'checkout' && $_GET['manage'] != 'thanks')) { ?>
            <div class="col-lg-6">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="index.php?manage=search" method="POST">
                            <input type="text" placeholder="What do you need?" name="keyword">
                            <button type="submit" class="site-btn" name="search">SEARCH</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if(!isset($_GET['manage']) || ($_GET['manage'] != 'shopping_card' && $_GET['manage'] != 'checkout' && $_GET['manage'] != 'thanks')) { ?>
            <?php
            // Kiểm tra xem session cart có tồn tại không
            if(isset($_SESSION['cart'])) {
                // Đếm tổng số lượng sản phẩm trong giỏ hàng
                $total_quantity = 0;
                foreach($_SESSION['cart'] as $cart_item) {
                    $total_quantity += $cart_item['quantity'];
                }

                // Tính tổng số tiền
                $total_price = 0;
                foreach($_SESSION['cart'] as $cart_item) {
                    $total_price += $cart_item['quantity'] * $cart_item['unit_price'];
                }
            } else {
                // Nếu không có sản phẩm trong giỏ hàng, gán giá trị mặc định cho số lượng và tổng tiền
                $total_quantity = 0;
                $total_price = 0;
            }
            ?>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="index.php?manage=shopping_card"><i class="fa fa-shopping-cart"></i> <span><?php echo $total_quantity; ?></span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$<?php echo number_format($total_price, 2); ?></span></div>
                </div>
            </div>
            <?php } ?>

        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
