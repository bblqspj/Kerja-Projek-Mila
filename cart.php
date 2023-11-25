<?php

@include 'conn.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

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

        .display-product-table table {
    width: 90%;
    text-align: center;
    margin-top: 100px;
}

.display-product-table table thead th{
    padding: 1rem;
    background-color: black;
    color: white;
}

.display-product-table table td {
    padding: 1.5rem;
    color: black;
}

.display-product-table table tr:nth-child(even) {
    background-color: lightgray;
}

.display-product-table table td:first-child {
    padding: 0;
}

.display-product-table table th, td {
      border: 1px solid #000;
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
        width: 50%;
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

<header class="header">
        <a href="https://www.instagram.com/galeriedeperles/" class="instagram"><i class="fa-brands fa-instagram" style="font-size: 20px;"></i></a>
        <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping" style="font-size: 20px;"></i> <span id="cart">0</span></a>  
   </header>
   
   <a href="beranda.php" alt="">
   <img src="logoapkkpbaru.jpg" class="img" width="5%" height="5%"></img>
   </a>

   <h3 class="heading">shopping cart</h3>

<section class="display-product-table">

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>


         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>Rp. <?php echo $total_price; ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="text" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
               </form>   
            </td>
            <td><?php echo $sub_total = (float)$fetch_cart['price'] * (int)$fetch_cart['quantity']; ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php  
            };
         };
         ?>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($total_price > 1)?'':'disabled'; ?>">procced to checkout</a>
   </div>

</section>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>