<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda - gαleriedeperles</title>
    <!--icon-->
    <script src="https://kit.fontawesome.com/1ab39a6f54.js" crossorigin="anonymous"></script>

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

        header {
            display: inline-block;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            padding-top: 50px;
            margin-left: 30%;
        }

        
        .cart {
            color: black;
            padding: 30%;
            outline: none;
            margin-left: 100%;
        }

        .shop {
            cursor: pointer;
        }

        .isi {
            margin-top: 200px;
            text-align: center;
            display: grid;
            justify-content: center;
            align-items: center;
        }

        .h1 {
            display: flex;
            justify-content: center;
            font-size: 30px;
            letter-spacing: 10px;
            text-align: center;
            margin-top: -40px;
        }

        .desc {
            font-size: 16px;
            text-align: center;
            margin: 10px 45px;
       }

       .navbar {
           font-size: 16px;
           color: black;
           text-decoration: none;
           display: inline-block;
           text-align: center;
           margin-bottom: 50px;
           margin: 10px;
       }

       .navbar a {
           color: black;
           text-decoration: none;
           position: relative;
       }

       .footer a {
           color: black;
           text-decoration: none;
           display: inline-block;
           text-align: center;
           margin: 3px;
           padding: 240px 5%;
           font-size: 14px;
           margin-right: -20px;
       }

       .product {
          margin: 10px;
          padding: 30px;
          display: inline-block;
          text-align: center;
        }

        .product h2 {
           font-size: 13px;
           margin: 10px;
        }

        .product p {
            font-size: 13px;
        }

        .p-product {
            margin-left: 35px;
            margin-top: -250px;
        }

        h8 {
        font-size: 13px;
        margin-top: 3px;
        margin-left: 430px;
        margin-bottom: 20px;
        display: grid;
    }
    </style>
</head>
<body>
    <header>

        <div class="navbar" style="margin-left: 160px;">
            <a href="beranda.html" class="link">shop</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="testi.html" alt="">testi</a>
        </div> 
        <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping" style="font-size: 20px;"></i></a>
        
        <div class="container">
            <div class="isi">
                <h1 class="h1">gαlerie de perles.</h1>
                <span class="desc">welcome to my humble shop. everything 
                </br>
                wαs mαde with much thought and cαre- 
                </br>
                just for you.</span>
            </div>

        <div class="footer" style="margin-left: 80px;">
            <a href = "beranda.php">αll</a>
            <a href = "simple.php">simple</a>
            <a href = "casual.php">cαsuαl</a>
            <a href = "other.php">other</a>
            </br>
        </div>
    </header>

    <div class="p-product">
    <div class="product">
        <a href="lips.php" alt="">
            <img src="img/polos ttulip.jpg" style="width: 300px; height: 300px;" alt=""> 
        </a>
        <h2>tulip beαds brαcelet</h2>
        <p> stαrt 8.OOO</p>
    </div>

    <div class="product">
        <a href="nwrib.php" alt="">
            <img src="img/polos ribbon.jpg" style="width: 300px; height: 300px;" alt=""> 
        </a>
        <h2>ribbon beαds brαcelet</h2>
        <p> stαrt 8.OOO</p>
    </div>

    <div class="product">
        <a href="lt.php" alt="">
            <img src="img/polos flower.jpg" style="width: 300px; height: 300px;" alt=""> 
        </a>
        <h2>flower beαds brαcelet</h2>
        <p> stαrt 8.OOO</p>
    </div>

    <div class="product">
        <a href="fl.php" alt="">
            <img src="img/polos fl.jpg" style="width: 300px; height: 300px;" alt=""> 
        </a>
        <h2>flower letter beαds brαcelet</h2>
        <p> stαrt 8.OOO</p>
    </div>

    <div class="product">
        <a href="butter.php" alt="">
            <img src="img/butterfly/polos butter.jpg" style="width: 300px; height: 300px;" alt=""> 
        </a>
        <h2>butterfly beαds brαcelet</h2>
        <p> stαrt 1O.OOO</p>
    </div>

    <div class="product">
        <a href="dais.php" alt="">
            <img src="img/daisy/polos daisy.jpg" style="width: 300px; height: 300px;" alt=""> 
        </a>
        <h2>daisy beαds brαcelet</h2>
        <p> stαrt 8.OOO</p>
    </div>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<h8>galeriedeperles // galeriedeperles@gmail.com</h8>
</body>
</html>