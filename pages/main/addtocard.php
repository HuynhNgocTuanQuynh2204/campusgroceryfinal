<?php
if (isset($_GET['plus'])) {
    $plus = $_GET['plus'];
    $sql = "SELECT * FROM stock WHERE stock ='" . $plus . "' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $remaining_amount = $row['in_stock']; 

        
        $number_of_items_in_the_cart = 0;
        foreach ($_SESSION['cart'] as &$cart_item) {
            if ($cart_item['stock_id'] == $plus) {
                $number_of_items_in_the_cart = $cart_item['quantity'];
                break;
            }
        }

        
        if (($number_of_items_in_the_cart + 1) <= $remaining_amount) {
            foreach ($_SESSION['cart'] as &$cart_item) {
                if ($cart_item['stock_id'] != $plus) {
                    $product[] = array(
                        'product_name' => $cart_item['product_name'],
                        'stock_id' => $cart_item['stock_id'],
                        'quantity' => $cart_item['quantity'],
                        'unit_price' => $cart_item['unit_price'],
                        'image_path' => $cart_item['image_path'],
                        'stock' => $cart_item['stock']
                    );
                } else {
                    $increased_quantity = $cart_item['quantity'] + 1;
                    $product[] = array(
                        'product_name' => $cart_item['product_name'],
                        'stock_id' => $cart_item['stock_id'],
                        'quantity' => $increased_quantity,
                        'unit_price' => $cart_item['unit_price'],
                        'image_path' => $cart_item['image_path'],
                        'stock' => $cart_item['stock']
                    );
                }
            }
            $_SESSION['cart'] = $product;
        }
    }
    echo '<script type="text/javascript">
            window.location.href = "index.php?manage=shopping_card";
          </script>';
}


if (isset($_GET['minus'])) {
    $minus = $_GET['minus'];
    $product = array();
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['stock_id'] != $minus) {
            $product[] = array(
                'product_name' => $cart_item['product_name'],
                'stock_id' => $cart_item['stock_id'],
                'quantity' => $cart_item['quantity'],
                'unit_price' => $cart_item['unit_price'],
                'image_path' => $cart_item['image_path'],
                'stock' => $cart_item['stock']
            );
        } else {
            $reduced_quantity = $cart_item['quantity'] - 1;
            if ($cart_item['quantity'] > 1) {
                $product[] = array(
                    'product_name' => $cart_item['product_name'],
                    'stock_id' => $cart_item['stock_id'],
                    'quantity' => $reduced_quantity,
                    'unit_price' => $cart_item['unit_price'],
                    'image_path' => $cart_item['image_path'],
                    'stock' => $cart_item['stock']
                );
            } else {
                $product[] = array(
                    'product_name' => $cart_item['product_name'],
                    'stock_id' => $cart_item['stock_id'],
                    'quantity' => $cart_item['quantity'],
                    'unit_price' => $cart_item['unit_price'],
                    'image_path' => $cart_item['image_path'],
                    'stock' => $cart_item['stock']
                );
            }
        }
    }
    $_SESSION['cart'] = $product;
    echo '<script type="text/javascript">
            window.location.href = "index.php?manage=shopping_card";
          </script>';
}
 if (isset($_SESSION['cart']) && isset($_GET['delete'])){
     $delete = $_GET['delete'];
     $product = array();
     foreach($_SESSION['cart'] as $cart_item){
         if ($cart_item['stock_id'] != $delete){
             $product[]= array(
                 'product_name' => $cart_item['product_name'],
                 'stock_id' => $cart_item['stock'],
                 'quantity' => $cart_item['quantity'],
                 'unit_price' => $cart_item['unit_price'],
                 'image_path' => $cart_item['image_path'],
                 'stock' => $cart_item['stock']
             );
         }
     }
     $_SESSION['cart'] = $product;
     echo'<script type="text/javascript">
    window.location.href = "index.php?manage=shopping_card";
  </script>';
 }

if (isset($_GET['deleteall'])&&$_GET['deleteall']==1){
    unset($_SESSION['cart']);
    echo'<script type="text/javascript">
    window.location.href = "index.php?manage=shopping_card";
  </script>';
}

if(isset($_POST['addtocard'])){
    $stock = $_GET['stock']; 
    $quantity = 1;
    $sql = "SELECT * FROM stock WHERE stock ='".$stock."' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($query);
    if($row){
       
        if($quantity > $row['in_stock']){
            
            $quantity = $row['in_stock'];
        }
        
        $new_product = array(array('product_name'=>$row['product_name'],'stock_id'=>$stock,'quantity'=>$quantity,'unit_price'=>$row['unit_price']
        ,'image_path'=>$row['image_path'],'stock'=>$row['stock']));
       
        if(isset($_SESSION['cart'])){
            $found = false;
            foreach($_SESSION['cart'] as &$cart_item){
              
                if($cart_item['stock'] == $stock){
                   
                    if(($cart_item['quantity'] + $quantity) > $row['in_stock']){
                        $cart_item['quantity'] = $row['in_stock'];
                    } else {
                        $cart_item['quantity'] += $quantity;
                    }
                    $found = true;
                }
            }
            if($found == false){
                
                $_SESSION['cart'] = array_merge($_SESSION['cart'], $new_product);
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    echo'<script type="text/javascript">
    window.location.href = "index.php?manage=shopping_card";
  </script>';
}
?>
