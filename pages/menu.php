<?php if(!isset($_GET['manage']) || ($_GET['manage'] != 'shopping_card' && $_GET['manage'] != 'checkout' && $_GET['manage'] != 'thanks')) { ?>
<!-- Menu Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <nav class="header__menu">
                <ul>
                    <li <?php if(!isset($_GET['manage']) || ($_GET['manage'] == 'index')) echo 'class="active"'; ?>><a href="index.php">All Items</a></li>
                    <?php
                    // Truy vấn để lấy danh sách danh mục cha
                    $sql = "SELECT DISTINCT pc.product_category_id, pc.product_category
                            FROM product_category pc
                            LEFT JOIN product_subcategory ps ON pc.product_category_id = ps.product_category_id
                            ORDER BY pc.product_category_id ASC";

                    $result = mysqli_query($mysqli, $sql);

                    // Hiển thị danh mục cha và dropdown danh mục con tương ứng (nếu có)
                    while($row = mysqli_fetch_array($result)){
                        echo "<li ";
                        if(isset($_GET['id']) && $_GET['id'] == $row['product_category_id']){
                            echo 'class="active"';
                        }
                        echo "><a href='index.php?manage=menu&id=" . $row['product_category_id'] . "'>" . $row['product_category'] . "</a>";

                        // Truy vấn để kiểm tra xem có danh mục con không
                        $sub_sql = "SELECT * FROM product_subcategory WHERE product_category_id = " . $row['product_category_id'];
                        $sub_result = mysqli_query($mysqli, $sub_sql);
                        $num_rows = mysqli_num_rows($sub_result);

                        // Nếu có danh mục con, hiển thị dropdown
                        if($num_rows > 0){
                            echo "<ul class='header__menu__dropdown'>";
                            while($sub_row = mysqli_fetch_array($sub_result)){
                                echo "<li ";
                                if(isset($_GET['manage']) && $_GET['manage'] == 'menu_2' && isset($_GET['id']) && $_GET['id'] == $sub_row['product_subcategory_id']){
                                    echo 'class="active"';
                                }
                                echo "><a href='index.php?manage=menu_2&id=" . $sub_row['product_subcategory_id'] . "'>" . $sub_row['product_subcategory'] . "</a></li>";
                            }
                            echo "</ul>";
                        }

                        echo "</li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Menu Section End -->
<?php } ?>
