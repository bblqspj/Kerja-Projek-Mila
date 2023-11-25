<?php

@include 'conn.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $id = $_POST['id'];
   $placed_on = $_POST['placed_on'];
   $total_price = $_POST['total_price'];
   $metode = $_POST['metode'];
   $total_product = $_POST['total_product'];
   $address = $_POST['address'];

   $cart_query = mysqli_query($conn, "SELECT * FROM cart");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO order(name, id, placed_on, total_price, metode, total_product, address) VALUES('$name','$id','$placed_on','$total_price','$metode','$total_product','$address')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your address : <span>".$address."</span> </p>
            <p> your payment mode : <span>".$metode."</span> </p>
            <p>(pay when product arrives)</p>
         </div>
            <a href='beranda.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
        * {
        box-sizing: border-box;
        margin: 0;
        font-family: 'Crimson Text', serif;
        letter-spacing: 3px;
        padding-top: 30px;
    }
    p {
        font-size: 13px;
        margin-top: 50px;
        margin-left: -1000px;
        display: grid;
        justify-content: center;
    }

    header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10%;
        }

        .img {
            display: block;
            width: 10%;
            padding: 8px 8px;
            margin-left: 540px;
            margin-top: -90px;
        }

        .h3 {
            display: flex;
            font-size: 30px;
            letter-spacing: 10px;
            margin-top: -40px;
            margin-left: 30px;
        }

        .cart {
            color: black;
            cursor: pointer;
            outline: none;
            margin-left: 500px;
            margin-bottom: 20px;
            color: black;
           text-decoration: none;
           position: relative;
        }

.btn,
.option-btn,
.delete-btn,
.update-btn {
        justify-content: center;
        align-items: center;
        margin: 10px 80px;
        background-color: #fff;
        color: black;
        width: 20%;
        border-style: solid;
        border-width: 2px;
        padding: 8px 8px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.2s ease-in-out;
        color: black;
        text-decoration: none;
        display: inline-block;
        text-align: center;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover,
.update-btn {
    justify-content: center;
        align-items: center;
        background-color: black;
        color: white;
        border-style: solid;
        border-width: 2px;
}


.delete-btn,
.update-btn {
    margin-top: 0;
    color: black;
}






</style>
<body>

<?php include 'header.php'; ?>


   <h1 class="tittle" style="margin-left: 500px">checkout !.</h1>

   <section class="message-container" style="margin-left: 500px;">
        <div class="box-container">
            <?php 
             $select_cart = mysqli_query($conn, "SELECT * FROM cart");
             if(mysqli_num_rows($select_cart) > 0){
                while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);

               ?>
               <div class="box" style="margin-left: 500px;">
                        <p>barang: <span><?php echo $fetch_cart['name']; ?></span></p>
                        <p>jumlah: <span><?php echo $fetch_cart['quantity']; ?></span></p>
                            
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total" style="margin-left: -500px;"> total harga: Rp. <?= $total_price; ?>/- </span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on devlivery</option>
               <option value="credit cart">credit cart</option>
               <option value="paypal">paypal</option>
            </select>
         </div>
         <a href="beranda.php">
      <input type="submit" value="order now" name="order_btn" class="btn" onclick="return confirm('mohon ditunggu!');" ></input>
   </a>
   </form>
   </div>

</section>

   

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>