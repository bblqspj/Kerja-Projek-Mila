<?php

include 'conn.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - gαleriedeperles</title>
    <!--icon-->
    <script src="https://kit.fontawesome.com/1ab39a6f54.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Crimson Text', serif;
            letter-spacing: 3px;
        }
        
        body {
            min-height: 100vh;
            display: block;
            align-items: center;
            justify-content: center;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
            overflow-x: hidden;
        }

        .cart {
            color: black;
            cursor: pointer;
            outline: none;
            margin-left: 500px;
            margin-bottom: 20px;
        }

    header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10%;
        }

        .instagram {
            cursor: pointer;
            margin-top: -20px;
            margin-left: 80px;
        }

        a {
            color: black;
            text-decoration: none;
        }

        .img {
            display: block;
            width: 10%;
            padding: 8px 8px;
            margin-left: 540px;
            margin-top: -90px;
        }
    

        
    </style>
</head>
<body>
<header class="header">
        <a href="https://www.instagram.com/galeriedeperles/" class="instagram"><i class="fa-brands fa-instagram" style="font-size: 20px;"></i></a>
        <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping" style="font-size: 20px;"></i> <span id="cart">0</span></a> 
   </header>
   
   <a href="beranda.php" alt="">
   <img src="logoapkkpbaru.jpg" class="img" width="5%" height="5%"></img>
   </a>

</body>
</html>