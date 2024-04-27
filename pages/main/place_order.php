<?php

require("mail/sendmail.php");
require("carbon/autoload.php");
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$now->format('Y-m-d H:i:s');


if(isset($_POST['placeorder'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    
    $query = "INSERT INTO place_order (name, address, city, state, postcode, phone, email, order_date) 
              VALUES ('$name', '$address', '$city', '$state', '$postcode', '$phone', '$email', '$now')";
    mysqli_query($mysqli, $query);

   
    $order_id = mysqli_insert_id($mysqli);

    if(isset($_POST['product_name']) && !empty($_POST['product_name'])) {
        $product_name = $_POST['product_name'];
        $stock_id = $_POST['stock_id'];
        $quantity = $_POST['quantity'];
        $unit_price = $_POST['unit_price'];
        $image_path = $_POST['image_path'];

        for($i = 0; $i < count($product_name); $i++) {
            $query = "INSERT INTO order_detail (order_id, product_name, stock_id, quantity, unit_price, image_path) 
                      VALUES ('$order_id', '$product_name[$i]', '$stock_id[$i]', '$quantity[$i]', '$unit_price[$i]', '$image_path[$i]')";
            mysqli_query($mysqli, $query);
        }
    }

    
    unset($_SESSION['cart']);

    echo'<script type="text/javascript">
    window.location.href = "index.php?manage=thanks";
  </script>';
}
?>
